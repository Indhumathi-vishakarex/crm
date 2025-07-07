<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
        return view('pages.authentication.login');
    }

    public function register()
    {
        return view('pages.authentication.register');
    }

    public function forgotPassword()
    {
        return view('pages.authentication.forgot-password');
    }

    public function otp()
    {
        return view('pages.authentication.otp');
    }

    public function lockScreen()
    {
        return view('pages.authentication.lock-screen');
    }

    public function error404()
    {
        return view('pages.error_pages.error-404');
    }

    public function error500()
    {
        return view('pages.error_pages.error-500');
    }

    public function subscriptions()
    {
        return view('pages.subscriptions.subscriptions');
    }

    public function subscriptionCompany()
    {
        return view('pages.subscriptions.subscription-company');
    }

    public function subscribedCompanies()
    {
        return view('pages.subscriptions.subscribed-companies');
    }
    public function profile()
    {
        return view('pages.profile.profile');
    }
    public function clientProfile()
    {
        return view('pages.profile.client-profile');
    }
}
