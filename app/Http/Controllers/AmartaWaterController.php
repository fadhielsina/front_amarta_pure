<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmartaWaterController extends Controller
{
    public function index()
    {
        return view('amarta_pure/index');
    }

    public function aboutus()
    {
        return view('amarta_pure/aboutus');
    }

    public function waralaba()
    {
        return view('amarta_pure/waralaba');
    }
}
