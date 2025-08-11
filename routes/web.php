<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda.
| Rute-rute ini dimuat oleh RouteServiceProvider dalam grup yang
| berisi middleware "web".
|
*/

// Rute Tampilan Publik (User)
// Ini adalah rute yang dapat diakses oleh semua pengguna tanpa perlu login.
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news/{news:slug}', [HomeController::class, 'showNews'])->name('news.show');

// Rute Autentikasi Laravel Breeze
// Rute-rute ini dibuat oleh Breeze untuk login, register, dll.
// Halaman-halaman ini membutuhkan pengguna yang sudah terotentikasi.
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute Dashboard Admin
// Ini adalah rute yang hanya dapat diakses oleh admin.
// Rute ini dilindungi oleh middleware 'auth' (sudah login) dan 'auth.admin' (memiliki status admin).
// Semua fungsionalitas CRUD berita terpusat di sini.
Route::middleware(['auth', 'auth.admin'])->prefix('admin')->group(function () {
    // Rute utama dashboard admin
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Rute untuk aksi CRUD (dikelola dari satu halaman dashboard)
    Route::get('/news/{news}/edit', [AdminDashboardController::class, 'index'])->name('admin.news.edit');
    Route::post('/news', [AdminDashboardController::class, 'store'])->name('admin.news.store');
    Route::put('/news/{news}', [AdminDashboardController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{news}', [AdminDashboardController::class, 'destroy'])->name('admin.news.destroy');
});

// Memuat rute-rute autentikasi Breeze tambahan
require __DIR__.'/auth.php';