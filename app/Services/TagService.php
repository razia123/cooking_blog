<?php

namespace App\Services;

use App\Models\Tag;
use Str;

class TagService{
    /**
     * 
     */
    public function storeTag($request)
    {
        Tag::create([
            'title' => $request['tag_title'],
            'slug' => Str::slug($request['tag_title']),
            'status' => $request['tag_status']
        ]);
        return true;
    }
}