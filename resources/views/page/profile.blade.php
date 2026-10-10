<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
</head>
<body>
    <h1>Profil Mahasiswa</h1>

    <img src="{{ asset('images/' . $mahasiswa['foto_profil']) }}" alt="Foto Profile" width="150">

    <p><strong>Nama:</strong> {{ $mahasiswa['nama_lengkap'] }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa['nim_student'] }}</p>
    <p><strong>Program Studi:</strong> {{ $mahasiswa['program_studi'] }}</p>
    <p><strong>Email:</strong> {{ $mahasiswa['email_aktif'] }}</p>
    <p><strong>Kampus:</strong> {{ $mahasiswa['nama_kampus'] }}</p>
    <p><strong>Status:</strong> {{ $mahasiswa['is_active'] ? 'Aktif' : 'Tidak Aktif' }}</p>
</body>
</html>