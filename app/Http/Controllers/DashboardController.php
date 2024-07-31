<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Get admin dashboard.
     */
    public function index()
    {
        return view('back-end.dashboard');
    }
}
