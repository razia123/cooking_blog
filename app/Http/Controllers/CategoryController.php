<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\ImageHandler;
use Str;

class CategoryController extends Controller
{
    public function __construct(protected ImageHandler $imageHandler)
    {
        $this->imageHandler = $imageHandler;
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
        return view('back-end.category.create');
    }

    /**
     * 
     */
    public function storeCategory(CategoryRequest $categoryRequest)
    {
        if(isset($categoryRequest->category_logo)){
            $logoName = $this->imageHandler->uploadImage($categoryRequest->category_logo, 'storage/category/logo');
        }
        if (isset($categoryRequest->category_thumbnail)) {
            $thumbnailName = $this->imageHandler->uploadImage($categoryRequest->category_thumbnail, 'storage/category/thumbnail');
        }
        Category::create([
            'name' => $categoryRequest->category_name,
            'slug' => Str::slug($categoryRequest->category_name),
            'description' => $categoryRequest->description,
            'logo' => $logoName,
            'thumbnail' => $thumbnailName,
            'parent_category_id' => $categoryRequest->parent_category,
        ]);

        session()->flash('success', 'Category created successfully!');
        return redirect()->back();
      
    }
}
