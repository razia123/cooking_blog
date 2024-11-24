<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect to google login form.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Login with google.
     */
    public function handleGoogleCallback()
    {
        
        try {
            $googleUser = Socialite::driver('google')->user();
            // dd($googleUser);
            $email = $googleUser->getEmail();  
            $user = User::where('email', $email)->first();
           
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt(uniqid()), 
                ]);
            }
            Auth::login($user);

            return redirect()->route('dashboard'); 
        } catch (\Exception $e) {
            return redirect()->route('login.customer')->with('error', 'Something went wrong during login.');
        }
    }
}
