<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return view('back-end.tag.index');
    }
}
