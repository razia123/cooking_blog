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
        $categories = Category::where('status', 2)->orderBy('id', 'desc')->get();
        $posts = Post::with('user')->where('status', 1)->orderBy('id', 'desc')->take(3)->get();
        $mostViewedPosts = Post::with('user')->where('status', 1)->orderBy('id', 'desc')->get();
        return View('front-end.home', compact('categories','posts', 'mostViewedPosts'));
    }

    /**
     * Get all posts according to category.
     */
    public function categoryPostBySlug($slug)
    {
        return view('front-end.category-post');
    }

    /**
     * Get post detail page by slug.
     */
    public function postDetailBySlug($slug)
    {
        $allPosts = Post::where('status', 1)->get();
        $post = Post::with('user')->where('slug', $slug)->where('status', 1)->first();
        return view('front-end.post-detail', compact('post', 'allPosts'));
    }
}
