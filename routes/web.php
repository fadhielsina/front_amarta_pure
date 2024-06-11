<?php

use App\Http\Controllers\AmartaWaterController;
use App\Http\Controllers\PureWaterController;
use Illuminate\Support\Facades\Route;

// Amarta Pure

Route::get('/old', [AmartaWaterController::class, 'index'])->name('amarta_water.index');
// Route::get('/about-us', [AmartaWaterController::class, 'aboutus'])->name('amarta_water.aboutus');
// Route::get('/waralaba', [AmartaWaterController::class, 'waralaba'])->name('amarta_water.waralaba');
// Route::get('/contact-us', [AmartaWaterController::class, 'contactus'])->name('amarta_water.contactus');

// =====================================================================================

// Amarta New
Route::get('/', [PureWaterController::class, 'index'])->name('pure_water.index');
Route::get('/about-us', [PureWaterController::class, 'aboutus'])->name('pure_water.aboutus');
Route::get('/waralaba', [PureWaterController::class, 'waralaba'])->name('pure_water.waralaba');
Route::get('/blog', [PureWaterController::class, 'blog'])->name('pure_water.blog');
Route::get('/pakar', [PureWaterController::class, 'pakar'])->name('pure_water.pakar');
Route::get('/contact-us', [PureWaterController::class, 'contactus'])->name('pure_water.contactus');

// New Front Elegant
Route::get('/new_front', function () {
    return view('new_front/index');
});
