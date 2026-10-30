@extends('layouts.admin')

@section('content')
<div class="bg-white p-4 rounded shadow-sm">
    <h3 class="fw-bold mb-4">Edit Project</h3>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label fw-semibold">Nama Project</label>
                <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-semibold">Teknologi</label>
                <input type="text" name="tech" class="form-control" value="{{ $project->tech }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-select">
                    <option value="active" {{ $project->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="archived" {{ $project->status == 'archived' ? 'selected' : '' }}>Archived</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-semibold">Ganti Gambar Project (Opsional)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $project->description }}</textarea>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4">Ubah</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-danger px-4">Batal</a>
        </div>
    </form>
</div>
@endsection