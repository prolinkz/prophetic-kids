<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // echo "Hello"; die();
        return view('auth.login');
    }

    public function forgotpass()
    {
        return view('auth.forgotpass');
    }
}
