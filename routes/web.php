<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


// Proteksi Route Admin Panel (Hanya bisa diakses setelah login sukses)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/contact/update', [AdminController::class, 'updateContact'])->name('admin.contact.update');
    Route::post('/photos/upload', [AdminController::class, 'uploadPhoto'])->name('admin.photos.upload');
    Route::delete('/photos/{id}', [AdminController::class, 'deletePhoto'])->name('admin.photos.delete');
});

// Route untuk menampilkan halaman form login dan memproses login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);

// Route untuk proses logout pengguna
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// 1. Route untuk Halaman Utama (index.php)
Route::get('/', function () {
    return view('home');
});

// 2. Route untuk Halaman Profil (profil.php)
Route::get('/profil', function () {
    return view('profil');
});

// 3. Route untuk Halaman Fasilitas (fasilitas.php)
Route::get('/fasilitas', function () {
    return view('fasilitas');
});

// 4. Route untuk Halaman Kamar (kamar.php)
Route::get('/kamar', function () {
    return view('kamar');
});

// 5. Route untuk Halaman Kamar Laut (kamarLaut.php)
Route::get('/kamar-laut', function () {
    return view('kamarLaut'); // pastikan penulisan huruf besar/kecilnya sama dengan nama file
});

// 6. Route untuk Halaman Kontak (contact.php)
Route::get('/contact', function () {
    return view('contact');
});