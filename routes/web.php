<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

// Saat user mengakses URL utama '/', arahkan ke LandingController fungsi index
Route::get('/', [LandingController::class, 'index'])->name('home');
