<?php

namespace App\Http\Controllers;

class AuthenticationController extends Controller
{
    /**
     * Show login form.
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('authentication.login');
    }
}
