<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Get admin dashboard.
     */
    public function index()
    {
        return view('back-end.dashboard');
    }

    /**
     * Get profile update form.
     */
    public function profile()
    {
        $userId = auth()->id();
        $profile = User::with('userInfo')->find($userId);
        return view('back-end.profile',compact('profile'));
    }
}
