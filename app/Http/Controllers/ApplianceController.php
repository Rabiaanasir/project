<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class ApplianceController extends Controller
{
    public function index()
    {
        return view('appliances.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'appliance' => 'array',
        'appliance.*' => 'string',
        'fan_watt' => 'nullable|integer|min:1',
        'television_watt' => 'nullable|integer|min:1',
        'refrigerator_watt' => 'nullable|integer|min:1',
        'air_conditioner_watt' => 'nullable|integer|min:1',
        'washing_machine_watt' => 'nullable|integer|min:1',
        'custom_wattage' => 'nullable|array',
        'custom_wattage.*' => 'nullable|integer|min:1',
    ]);

    $totalWattage = 0;

    foreach (['fan', 'television', 'refrigerator', 'air_conditioner', 'washing_machine'] as $appliance) {
        $wattField = "{$appliance}_watt";
        $totalWattage += $request->$wattField ? intval($request->$wattField) : 0;
    }

    if ($request->has('custom_wattage')) {
        foreach ($request->input('custom_wattage', []) as $customWatt) {
            $totalWattage += (int) $customWatt;
        }
    }

    Appliance::create([
        'user_id' => Auth::id(),
        'total_wattage' => $totalWattage,
    ]);

    $requiredSystemSize = $this->calculateSystemSize($totalWattage);
    $recommendedSolarCapacity = $this->getRecommendedSolarCapacity($totalWattage);

    return view('appliances.system_requirements', [
        'totalWattage' => $totalWattage,
        'requiredSystemSize' => $requiredSystemSize,
        'recommendedSolarCapacity' => $recommendedSolarCapacity,
    ])->with('success', 'Appliance data saved successfully!');
}


    public function show()
{
        $appliances = Appliance::with('user')->get();
return view('admin.appliances.index', compact('appliances'));


}

    public function getAppliancesData(Request $request)
    {
        if ($request->ajax()) {
            $data = Appliance::with('user')->select('appliances.*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('user_name', function ($row) {
                    return $row->user ? $row->user->username : 'N/A';
                })
                ->addColumn('email', function ($row) {
                    return $row->user ? $row->user->email : 'N/A';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('d M Y, H:i A');
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

        return response()->json(['error' => 'Unauthorized'], 401);
    }



private function calculateSystemSize($totalWattage)
{
    $totalKW = $totalWattage / 1000;


    $hybridInverter = $this->getInverterSize('hybrid', $totalKW);
    $onGridInverter = $this->getInverterSize('on-grid', $totalKW);

    // Handle wattage beyond max supported inverter size
    if (!$hybridInverter || !$onGridInverter) {
        return [
            'systemType' => 'Custom',
            'systemRequired' => number_format($totalKW, 2) . ' kW',
            'recommendedInverter' => 'Please contact support for a custom solar solution.',
            'hybridInverterSize' => 'Not available',
            'onGridInverterSize' => 'Not available',
            'hybridPanels' => 'Not available',
            'onGridPanels' => 'Not available',
            'hybridAnnualGeneration' => 'Not available',
            'onGridAnnualGeneration' => 'Not available',
        ];
    }

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

            return null;
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

    $numberOfPanels = ceil(($inverterSizeKw * 1000) / 585);
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

    // return 'No recommendation available.';
    return 'Your current usage is very low. A basic solar setup under 1 kW may be sufficient.';

}

public function destroy($id)
    {
        $appliances = Appliance::findOrFail($id);

        $appliances->delete();

        return response()->json(['success' => 'Appliance deleted successfully.']);
    }

}
