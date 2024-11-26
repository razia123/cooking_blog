<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserInformation;
use DB;
use Exception;

class ProfileService
{
    public function __construct(protected ImageHandler $imageHandler)
    {
        $this->imageHandler = $imageHandler;
    }

    /**
     * Update profile.
     */
    public function updateProfile($request)
    {
        try {
            $userId = auth()->id();
            DB::beginTransaction();
            $user = User::where('id', $userId)->update([
                'name' => $request['name'],
                'email' => $request['email']
            ]);
            if (!$user) {
                DB::rollBack();
            }

            $imageName = null;
            if (isset($request["profile_picture"])) {
                $userInfo = UserInformation::where('user_id', $userId)->first();
                if ($userInfo && $userInfo->profile_picture) {
                    $this->imageHandler->deleteImage($userInfo->profile_picture);
                }
                $imageName = $this->imageHandler->uploadImage($request["profile_picture"], 'storage/profile');
            }
            UserInformation::updateOrCreate(
                ['user_id' => $userId],
                [
                    'phone' => $request['phone'],
                    'profile_picture' => $imageName ?? ($userInfo->profile_picture ?? ''),
                    'gender' => $request['gender'],
                    'facebook' => $request['facebook'],
                    'instagram' => $request['instagram'],
                    'twitter' => $request['twitter'],
                    'linkedin' => $request['linkedin']
                ]
            );
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return $e;
        }

    }

}