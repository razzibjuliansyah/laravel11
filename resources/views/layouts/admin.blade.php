<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Sistem Informasi UNPAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .top-header { background-color: #ffc107; min-height: 60px; }
        .sidebar { background-color: #343a40; min-height: calc(100vh - 60px); color: #fff; }
        .sidebar a { color: #cfd8dc; text-decoration: none; display: block; padding: 10px 20px; transition: 0.2s; }
        .sidebar a:hover, .sidebar a.active { background-color: #495057; color: #fff; }
    </style>
</head>
<body>

<!-- Header Atas Kuning (UNPAM) -->
<header class="top-header d-flex justify-content-between align-items-center px-4 shadow-sm">
    <div class="d-flex align-items-center gap-2">
        <!-- Logo Gambar dari folder public/images/ -->
        <img src="{{ asset('images/unpam.png') }}" alt="Logo UNPAM" style="width: 40px; height: 40px; object-fit: contain;" onerror="this.src='https://via.placeholder.com/40?text=UN'">
        <div>
            <div style="font-size: 0.75rem; font-weight: bold; letter-spacing: 0.5px;">UNIVERSITAS PAMULANG</div>
            <div style="font-size: 0.95rem; font-weight: 800; line-height: 1;">SISTEM INFORMASI</div>
        </div>
    </div>
    
    <!-- Header Kanan: Tombol Profil dan Administrator (Logout) -->
    <div class="d-flex align-items-center gap-2">
        <a href="{{ route('admin.profile') }}" class="btn btn-light fw-semibold text-dark border shadow-sm px-3 py-1.5" style="font-size: 0.9rem;">
            Dashboard
        </a>

        <div class="dropdown">
            <button class="btn btn-warning dropdown-toggle fw-semibold text-dark border-0 px-3 py-1.5" type="button" data-bs-toggle="dropdown" style="font-size: 0.9rem;">
                Administrator
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li><span class="dropdown-item-text text-muted small">adminexample@gmail.com</span></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger fw-semibold">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar p-0">
            <div class="p-3 fw-bold text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px; color: #adb5bd;">Admin Menu</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.projects.index') }}" class="{{ request()->routeIs('admin.projects*') ? 'active' : '' }}">Data Project</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto px-md-4 py-4">
            @yield('content')

            <footer class="text-center text-muted mt-5 pt-3 border-top" style="font-size: 0.85rem;">
                © 2026 MyProfile. All rights reserved.
            </footer>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>