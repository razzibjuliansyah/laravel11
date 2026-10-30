@extends('layouts.admin')

@section('content')
<div class="bg-white p-4 rounded shadow-sm">
    <h3 class="fw-bold mb-4">Tambah Project Baru</h3>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label fw-semibold">Nama Project</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-semibold">Teknologi</label>
                <input type="text" name="tech" class="form-control" placeholder="Contoh: Laravel, Bootstrap" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-select">
                    <option value="active">Active</option>
                    <option value="archived">Archived</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-semibold">Upload Gambar Project</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4">Simpan</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-danger px-4">Batal</a>
        </div>
    </form>
</div>
@endsection