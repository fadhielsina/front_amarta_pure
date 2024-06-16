<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PureWaterController extends Controller
{
    public function index()
    {
        return view('new_front/index');
    }

    public function aboutus()
    {
        return view('new_front/about_us');
    }

    public function waralaba()
    {
        return view('new_front/waralaba');
    }

    public function blog()
    {
        $data = Blog::get();
        return view('new_front/blog', compact("data"));
    }

    public function pakar()
    {
        return view('new_front/pakar');
    }

    public function contactus()
    {
        return view('new_front/contactus');
    }
}
