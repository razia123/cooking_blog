<?php

namespace App\Services;

use App\Models\Slide;

class SliderService{
    public function __construct(protected ImageHandler $imageHandler)
    {
        $this->imageHandler = $imageHandler;
    }

    /**
     * 
     */
    public function store($request)
    {
        if (isset($request['slider_image'])) {
            $sliderImage = $this->imageHandler->uploadImage($request['slider_image'], 'storage/slider');
        }
        Slide::create([
            'name' => $request['title'],
            'image' => $sliderImage
        ]);
        return true;
    }
}