<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PureWaterController extends Controller
{
    public function index()
    {
        return view('pure_water/index');
    }

    public function aboutus()
    {
        return view('pure_water/aboutus');
    }

    public function waralaba()
    {
        return view('pure_water/waralaba');
    }

    public function blog()
    {
        $data = Blog::get();
        return view('pure_water/blog', compact("data"));
    }

    public function pakar()
    {
        return view('pure_water/pakar');
    }

    public function contactus()
    {
        return view('pure_water/contactus');
    }
}
