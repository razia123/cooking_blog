<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display posts list.
     */
    public function index()
    {
        return view('back-end.post.index');
    }

    /**
     * Display post create form.
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('back-end.post.create', compact('categories'));
    }

    /**
     * Store post.
     */
    public function store(PostRequest $postRequest)
    {
        dd($postRequest->all());
    }

    /**
     * Get post detail page by slug.
     */
    public function postDetailBySlug($slug)
    {
        return view('front-end.post-detail');
    }
}
