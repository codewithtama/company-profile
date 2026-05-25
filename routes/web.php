<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Admin\ArtikelController as AdminArtikelController;
use App\Http\Controllers\Admin\LayananController as AdminLayananController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [HomeController::class, 'kirimPesan'])->name('kontak.submit');
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{slug}', [ArtikelController::class, 'show'])->name('artikel.show');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    Route::resource('artikel', AdminArtikelController::class);
    Route::resource('layanan', AdminLayananController::class);
});
