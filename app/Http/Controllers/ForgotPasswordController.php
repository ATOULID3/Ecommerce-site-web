<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function forgotpassword(){
        return view('auth.forget-password');
    }
}
