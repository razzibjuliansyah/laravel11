<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Rute Navigasi Utama
Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/profile', function () {
    return view('page.profile');
})->name('profile.index');

Route::get('/about', function () {
    return view('page.about');
})->name('about.index');

// Rute Project (Navbar redirect)
Route::get('/project', function () {
    return redirect()->route('projects.index');
})->name('project.index');

// Rute Publik Project (Daftar & Detail)
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// Rute CRUD Khusus Admin (Sesuai Materi PPT)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});