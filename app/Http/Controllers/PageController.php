<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $page = Page::orderBy('sort')->first();

        return view('page')->with([
            'page' => $page
        ]);
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('page')->with([
            'page' => $page
        ]);
    }
}
