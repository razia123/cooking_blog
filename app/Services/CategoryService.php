<?php

namespace App\Services;

use App\Models\Category;
use Str;

class CategoryService{
    public function __construct(protected ImageHandler $imageHandler)
    {
        $this->imageHandler = $imageHandler;
    }

    //Store category.
    public function store($categoryRequest)
    {
        // dd($categoryRequest['category_logo']);
        if (isset($categoryRequest['category_logo'])) {
            $logoName = $this->imageHandler->uploadImage($categoryRequest['category_logo'], 'storage/category/logo');
        }
        if (isset($categoryRequest['category_thumbnail'])) {
            $thumbnailName = $this->imageHandler->uploadImage($categoryRequest['category_thumbnail'], 'storage/category/thumbnail');
        }
        Category::create([
            'name' => $categoryRequest['category_name'],
            'slug' => Str::slug($categoryRequest['category_name']),
            'description' => $categoryRequest['description'] ?? '',
            'logo' => $logoName,
            'thumbnail' => $thumbnailName,
            'parent_category_id' => $categoryRequest['parent_category'],
        ]);
        return true;
    }
}