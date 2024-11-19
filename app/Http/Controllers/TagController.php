<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use App\Services\TagService;

class TagController extends Controller
{
    public function __construct(protected TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    /**
     * Display tag list.
     */
    public function index()
    {
        $tags = Tag::get();
        return view('back-end.tag.index', compact('tags'));
    }

    /**
     * Display tag create form.
     */
    public function create()
    {
        return view('back-end.tag.create');
    }

    /**
     * Create Tag.
     */
    public function store(TagRequest $tagRequest)
    {
        $request = $tagRequest->only('tag_title', 'tag_status');
        $this->tagService->storeTag($request);
        session()->flash('success', 'Tag created successfully!');
        return redirect()->route('tag.index');
    }
}
