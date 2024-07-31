<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    /**
     * Get all posts according to category.
     */
    public function categoryPostBySlug($slug)
    {
        return view('front-end.category-post');
    }
}
