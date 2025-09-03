@extends('layouts.admin')

@section('title', 'Tambah User')

@section('content')
<h1 class="mb-4">➕ Tambah User</h1>

<form method="POST" action="{{ route('users.store') }}">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
