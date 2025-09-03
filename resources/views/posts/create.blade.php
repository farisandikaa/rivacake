@extends('layouts.admin')

@section('title', 'Tambah Post')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">➕ Tambah Post</h2>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan:</strong>
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Judul -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Judul</label>
                <input type="text" name="title" class="form-control" placeholder="Masukkan judul" value="{{ old('title') }}">
            </div>

            <!-- Konten -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Konten</label>
                <textarea name="content" class="form-control" rows="4" placeholder="Masukkan konten">{{ old('content') }}</textarea>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Kategori</label>
                <select name="category" class="form-select">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Achievement" {{ old('category') == 'Achievement' ? 'selected' : '' }}>Achievement</option>
                    <option value="DocumentaryClass" {{ old('category') == 'DocumentaryClass' ? 'selected' : '' }}>DocumentaryClass</option>
                    <option value="Product" {{ old('category') == 'Product' ? 'selected' : '' }}>Product</option>
                </select>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>

            <!-- Tombol -->
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection
