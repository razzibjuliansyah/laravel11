<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyProfile - Razzib Juliansyah')</title>
    
    <!-- Path disesuaikan dengan double folder -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar Publik -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">MyProfile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects.index') }}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item ms-3"><a class="btn btn-warning btn-sm text-dark fw-semibold" href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center py-3 border-top mt-auto">
        <small class="text-muted">&copy; 2026 Razzib Juliansyah. All rights reserved.</small>
    </footer>

    <!-- Path JS disesuaikan -->
    <script src="{{ asset('bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>