@extends('layouts.app')

@section('title', 'Profile Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card border-0 shadow-sm rounded-4 p-4 text-center bg-white">
            <!-- Foto Profil Lokal -->
            <div class="mb-3">
                <img src="{{ asset('images/razzib.jpeg') }}" 
                     alt="Foto Profile" 
                     class="rounded-circle object-fit-cover shadow-sm" 
                     width="110" height="110">
            </div>

            <!-- Nama & Status -->
            <h4 class="fw-bold mb-1">Profile Mahasiswa</h4>
            <div>
                <span class="badge bg-success rounded-pill px-3 py-1 mb-3">Aktif</span>
            </div>

            <hr class="text-muted opacity-25 my-2">

            <!-- Detail Data Mahasiswa -->
            <div class="text-center mt-3 fs-6 text-secondary">
                <p class="mb-2"><strong class="text-dark">Nama:</strong> Razzib Juliansyah</p>
                <p class="mb-2"><strong class="text-dark">NIM:</strong> 251011701057</p>
                <p class="mb-2"><strong class="text-dark">Prodi:</strong> Sistem Informasi</p>
                <p class="mb-2"><strong class="text-dark">Email:</strong> razib@gmail.com</p>
                <p class="mb-0"><strong class="text-dark">Kampus:</strong> Universitas Pamulang (UNPAM)</p>
            </div>
        </div>
    </div>
</div>
@endsection