<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Index page';
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About page';
        return view('pages.about')->with('title', $title);
    }

    public function contact()
    {
        $title = 'Contact page';
        return view('pages.contact')->with('title', $title);
    }
}
