<?php

use Illuminate\Support\Facades\Route;

// Main Web
Route::get('/', function () {
    return view('landing_page/index_new');
});
Route::get('/about-us', function () {
    return view('landing_page/aboutus');
});
Route::get('/services', function () {
    return view('landing_page/services');
});
Route::get('/blog', function () {
    abort(404);
    // return view('landing_page/blog');
});
Route::get('/contact-us', function () {
    return view('landing_page/contactus');
});

// =====================================================================================

// Amarta Pure
Route::get('/amarta_pure_water', function () {
    return view('amarta_pure/index_new');
});
Route::get('/amarta_pure_water/about-us', function () {
    return view('amarta_pure/aboutus');
});

// =====================================================================================

// Amarta Treatment
Route::get('/amarta_pure_water', function () {
    return view('amarta_pure/index_new');
});
