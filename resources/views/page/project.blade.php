@extends('layouts.app') {{-- Sesuaikan dengan nama layout utama kamu jika ada --}}

@section('content')
<div class="container my-5">
    <!-- Judul & Subjudul -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Portofolio Project</h2>
        <p class="text-muted">Daftar Project yang dikerjakan oleh mahasiswa</p>
    </div>

    <!-- Grid Card Project -->
    <div class="row g-4">
        @foreach($projects as $project)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-1">
                    <!-- Gambar -->
                    <img src="{{ asset('images/' . $project['image']) }}" 
                         class="card-img-top" 
                         alt="{{ $project['title'] }}"
                         style="height: 200px; object-fit: cover;">
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold fs-6">{{ $project['title'] }}</h5>
                        
                        <!-- Status Badge -->
                        <div class="mb-2">
                            <span class="badge {{ $project['status'] == 'Selesai' ? 'bg-success' : 'bg-success bg-opacity-75' }}">
                                {{ $project['status'] }}
                            </span>
                        </div>
                        
                        <!-- Deskripsi -->
                        <p class="card-text text-muted small flex-grow-1">
                            {{ $project['description'] }}
                        </p>
                        
                        <!-- Tech Stack -->
                        <p class="card-text small mb-3 text-secondary">
                            Tech : {{ $project['tech'] }}
                        </p>
                        
                        <!-- Tombol Detail -->
                        <a href="{{ route('project.show', $project['id']) }}" class="btn btn-primary w-100">
                            Detail Project
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection