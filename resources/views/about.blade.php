@extends('layouts.app')

@section('title', 'About - UNPAM Prodi SI')

@section('content')
<div class="p-3">
    <h2 class="fw-bold text-dark mb-3">Tentang Program Studi</h2>
    <div class="card shadow-sm p-4">
        <p>Halaman ini dikembangkan untuk memenuhi kebutuhan web profile mahasiswa Program Studi Sistem Informasi Universitas Pamulang (UNPAM).</p>
        <a href="{{ url('/home') }}" class="btn btn-primary px-3 py-1 mt-3 w-25">Kembali ke Home</a>
    </div>
</div>
@endsection