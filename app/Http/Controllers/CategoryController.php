<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use App\Services\ImageHandler;
use Str;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Get category list.
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('back-end.category.index', compact('categories'));
    }

    /**
     * Display category create form.
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('back-end.category.create', compact('categories'));
    }

    /**
     * Store category.
     */
    public function storeCategory(CategoryRequest $categoryRequest)
    {
        $category = $this->categoryService->store($categoryRequest->all());
        session()->flash('success', 'Category created successfully!');
        return redirect()->route('category.index'); 
    }
}
