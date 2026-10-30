@extends('layouts.app')

@section('title', 'My Projects - Razzib Juliansyah')

@section('content')
<div class="container py-4">
    <h2 class="text-center fw-normal mb-5">My Projects</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse($projects as $row)
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/' . ($row->image ?? 'default.jpg')) }}" class="card-img-top" style="height: 200px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/400x250?text=No+Image'">
                
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">{{ $row->title }}</h5>
                    <p class="card-text text-muted small flex-grow-1">{{ Str::limit($row->description, 90) }}</p>
                    <p class="small text-secondary mb-3"><strong>Tech:</strong> {{ $row->tech }}</p>
                    <a href="{{ route('projects.show', $row->id) }}" class="btn btn-primary w-100 mt-auto">Lihat Detail</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center text-muted">
            <p>Belum ada project yang ditampilkan.</p>
        </div>
        @endforelse
    </div>

    <!-- Tombol Pagination 1, 2, dst di Bawah -->
    <div class="d-flex justify-content-center mt-5">
        {{ $projects->links() }}
    </div>
</div>
@endsection