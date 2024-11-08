<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $categories = Category::where('status', 1)->orderBy('id', 'desc')->get();
        $posts = Post::where('status', 1)->orderBy('id', 'desc')->get();
        return View('front-end.home', compact('categories','posts'));
    }

    /**
     * Get all posts according to category.
     */
    public function categoryPostBySlug($slug)
    {
        return view('front-end.category-post');
    }
}
