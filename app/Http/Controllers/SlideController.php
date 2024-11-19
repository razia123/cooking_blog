<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Services\SliderService;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function __construct(protected SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }

    /**
     * Display slider images list.
     */
    public function index()
    {
        return view('back-end.slider.index');
    }

    /**
     * Display slider create form.
     */
    public function create()
    {
        return view('back-end.slider.create');
    }

    /**
     * Store slider image.
     */
    public function store(SliderRequest $sliderRequest)
    {
        $request = $sliderRequest->only('title', 'slider_image');
        $this->sliderService->store($request);
        session()->flash('success', 'Slider image stored successfully!');
        return redirect()->route('slide.index');
    }
}
