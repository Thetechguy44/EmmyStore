<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validate and authenticate the user
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ]);
    }

    public function destroy(Request $request)
    {
        auth()->logout();

        return redirect('/')->with('status', 'You have been logged out successfully.');
    }
}
