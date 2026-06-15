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

// Deployment Helper (Hapus atau beri komentar setelah digunakan di Hostinger)
// Akses: domainanda.com/deploy-helper?token=alvia-deploy-2026
Route::get('/deploy-helper', function () {
    if (request()->get('token') !== 'alvia-deploy-2026') {
        return 'Unauthorized';
    }
    try {
        // 1. Jalankan Migrasi (Buat Tabel)
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        
        // 2. Jalankan Seeder Produk (Penting agar data muncul di web)
        // Kita lewati ReviewSeeder agar testimonial tetap kosong
        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => 'ActivitySeeder',
            '--force' => true
        ]);
        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => 'TourSeeder',
            '--force' => true
        ]);
        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => 'TrackingStopSeeder',
            '--force' => true
        ]);
        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => 'TransportSeeder',
            '--force' => true
        ]);

        // 3. Lewati Symlink Storage (Hostinger melarang fungsi symlink)
        // Karena kita menggunakan Vite::asset, gambar di resources/images tetap akan tampil.
        
        return 'Migration and Essential Product Seeding successful! (Review data is empty)';
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
