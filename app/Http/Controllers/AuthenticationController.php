<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function forgotPassword()
    {
        return view('authentication/forgotPassword');
    }

    public function signin()
    {
        return view('authentication/signin');
    }
    
    public function signup()
    {
        return view('authentication/signup');
    }
}
