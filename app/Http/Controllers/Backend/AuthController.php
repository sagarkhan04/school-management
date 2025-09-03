<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend/auth/login');
    }
    
    public function register()
    {
        return view('backend/auth/register');
    }

    public function forgotPassword()
    {
        return view('backend/auth/forgot_password');
    }
}
