<?php
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');
