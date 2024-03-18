<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing_page/index');
});

Route::get('/amarta_pure_water', function () {
    return view('amarta_pure/index');
});

Route::get('/amarta_pure_treatment', function () {
    return view('amarta_pure_treatment/index');
});
