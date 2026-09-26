@extends('layouts.app')

@section('title', 'Profil Mahasiswa - UNPAM')

@section('content')
<div class="p-3">
    <h2 class="fw-bold text-dark mb-3">Profil Mahasiswa Prodi SI</h2>
    <div class="card shadow-sm p-4">
        <p><strong>Program Studi:</strong> Sistem Informasi (S1)</p>
        <p><strong>Kampus:</strong> Universitas Pamulang (UNPAM)</p>
        <a href="{{ url('/home') }}" class="btn btn-primary px-3 py-1 mt-3 w-25">Kembali</a>
    </div>
</div>
@endsection