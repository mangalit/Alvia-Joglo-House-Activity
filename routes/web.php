<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/activity', [LandingController::class, 'activity'])->name('activity');
Route::get('/alvia-tracking-trip', [LandingController::class, 'tracking'])->name('tracking');
Route::get('/tour-activity', [LandingController::class, 'tour'])->name('tour');
Route::get('/transport', [LandingController::class, 'transport'])->name('transport');
Route::get('/about', [LandingController::class, 'about'])->name('about');