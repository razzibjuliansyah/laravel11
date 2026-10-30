<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - UNPAM Sistem Informasi</title>
    
    <!-- Path disesuaikan dengan double folder -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    
    <style>
        .top-navbar { background-color: #ffc107; min-height: 60px; }
        .sidebar { background-color: #343a40; min-height: calc(100vh - 60px); color: #fff; }
        .sidebar a { color: #cfd8dc; text-decoration: none; padding: 12px 20px; display: block; }
        .sidebar a:hover, .sidebar a.active { background-color: #495057; color: #fff; }
    </style>
</head>
<body class="bg-light">
    <!-- Top Navbar -->
    <div class="top-navbar d-flex justify-content-between align-items-center px-4 py-2 shadow-sm">
        <div class="d-flex align-items-center">
            <h5 class="m-0 fw-bold text-dark">UNIVERSITAS PAMULANG <br><small class="fs-6 fw-normal">SISTEM INFORMASI</small></h5>
        </div>
        <div>
            <a href="{{ route('home') }}" class="text-dark me-3 text-decoration-none fw-semibold">Dashboard</a>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-dark text-decoration-none fw-semibold">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </div>
    </div>

    <!-- Container Utama Admin -->
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar Kiri -->
            <div class="col-md-2 sidebar p-0">
                <div class="p-3 fw-bold text-uppercase small text-muted">Admin Menu</div>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.projects.index') }}" class="{{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">Data Project</a>
            </div>

            <!-- Konten Kanan -->
            <div class="col-md-10 p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Path JS disesuaikan -->
    <script src="{{ asset('bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>