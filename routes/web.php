<?php

use Illuminate\Support\Facades\Route;

// Main Web
Route::get('/', function () {
    return view('landing_page/index');
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
    return view('amarta_pure/index');
});
Route::get('/amarta_pure_water/about-us', function () {
    return view('amarta_pure/aboutus');
});
Route::get('/amarta_pure_water/waralaba', function () {
    return view('amarta_pure/waralaba');
});
Route::get('/amarta_pure_water/product', function () {
    abort(404);
    // return view('amarta_pure/product');
});

// =====================================================================================

// Amarta Treatment
Route::get('/amarta_water_treatment', function () {
    return view('amarta_water_treatment/index_new');
});

Route::get('/amarta_water_treatment_old', function () {
    return view('amarta_water_treatment/index');
});
