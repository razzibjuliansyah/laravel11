@extends('layouts.admin')

@section('content')
<div class="bg-white p-4 rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold m-0" style="font-size: 1.75rem;">Data Projects</h2>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary fw-bold px-3">Tambah Project</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row mb-3 align-items-center justify-content-between">
        <div class="col-auto d-flex align-items-center gap-2">
            <select class="form-select form-select-sm" style="width: 75px;">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <span class="text-muted small">entries per page</span>
        </div>
        
        <div class="col-md-4">
            <form action="{{ route('admin.projects.index') }}" method="GET" class="input-group input-group-sm">
                <input type="text" name="search" class="form-control" placeholder="Search:" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th width="50" class="text-center">No</th>
                    <th width="110">Image</th>
                    <th>Title</th>
                    <th>Teknologi</th>
                    <th>Description</th>
                    <th width="90">Status</th>
                    <th width="100" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $index => $row)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>
                        <img src="{{ asset('images/' . ($row->image ?? 'default.jpg')) }}" class="img-thumbnail" style="width: 90px; height: 60px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/100x70?text=No+Image'">
                    </td>
                    <td class="fw-semibold">{{ $row->title }}</td>
                    <td>{{ $row->tech }}</td>
                    <td class="small text-muted">{{ Str::limit($row->description, 60) }}</td>
                    <td>
                        <span class="badge {{ $row->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                            {{ $row->status }}
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.projects.edit', $row->id) }}" class="btn btn-warning btn-sm text-dark w-100 mb-1 fw-semibold" style="font-size: 0.8rem;">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $row->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm w-100 fw-semibold" style="font-size: 0.8rem;" onclick="return confirm('Apakah Anda yakin ingin menghapus project ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-4 text-muted">Belum ada data project.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection