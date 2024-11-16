<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public  function profile(){
        return view('admin.profile.profile');
    }
    public function connections(){
        return view('admin.profile.connections');
    }
    public function notification(){
        return view('admin.profile.notification');
    }
}
