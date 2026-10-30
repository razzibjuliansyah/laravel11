@extends('layouts.app')

@section('title', 'Home - Razzib Juliansyah')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4 fw-normal mb-4">Halo, Saya Razzib Juliansyah!</h1>
    
    <div class="mb-4">
        <img src="{{ asset('images/razzib.jpeg') }}" class="rounded-circle shadow" style="width: 180px; height: 180px; object-fit: cover;" alt="Razzib Juliansyah">
    </div>

    <p class="fs-5 text-secondary col-md-8 mx-auto">
        Saya seorang Web Developer yang passionate dalam membuat aplikasi web modern.
    </p>

    <hr class="my-4 w-50 mx-auto">

    <p class="text-muted col-md-8 mx-auto mb-4">
        Selamat datang di portfolio website saya. Saya memiliki pengalaman dalam Laravel, Bootstrap, dan berbagai teknologi web lainnya.
    </p>

    <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg px-4">Lihat Projects</a>
</div>
@endsection