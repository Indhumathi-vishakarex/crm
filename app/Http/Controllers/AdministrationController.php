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

   
    public function voiceCall(){
        return view('apps.voice-call');

    }

    public function videoCall(){
        return view('apps.video-call');

    }
    
    public function incomingCall(){
        return view('apps.incoming-call');

    }
     public function OutgoingCall(){
        return view('apps.outgoing-call');

    }



}
