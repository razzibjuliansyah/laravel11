<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Razzib Juliansyah',
            'nim' => '251011701057',
            'prodi' => 'Sistem Informasi',
            'email' => 'razib@gmail.com',
            'kampus' => 'Universitas Pamulang (UNPAM)',
            'status' => 'Aktif',
            'foto' => 'images.jpg'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}