@extends('layouts.app')

@section('title', 'Home - UNPAM Prodi SI')

@section('content')
<div class="p-3">
    <h2 class="fw-bold text-dark mb-2">Selamat Datang</h2>
    <p class="text-secondary mb-3">Ini halaman utama web profile mahasiswa prodi SI UNPAM</p>
    <a href="{{ url('/mahasiswa') }}" class="btn btn-success px-4 py-2 text-white">Lihat Profile</a>
</div>
@endsection