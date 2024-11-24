<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class ApplianceController extends Controller
{
    /**
     * Show the appliance selection form.
     */
    public function index()
    {
        return view('appliances.create');
    }

    /**
     * Store the appliance data along with the total wattage.
     */


    public function store(Request $request)
{
    // Validate appliance wattages
    $request->validate([
        'appliance' => 'array',
        'appliance.*' => 'string',
        'fan_watt' => 'nullable|integer|min:1',
        'television_watt' => 'nullable|integer|min:1',
        'refrigerator_watt' => 'nullable|integer|min:1',
        'air_conditioner_watt' => 'nullable|integer|min:1',
        'washing_machine_watt' => 'nullable|integer|min:1',
        'custom_wattage' => 'array',
        'custom_wattage.*' => 'integer|min:1',
    ]);

    // Calculate total wattage from the inputs
    $totalWattage = 0;

    // Sum up wattage from predefined appliances
    foreach (['fan', 'television', 'refrigerator', 'air_conditioner', 'washing_machine'] as $appliance) {
        $wattField = "{$appliance}_watt";
        $totalWattage += $request->$wattField ? intval($request->$wattField) : 0;
    }

    // Sum up wattage from custom appliances
    if ($request->has('custom_wattage')) {
        foreach ($request->input('custom_wattage', []) as $customWatt) {
            $totalWattage += (int) $customWatt;
        }
    }

    // Store the total wattage along with the user ID in the appliances table
    Appliance::create([
        'user_id' => Auth::id(),
        'total_wattage' => $totalWattage,
    ]);

    // Calculate system requirements based on total wattage
    $requiredSystemSize = $this->calculateSystemSize($totalWattage);
    $recommendedSolarCapacity = $this->getRecommendedSolarCapacity($totalWattage);

    // Pass the calculation result to the view
    return view('appliances.system_requirements', [
        'totalWattage' => $totalWattage,
        'requiredSystemSize' => $requiredSystemSize,
        'recommendedSolarCapacity' => $recommendedSolarCapacity,
    ])->with('success', 'Appliance data saved successfully!');
}


    public function show()
{
    // Fetch all appliances along with user information (using Eloquent relationship)

        $appliances = Appliance::with('user')->get();
return view('admin.appliances.index', compact('appliances'));


}

    public function getAppliancesData(Request $request)
    {
        if ($request->ajax()) {
            // Fetching appliances along with user information
            $data = Appliance::with('user')->select('appliances.*');

            return DataTables::of($data)
                ->addIndexColumn() // Adds an index column
                ->addColumn('user_name', function ($row) {
                    return $row->user ? $row->user->username : 'N/A'; // Get the username from the User model
                })
                ->addColumn('email', function ($row) {
                    return $row->user ? $row->user->email : 'N/A'; // Get the email from the User model
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('d M Y, H:i A'); // Format the created_at date
                })
                ->addColumn('action', function ($row) {

                    // Delete button
                    $deleteBtn = '<button data-id="' . $row->id . '"
                                    class="btn btn-sm btn-danger deleterequest">Delete</button>';

                    return $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return response()->json(['error' => 'Unauthorized'], 401); // Handle unauthorized access
    }

    // Other methods (create, store, show, edit, update, destroy) can go here...


private function calculateSystemSize($totalWattage)
{
    // Convert wattage to kilowatts
    $totalKW = $totalWattage / 1000;

    // Calculate system size in kW, inverter size, and panel requirements for both hybrid and on-grid types
    $hybridInverter = $this->getInverterSize('hybrid', $totalKW);
    $onGridInverter = $this->getInverterSize('on-grid', $totalKW);

    // Include a "System Required" field to indicate the total system size needed
    return [
        'systemType' => $totalKW > 12 ? 'On-Grid' : 'Hybrid or Off-Grid',
        'systemRequired' => number_format($totalKW, 2) . ' kW',
        'recommendedInverter' => $totalKW > 12 ? 'On-Grid Inverter' : 'Hybrid or Off-Grid Inverter',
        'hybridInverterSize' => $hybridInverter['size'],
        'onGridInverterSize' => $onGridInverter['size'],
        'hybridPanels' => $hybridInverter['numberOfPanels'] . ' panels (585W each)',
        'onGridPanels' => $onGridInverter['numberOfPanels'] . ' panels (585W each)',
        'hybridAnnualGeneration' => number_format($hybridInverter['annualGeneration'], 2) . ' kWh',
        'onGridAnnualGeneration' => number_format($onGridInverter['annualGeneration'], 2) . ' kWh',
    ];
}

private function getInverterSize($type, $totalKW)
{
    $inverterSizeKw = 0;

    if ($type === 'hybrid') {
        if ($totalKW <= 1.2) {
            $inverterSizeKw = 1.2;
        } elseif ($totalKW <= 2.5) {
            $inverterSizeKw = 2.5;
        } elseif ($totalKW <= 3.2) {
            $inverterSizeKw = 3.2;
        } elseif ($totalKW <= 3.6) {
            $inverterSizeKw = 3.6;
        } elseif ($totalKW <= 5.6) {
            $inverterSizeKw = 5.6;
        } elseif ($totalKW <= 6.6) {
            $inverterSizeKw = 6.6;
        } elseif ($totalKW <= 8) {
            $inverterSizeKw = 8;
        } elseif ($totalKW <= 12) {
            $inverterSizeKw = 12;
        } else {
            // Return null or empty array if the hybrid system is not suitable
            return null; // or return [];
        }
    } elseif ($type === 'on-grid') {
        if ($totalKW <= 5) {
            $inverterSizeKw = 5;
        } elseif ($totalKW <= 10) {
            $inverterSizeKw = 10;
        } elseif ($totalKW <= 15) {
            $inverterSizeKw = 15;
        } elseif ($totalKW <= 20) {
            $inverterSizeKw = 20;
        } elseif ($totalKW <= 25) {
            $inverterSizeKw = 25;
        } elseif ($totalKW <= 30) {
            $inverterSizeKw = 30;
        } elseif ($totalKW <= 35) {
            $inverterSizeKw = 35;
        } elseif ($totalKW <= 40) {
            $inverterSizeKw = 40;
        } elseif ($totalKW <= 45) {
            $inverterSizeKw = 45;
        } elseif ($totalKW <= 50) {
            $inverterSizeKw = 50;
        }
    }

    // Calculate number of panels based on inverter size and 585W panel capacity
    $numberOfPanels = ceil(($inverterSizeKw * 1000) / 585);
    // Calculate annual energy generation based on 1 kW generating 1440 kWh annually
    $annualGeneration = $inverterSizeKw * 1440;

    return [
        'size' => "{$inverterSizeKw} kW",
        'numberOfPanels' => $numberOfPanels,
        'annualGeneration' => $annualGeneration,
    ];
}

private function getRecommendedSolarCapacity($totalWattage)
{
    if ($totalWattage >= 1000 && $totalWattage < 2000) {
        return '1 - 2 kW: Suitable for a small household, supporting essentials like lights, fans, and a few small appliances.';
    } elseif ($totalWattage >= 2000 && $totalWattage < 3000) {
        return '3 kW: Good for a small household with moderate usage, supporting essential appliances and some electronics.';
    } elseif ($totalWattage >= 3000 && $totalWattage < 5000) {
        return '5 kW: Ideal for an average household, powering essentials and moderate additional appliances like a TV, small fridge, etc.';
    } elseif ($totalWattage >= 5000 && $totalWattage < 7000) {
        return '7 kW: Suitable for a larger home with multiple heavy appliances, including refrigerators, TVs, fans, and lights.';
    } elseif ($totalWattage >= 7000 && $totalWattage < 10000) {
        return '10 kW: Recommended for a large house with several major appliances, including air conditioners, large refrigerators, and kitchen appliances.';
    } elseif ($totalWattage >= 10000) {
        return '10 kW+: Custom solution needed based on specific requirements. High-consumption homes or small commercial.';
    }

    return 'No recommendation available.';
}

public function destroy($id)
    {
        $appliances = Appliance::findOrFail($id);

        $appliances->delete();  //Delete the project

        return response()->json(['success' => 'Appliance deleted successfully.']);
    }

}
