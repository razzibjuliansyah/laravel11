@extends('layouts.app')

@section('title', $project->title . ' - Detail Project')

@section('content')
<div class="container py-4">
    <!-- Breadcrumb / Tombol Kembali -->
    <div class="mb-3">
        <a href="{{ route('projects.index') }}" class="text-decoration-none text-secondary fw-semibold">
            &larr; Projects / <span class="text-dark">{{ $project->title }}</span>
        </a>
    </div>

    <div class="card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
        <div class="row g-0 align-items-center">
            
            <!-- Kolom Gambar (Dibatasi ukurannya agar tidak meluber) -->
            <div class="col-md-6 bg-light text-center p-3 border-end">
                <img src="{{ asset('images/' . ($project->image ?? 'default.jpg')) }}" 
                     class="img-fluid rounded shadow-sm" 
                     style="max-height: 350px; width: 100%; object-fit: contain;" 
                     onerror="this.src='https://via.placeholder.com/600x400?text=No+Image'">
            </div>

            <!-- Kolom Informasi Detail Project -->
            <div class="col-md-6 p-4 p-md-5">
                <h2 class="fw-bold mb-3 text-dark">{{ $project->title }}</h2>
                
                <div class="mb-3">
                    <span class="text-muted small text-uppercase d-block mb-1">Status Proyek</span>
                    <span class="badge {{ $project->status == 'active' ? 'bg-success' : 'bg-secondary' }} px-3 py-2">
                        {{ ucfirst($project->status) }}
                    </span>
                </div>

                <div class="mb-3">
                    <span class="text-muted small text-uppercase d-block mb-1">Teknologi yang Digunakan</span>
                    <span class="badge bg-primary px-3 py-2">{{ $project->tech }}</span>
                </div>

                <div class="mb-4">
                    <span class="text-muted small text-uppercase d-block mb-1">Deskripsi Proyek</span>
                    <p class="text-secondary" style="white-space: pre-line; text-align: justify;">{{ $project->description }}</p>
                </div>

                <div>
                    <a href="{{ route('projects.index') }}" class="btn btn-danger w-100 py-2 fw-semibold shadow-sm">
                        Kembali ke Daftar Proyek
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection