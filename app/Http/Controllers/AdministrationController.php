<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function assets1()
    {
        return view('administration.assets1');
    }
    public function users()
    {
        return view('administration.users');
    }
    public function settings(){
        return view('administration.settings');
    }
}
