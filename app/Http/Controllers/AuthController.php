<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->isAdmin()) {
                return redirect()->route('Admin.dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
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
}
