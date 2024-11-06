<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appliance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    // Show the login form
    public function showRegForm()
    {
        // $showLogin = $request->route()->getName() === 'login';
        // return view('frontend.reg', ['showLogin' => $showLogin]);
        return view('frontend.reg');
    }

   // Handle login
public function login(Request $request)
{
    // Validate the login (either username or email) and password
    $request->validate([
        'login' => 'required|string',  // 'login' could be either email or username
        'password' => 'required|string',
    ]);

    // Get the login input (either email or username)
    $loginInput = $request->input('login');

    // Determine if the login input is an email or a username
    $loginField = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    // Prepare the credentials for authentication (either email or username + password)
    $credentials = [
        $loginField => $loginInput,   // use either 'email' or 'username' as the key
        'password' => $request->input('password'),
    ];

    // Attempt to authenticate the user
    if (Auth::attempt($credentials)) {
        // Authentication successful

        // Check if the authenticated user is an admin using a role check
        if (Auth::user()->isAdmin()) {
            // If the user is an admin, redirect to the admin dashboard
            return redirect()->route('admin.dashboard');
        } else {
            // Otherwise, redirect regular users to the homepage
            return redirect()->route('home');
        }
    }

    // If authentication fails, return back with an error message
    return back()->withErrors([
        'login' => 'The provided credentials do not match our records.',
    ]);
}

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::attempt($request->only('username', 'password'));

        return redirect()->intended('/');
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    // Show the user profile page
    public function showProfile()
    {
        $user = Auth::user();  // Get the authenticated user
        return view('frontend.userProfile', compact('user'));
    }

private function calculateSystemSize($totalWattage)
{
    // Convert wattage to kilowatts
    $totalKW = $totalWattage / 1000;

    // Define system requirements based on inverter types and wattage
    $hybridInverter = $this->getInverterSize('hybrid', $totalKW);
    $onGridInverter = $this->getInverterSize('on-grid', $totalKW);

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




    // Update the user profile
    public function updateProfile(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->username = $request->input('username');
        $user->email = $request->input('email');

        // Only update password if it's provided
        if ($request->input('password')) {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        // Redirect to the named home page route
return redirect()->route('home')->with('success', 'Profile updated successfully!');

}
}
