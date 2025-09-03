@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')
<h1 class="mb-4">✏️ Edit User</h1>

<form method="POST" action="{{ route('users.update', $user) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Password (Kosongkan jika tidak diubah)</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
