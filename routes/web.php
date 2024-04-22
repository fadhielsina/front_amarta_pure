<?php

use App\Http\Controllers\AmartaWaterController;
use Illuminate\Support\Facades\Route;

// Amarta Pure
Route::get('/', [AmartaWaterController::class, 'index'])->name('amarta_water.index');
Route::get('/about-us', [AmartaWaterController::class, 'aboutus'])->name('amarta_water.aboutus');
Route::get('/waralaba', [AmartaWaterController::class, 'waralaba'])->name('amarta_water.waralaba');
Route::get('/contact-us', [AmartaWaterController::class, 'contactus'])->name('amarta_water.contactus');

// =====================================================================================