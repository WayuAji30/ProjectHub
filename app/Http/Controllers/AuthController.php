<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

    public function register(): View
    {
        return view('register');
    }

    public function verify_email(): View
    {
        return view('verify_email');
    }
}
