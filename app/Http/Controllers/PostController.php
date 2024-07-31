<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    /**
     * Get post detail page by slug.
     */
    public function postDetailBySlug($slug)
    {
        return view('front-end.post-detail');
    }
}
