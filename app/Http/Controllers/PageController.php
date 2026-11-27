<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Landing page (/)
    public function home()
    {
        return view('home');
    }

    // About page (/about)
    public function about()
    {
        return view('about');
    }
}