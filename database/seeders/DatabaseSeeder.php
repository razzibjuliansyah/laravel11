<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Sistem ERP Tes',
            'tech' => 'PHP, Laravel',
            'description' => 'Sistem ERP untuk perusahaan manufaktur yang mengintegrasikan berbagai fungsi bisnis utama.',
            'status' => 'active',
            'image' => 'project1.jpg'
        ]);

        Project::create([
            'title' => 'Sistem HRIS',
            'tech' => 'JavaScript, React',
            'description' => 'Sistem HRIS untuk mengelola data karyawan dan proses sumber daya manusia secara digital.',
            'status' => 'active',
            'image' => 'project2.jpg'
        ]);

        Project::create([
            'title' => 'Sistem SCM',
            'tech' => 'Python, Django',
            'description' => 'Sistem SCM untuk mengelola rantai pasokan dan logistik perusahaan secara real-time.',
            'status' => 'active',
            'image' => 'project3.jpg'
        ]);

        Project::create([
            'title' => 'Sistem Informasi Perpustakaan',
            'tech' => 'Laravel, Bootstrap',
            'description' => 'Aplikasi peminjaman dan pengelolaan buku berbasis web untuk sekolah dan kampus.',
            'status' => 'archived',
            'image' => 'project4.jpg'
        ]);
    }
}