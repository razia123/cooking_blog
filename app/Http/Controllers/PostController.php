<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(protected PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Display posts list.
     */
    public function index()
    {
        $posts = Post::with('user')->where('status',1)->orderBy('id', 'desc')->get();
        return view('back-end.post.index', compact('posts'));
    }

    /**
     * Display post create form.
     */
    public function create()
    {
        $categories = Category::get();
        return view('back-end.post.create', compact('categories'));
    }

    /**
     * Store post.
     */
    public function store(PostRequest $postRequest)
    {
        $post = $this->postService->store($postRequest->all());
        session()->flash('success', 'Post created successfully!');
        return redirect()->route('post.index');
    }

    
}
