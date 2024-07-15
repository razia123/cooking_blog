<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        return View('front-end.master');
    }
}
