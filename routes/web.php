<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ChatbotController;


Route::get('/', [LandingController::class, 'home'])->name('home');

// Deployment Helper
Route::get('/deploy-helper', function () {
    if (request()->get('token') !== env('DEPLOY_HELPER_TOKEN', 'alvia-deploy-2026')) {
        return 'Unauthorized';
    }
    try {
        // 1. Jalankan Migrasi (Hanya menambah tabel/kolom baru, DATA LAMA TETAP AMAN)
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        
        // 2. Jalankan Seeder hanya jika diminta (misal: /deploy-helper?token=...&seed=true)
        if (request()->get('seed') === 'true') {
            \Illuminate\Support\Facades\Artisan::call('db:seed', ['--class' => 'ActivitySeeder', '--force' => true]);
            \Illuminate\Support\Facades\Artisan::call('db:seed', ['--class' => 'TourSeeder', '--force' => true]);
            \Illuminate\Support\Facades\Artisan::call('db:seed', ['--class' => 'TrackingStopSeeder', '--force' => true]);
            \Illuminate\Support\Facades\Artisan::call('db:seed', ['--class' => 'TransportSeeder', '--force' => true]);
            $seedingStatus = ' (Essential Product Seeding also successful!)';
        } else {
            $seedingStatus = ' (Seeding skipped, data preserved)';
        }

        return 'Migration successful! Your data is safe.' . $seedingStatus;
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});

Route::get('/activity', [ActivityController::class, 'activity'])->name('activity');
Route::get('/tracking', [TrackingController::class, 'tracking'])->name('tracking');
Route::get('/tour', [TourController::class, 'tour'])->name('tour');
Route::get('/transport', [TransportController::class, 'transport'])->name('transport');
Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
Route::post('/chatbot', [ChatbotController::class, 'chat'])->name('chatbot.chat');
