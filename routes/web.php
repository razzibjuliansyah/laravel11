<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;

// Halaman Utama (Home)
Route::get('/', function () {
    return view('page.home');
});

// Halaman Profile
Route::get('/profile', [MahasiswaController::class, 'index'])->name('profile.index');

// Halaman Daftar Project
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');

// Halaman Detail Project
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

// Halaman About
Route::get('/about', function () {
    return view('page.about');
});