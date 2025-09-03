@extends('layouts.admin')

@section('title', 'Manajemen User')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold">👤 Manajemen User</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah User
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body">
        @if($users->isEmpty())
            <p class="text-center text-muted my-4">Belum ada user</p>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $users->firstItem() + $index }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus user ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mt-3">
                {{ $users->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
