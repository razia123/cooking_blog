<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        return View('front-end.home');
    }

    /**
     * Get all posts according to category.
     */
    public function categoryPostBySlug($slug)
    {
        return view('front-end.category-post');
    }
}
