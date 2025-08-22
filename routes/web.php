<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\NewsController; 
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news/{news:slug}', [HomeController::class, 'showNews'])->name('news.show');

// Rute Autentikasi Laravel Breeze
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Grup Rute Khusus Admin
// Rute ini dilindungi oleh middleware 'auth' dan 'auth.admin'
Route::middleware(['auth', 'auth.admin'])->prefix('admin')->name('admin.')->group(function () {
    // Rute utama dashboard admin
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Rute-rute CRUD untuk Berita menggunakan Route::resource
    // Ini akan otomatis membuat rute:
    // GET /admin/news -> admin.news.index (Daftar Berita)
    // GET /admin/news/create -> admin.news.create
    // POST /admin/news -> admin.news.store
    // GET /admin/news/{news} -> admin.news.show
    // GET /admin/news/{news}/edit -> admin.news.edit
    // PUT/PATCH /admin/news/{news} -> admin.news.update
    // DELETE /admin/news/{news} -> admin.news.destroy
    Route::resource('news', NewsController::class);
});

require __DIR__.'/auth.php';
