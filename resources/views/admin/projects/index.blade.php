@extends('layouts.admin')

@section('content')
<div class="bg-white p-4 rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold m-0">Data Projects</h2>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary fw-bold">+ Tambah Project</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th width="50">No</th>
                    <th>Title</th>
                    <th>Teknologi</th>
                    <th>Description</th>
                    <th width="100">Status</th>
                    <th width="120">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="fw-semibold">{{ $row->title }}</td>
                    <td>{{ $row->tech }}</td>
                    <td class="small text-muted">{{ Str::limit($row->description, 50) }}</td>
                    <td>
                        <span class="badge {{ $row->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                            {{ $row->status }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $row->id) }}" class="btn btn-warning btn-sm text-white w-100 mb-1">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $row->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm w-100" onclick="return confirm('Hapus project ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-muted">Belum ada data project.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection