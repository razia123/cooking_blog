<?php

namespace App\Services;

class ImageHandler{
    /**
     * Summary of uploadImage
     * @return string
     */
    function uploadImage($file, $path = null)
    {
        $imageName = uniqid() . "." . $file->getClientOriginalExtension();
        $file->move(public_path($path), $imageName);
        return $path . '/' . $imageName;
    }

    /**
     * Summary of deleteImage.
     */
    public function deleteImage($path)
    {
        if (file_exists(public_path($path))) {
            unlink(public_path($path));
        }
    }
}