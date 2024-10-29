<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Get category list.
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('back-end.category.index');
    }

    /**
     * Display category create form.
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('back-end.category.create');
    }

    /**
     * 
     */
    public function store(CategoryRequest $categoryRequest)
    {
        dd($categoryRequest);
    }
}
