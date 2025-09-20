<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend/auth/login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('backend/auth/register');

    }
    public function create_user(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:4',
        ]);

        $save= new User();
        $save->name= trim($request->name);
        $save->email= trim($request->email);
        $save->username= trim($request->username);
        $save->password= trim(Hash::make($request->password));
        $save->remember_token= Str::random(60);
        $save->save();
        return redirect()->route('backend.auth.login')->with('success', 'Thank you for registering. You can now login.');

        // Create the user
    }

    public function forgotPassword()
    {
        return view('backend/auth/forgot_password');
    }
}
