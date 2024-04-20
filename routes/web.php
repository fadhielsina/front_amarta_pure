<?php

use App\Http\Controllers\AmartaWaterController;
use Illuminate\Support\Facades\Route;

// Amarta Pure
Route::get('/', [AmartaWaterController::class, 'index'])->name('amarta_water.index');
Route::get('/about-us', [AmartaWaterController::class, 'aboutus'])->name('amarta_water.aboutus');
Route::get('/waralaba', [AmartaWaterController::class, 'waralaba'])->name('amarta_water.waralaba');
Route::get('/product', function () {
    abort(404);
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
