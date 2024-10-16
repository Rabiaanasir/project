<?php

namespace App\Http\Controllers;

use App\Models\User;
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
