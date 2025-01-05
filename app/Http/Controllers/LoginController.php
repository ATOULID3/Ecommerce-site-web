<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function login_trait(Request $request){
        $email = $request-> email;
        $password= $request-> password;
        $remember = $request->has('remember'); // Check if the "Remember Me" checkbox is checked
        $credentials= ['email'=>$email,"password"=>$password];
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect('/index-admin');

        }else{
            return back()->withErrors([
                'email'=>'email ou password incorrect'
            ])->onlyInput('email');
        }

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login') ;
    }
}
