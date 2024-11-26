<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use App\Services\ProfileService;

class DashboardController extends Controller
{
    public function __construct(protected ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

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

    /**
     * 
     */
    public function updateProfile(ProfileRequest $request)
    {
        $this->profileService->updateProfile($request->all());
        session()->flash('success', 'Profile updated successfully!');
        return redirect()->back();
    }
}
