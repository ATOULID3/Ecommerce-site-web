<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogisticController extends Controller
{
    public function dash_logistics(){
        return view('admin.logistics.dashlogi');
    }
    public function logistics(){
        return view('admin.logistics.logistics');
    }
}
