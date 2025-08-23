<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Models\News;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute Halaman Depan (Homepage)
Route::get('/', [HomeController::class, 'index'])->name('home');

// == TAMBAHKAN BARIS INI ==
// Rute untuk menampilkan detail satu berita berdasarkan slug-nya
Route::get('/news/{news:slug}', [HomeController::class, 'showNews'])->name('news.show');
// ==========================

// Rute default bawaan Breeze/Jetstream
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute untuk manajemen profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// === Grup Rute Khusus Admin ===
Route::middleware(['auth', 'auth.admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard/{news?}', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('news', [NewsController::class, 'store'])->name('news.store');
    Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
    Route::get('news/{news}/edit', function (News $news) {
        return redirect()->route('admin.dashboard', ['news' => $news]);
    })->name('news.edit');
});

// File rute untuk otentikasi
require __DIR__.'/auth.php';