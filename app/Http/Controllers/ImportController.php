<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index(){
        return view('admin.imports.imports');
    }
}
