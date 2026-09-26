<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return redirect('/home');
});