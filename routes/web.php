<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\AboutController;


Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/activity', [ActivityController::class, 'activity'])->name('activity');
Route::get('/tracking', [TrackingController::class, 'tracking'])->name('tracking');
Route::get('/tour', [TourController::class, 'tour'])->name('tour');
Route::get('/transport', [TransportController::class, 'transport'])->name('transport');
Route::get('/about', [AboutController::class, 'about'])->name('about');
