<?php

use Illuminate\Support\Facades\Route;

// Amarta Pure
Route::get('/', function () {
    return view('amarta_pure/index');
});
Route::get('/about-us', function () {
    return view('amarta_pure/aboutus');
});
Route::get('/waralaba', function () {
    return view('amarta_pure/waralaba');
});
Route::get('/product', function () {
    abort(404);
    // return view('amarta_pure/product');
});

// =====================================================================================

// Amarta Treatment
Route::get('/amarta_water_treatment', function () {
    return view('amarta_water_treatment/index');
});
Route::get('/amarta_water_treatment/about-us', function () {
    return view('amarta_water_treatment/aboutus');
});
Route::get('/amarta_water_treatment/reverse-osmosis', function () {
    return view('amarta_water_treatment/ro');
});
