<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $dataMahasiswa = [
            'nama_lengkap'  => 'Razzib Juliansyah',
            'nim_student'   => '251011701057',
            'program_studi' => 'Sistem Informasi',
            'email_aktif'   => 'razzib@gmail.com',
            'nama_kampus'   => 'Universitas Pamulang (UNPAM)',
            'is_active'     => true,
            'foto_profil'   => 'razzib.jpeg',
        ];

        return view('page.profile', [
            'mahasiswa' => $dataMahasiswa
        ]);
    }
}