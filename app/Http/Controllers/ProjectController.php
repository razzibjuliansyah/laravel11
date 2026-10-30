<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    // Halaman Publik: Daftar Project dengan Pagination (3 per halaman)
    public function index() {
        $projects = Project::paginate(3);
        return view('page.projects', compact('projects'));
    }

    // Halaman Publik: Detail Project
    public function show($id) {
        $project = Project::findOrFail($id);
        return view('page.detail', compact('project'));
    }

    // Admin: Tabel Data Project
    public function adminIndex() {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    // Admin: Form Tambah Project
    public function create() {
        return view('admin.projects.create');
    }

    // Admin: Proses Simpan Project Baru
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'tech' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        Project::create($data);
        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    // Admin: Form Edit Project
    public function edit($id) {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    // Admin: Proses Update Project
    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'tech' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $project = Project::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $project->update($data);
        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diupdate!');
    }

    // Admin: Proses Hapus Project
    public function destroy($id) {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus!');
    }
}