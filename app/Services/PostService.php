<?php

namespace App\Services;

use App\Models\Post;
use Exception;
use Str;

class PostService
{
    public function __construct(protected ImageHandler $imageHandler)
    {
        $this->imageHandler = $imageHandler;
    }

    //Store post.
    public function store($postRequest)
    {
        try {
            if (isset($postRequest['feature_image'])) {
                $imageName = $this->imageHandler->uploadImage($postRequest['feature_image'], 'storage/post');
            }
            $userId = auth()->id();
            
            Post::create([
                'title' => $postRequest['post_title'],
                'slug' => Str::slug($postRequest['post_title']),
                'sort_description' => $postRequest['sort_description'],
                'long_description' => $postRequest['long_description'],
                'image' => $imageName,
                'published_date' => now(),
                'user_id' => auth()->id(),

            ]);
            
            return true;
        } catch (Exception $e) {
            return false;
        }

    }

}