<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyAccountMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
       
    }



public function register(Request $request)
{
    try {
        // Validate form inputs
        $request->validate([
            'name'      => 'required|string|max:255',
            'lname'     => 'required|string|max:255',
            'currency'  => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|string|min:8|confirmed',
        ]);

        // Create new user
        $user = User::create([
            'name'      => $request->input('name'),
            'lname'     => $request->input('lname'),
            'currency'  => $request->input('currency'),
            'email'     => $request->input('email'),
            'password'  => bcrypt($request->input('password')),
        ]);

        // Redirect to update details page with success message
        return redirect()->route('update.details')->with('success', 'Registration successful! Please update your details.');

    } catch (\Throwable $e) {
        \Log::error('Registration error:', [
            'message' => $e->getMessage(),
            'file'    => $e->getFile(),
            'line'    => $e->getLine(),
        ]);

        return back()->with('error', 'Registration failed. Please try again.');
    }
}

}

