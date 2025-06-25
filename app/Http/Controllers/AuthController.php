<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Appliance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function showRegForm()
    {
        return view('frontend.reg');
    }

public function login(Request $request)
{
    $request->validate([
        'login' => 'required|string|max:255',
        'password' => 'required|string|min:6|regex:/^\S+$/', // No spaces allowed
    ]);


    $loginInput = $request->input('login');

    $loginField = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    $credentials = [
        $loginField => $loginInput,
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($credentials)) {

        if (Auth::user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('home');
        }
    }

    // If authentication fails, return back with an error message
    return back()->withErrors([
        'login' => 'The provided credentials do not match our records.',
    ]);
}

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|regex:/^[a-zA-Z0-9 ]+$/|max:255|unique:users,username',
            'email' => 'required|email:rfc,dns|max:255|unique:users,email',
            'reg_password' => 'required|string|min:8|regex:/^[a-zA-Z0-9 ]+$/|confirmed',
        ],[
            'reg_password.required' => 'Password is required.',
            'reg_password.min' => 'Password must be at least 8 characters.',
            'reg_password.regex' => 'Password can only contain letters, numbers, and spaces.',
            'reg_password.confirmed' => 'Passwords do not match.',
        ]);


        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->reg_password),
        ]);

        Auth::attempt($request->only('username', 'reg_password'));

        return redirect()->intended('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

public function showProfile()
{
    $user = Auth::user();
    $latestBooking = $user->bookings()->latest()->first();

    return view('frontend.userProfile', compact('user', 'latestBooking'));
}

    public function updateProfile(Request $request)
    {
        $request->validate([
    'username' => 'required|string|regex:/^[a-zA-Z0-9 ]+$/|max:255',
    'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
], [
    'username.regex' => 'Username should not contain special characters.',
    'email.email' => 'Please enter a valid email address.',
    'email.unique' => 'This email is already in use.',
]);

        $user = Auth::user();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        if ($request->input('password')) {
            $request->validate([
                'password' => 'nullable|string|min:8|regex:/^[a-zA-Z0-9]+$/|confirmed',
            ]);
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

return redirect()->route('home')->with('success', 'Profile updated successfully!');
    }


public function updateAdminProfile(Request $request)
{
    $request->validate([
    'username' => 'required|string|regex:/^[a-zA-Z0-9 ]+$/|max:255',
    'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
], [
    'username.regex' => 'Username should not contain special characters.',
    'email.email' => 'Please enter a valid email address.',
    'email.unique' => 'This email is already in use.',
]);


        $user = Auth::user();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        if ($request->input('password')) {
            $request->validate([
                'password' => 'nullable|string|min:8|regex:/^[a-zA-Z0-9]+$/|confirmed',
            ]);
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

return redirect()->route('home')->with('success', 'Profile updated successfully!');
    }



public function index()
    {
        $user = Auth::user();

        return view('admin.profile', compact('user'));
    }
}
