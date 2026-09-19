<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar-custom {
            background-color: #0d6efd;
        }
        .profile-card {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            max-width: 600px;
            width: 100%;
        }
        .profile-img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 50%;
        }
        .badge-status {
            background-color: #198754;
            font-size: 0.8rem;
            padding: 5px 12px;
            border-radius: 12px;
        }
        footer {
            margin-top: auto;
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Header Navbar -->
    <nav class="navbar navbar-dark navbar-custom py-2 shadow-sm">
        <div class="container-fluid px-4">
            <span class="navbar-brand mb-0 h1 fs-5 fw-normal">UNPAM - Profile Mahasiswa</span>
        </div>
    </nav>

    <!-- Content Utama -->
    <div class="container d-flex justify-content-center align-items-center flex-grow-1 my-4">
        <div class="profile-card border-0 overflow-hidden">
            <!-- Bagian Atas Card -->
            <div class="text-center pt-4 pb-3 px-4 border-bottom">
                <img src="{{ $mahasiswa['foto'] }}" alt="Foto Profile" class="profile-img mb-3 shadow-sm">
                <h4 class="fw-semibold mb-2">Profile Mahasiswa</h4>
                <span class="badge badge-status text-white">{{ $mahasiswa['status'] }}</span>
            </div>

            <!-- Bagian Detail Informasi -->
            <div class="p-4 text-center">
                <p class="mb-2"><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
                <p class="mb-2"><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
                <p class="mb-2"><strong>Prodi:</strong> {{ $mahasiswa['prodi'] }}</p>
                <p class="mb-2"><strong>Email:</strong> {{ $mahasiswa['email'] }}</p>
                <p class="mb-0"><strong>Kampus:</strong> {{ $mahasiswa['kampus'] }}</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3">
        &copy; {{ date('Y') }} UNPAM. All rights reserved.
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>