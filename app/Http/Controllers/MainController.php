<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function adminDashboard(){
        return view('main.dashboard.admin-dashboard');
    }
    public function employeeDashboard() {
    return view('main.dashboard.employee-dashboard');
}

public function chat() {
    return view('main.apps.chat');
}

public function events() {
    return view('main.apps.events');
}

public function contacts() {
    return view('main.apps.contacts');
}

public function inbox() {
    return view('main.apps.inbox');
}
public function compose() {
    return view('main.compose');
}

public function fileManager() {
    return view('main.apps.file-manager');
}

public function voiceCall() {
    return view('main.apps.voice-call');
}
}
