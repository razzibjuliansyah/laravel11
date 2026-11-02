<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;

// ==========================================
// RUTE PUBLIK (Akses Umum)
// ==========================================
Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

// ==========================================
// RUTE AUTHENTICATION (Login & Logout)
// ==========================================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ==========================================
// RUTE ADMIN (Dilindungi Middleware Auth & Prefiks /admin)
// ==========================================
Route::middleware(['auth'])->prefix('admin')->group(function () {
    
    // Dashboard Admin (Menjadi halaman pertama yang diakses setelah login)
    Route::get('/', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/dashboard', [AuthController::class, 'dashboard']);

    // Halaman Profil (Mengarah ke view page.profile milik mahasiswa)
    Route::get('/profile', [AuthController::class, 'profile'])->name('admin.profile');

    // CRUD Projects Admin (Dengan fitur Search)
    Route::get('/projects', [ProjectController::class, 'adminIndex'])->name('admin.projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');
});