<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // Wajib ditambahkan untuk memformat tanggal

class ProjectController extends Controller
{
    // Kita pindahkan data array ke sini agar bisa dipanggil oleh index() dan show()
    private function getProjects()
    {
        return [
            [
                'id' => 1,
                'title' => 'Sistem Informasi AKademik',
                'status' => 'In progress',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, nilai, dan mata kuliah.',
                'tech' => 'Laravel & Bootstrap',
                'image' => 'project1.jpg',
                'tanggal' => '2026-09-10' // Ditambahkan agar fungsi format tanggal dosen bisa jalan
            ],
            [
                'id' => 2,
                'title' => 'E-Commerce SEO Optimization',
                'status' => 'In progress',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing mesin pencari.',
                'tech' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'tanggal' => '2026-09-15'
            ],
            [
                'id' => 3,
                'title' => 'Redesign COver dan Branding',
                'status' => 'Selesai',
                'description' => 'Perancangan element grafis personal branding dan aset cetak.',
                'tech' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'tanggal' => '2026-09-20'
            ],
            [
                'id' => 4,
                'title' => 'INDIE Space Web Interface',
                'status' => 'Selesai',
                'description' => 'Perancangan layout web responsif dengan tipografi Montserrat dan custom CSS.',
                'tech' => 'HTML, CSS & Bootstrap',
                'image' => 'project4.jpg',
                'tanggal' => '2026-09-25'
            ],
            [
                'id' => 5,
                'title' => 'ARPEGGI Music Store Inventory',
                'status' => 'Selesai',
                'description' => 'Sistem manajemen inventaris berbasis web untuk rilis fisik seperti vinyl, CD, dan kaset.',
                'tech' => 'PHP & MySQL',
                'image' => 'project5.jpg',
                'tanggal' => '2026-10-01'
            ],
            [
                'id' => 6,
                'title' => 'Mixtapes Media Layout',
                'status' => 'Selesai',
                'description' => 'Desain antarmuka HTML untuk portal berita musik independen dan liputan konser lokal.',
                'tech' => 'HTML & Tailwind CSS',
                'image' => 'project6.jpg',
                'tanggal' => '2026-10-05'
            ],
            [
                'id' => 7,
                'title' => 'Print Hacks Handbook',
                'status' => 'Selesai',
                'description' => 'Pembuatan panduan prepress cetak dan katalog spesifikasi kertas specialty.',
                'tech' => 'Adobe Illustrator & Photoshop',
                'image' => 'project7.jpg',
                'tanggal' => '2026-10-10'
            ],
            [
                'id' => 8,
                'title' => 'C++ Dynamic Memory Allocator',
                'status' => 'Selesai',
                'description' => 'Implementasi algoritma struktur data dengan manajemen memori dinamis dan array.',
                'tech' => 'C++ & Flowgorithm',
                'image' => 'project8.jpg',
                'tanggal' => '2026-10-15'
            ],
            [
                'id' => 9,
                'title' => 'Katalog Promosi Studio Cetak',
                'status' => 'In progress',
                'description' => 'Desain aset grafis dan layout cetak untuk materi promosi layanan percetakan dan co-working.',
                'tech' => 'Photoshop & Illustrator',
                'image' => 'project9.jpg',
                'tanggal' => '2026-10-20'
            ],
            [
                'id' => 10,
                'title' => 'Esai Publikasi Medium',
                'status' => 'Selesai',
                'description' => 'Penulisan dan kurasi konten artikel prosa reflektif untuk publikasi platform digital.',
                'tech' => 'Copywriting & Content Management',
                'image' => 'project10.jpg',
                'tanggal' => '2026-10-25'
            ],
        ];
    }

    public function index()
    {
        $projects = $this->getProjects();
        return view('page.project', compact('projects'));
    }

    public function show($id)
    {
        $projects = $this->getProjects();
        
        // Cari data project yang diklik berdasarkan ID
        $projectArray = collect($projects)->firstWhere('id', (int)$id);

        // Jika ID tidak ditemukan (misal user asal ketik URL), tampilkan error 404
        if (!$projectArray) {
            abort(404);
        }

        // --- PENYESUAIAN DENGAN KODE DOSEN ---
        // 1. Dosen pakai format object ($project->title), maka array diubah ke object
        $project = (object) $projectArray;
        
        // 2. Dosen memanggil $project->teknologi
        $project->teknologi = $projectArray['tech'];
        
        // 3. Dosen memanggil $project->created_at->format(...)
        $project->created_at = Carbon::parse($projectArray['tanggal']);

        // Mengarahkan ke file detail.blade.php
        return view('page.detail', compact('project'));
    }
}