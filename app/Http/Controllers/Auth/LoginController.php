<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;




class LoginController extends Controller
{
    //

    public function showLoginForm(){

    return view('auth.login');
   
    }

  public function login(Request $request)
{
    try {
        // Validate input
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Redirect to home page after successful login
            return redirect()->route('user.home')->with('success', 'Login successful!');
        }

        // Failed login
        return back()->withErrors([
            'email' => trans('auth.failed'),
        ])->withInput();

    } catch (\Throwable $e) {
        \Log::error('Login error: ' . $e->getMessage());

        return back()->with('error', 'An error occurred during login. Please try again.');
    }
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}
