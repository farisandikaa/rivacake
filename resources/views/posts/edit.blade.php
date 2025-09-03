@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">✏️ Edit Post</h2>
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
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}">
            </div>

            <!-- Konten -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Konten</label>
                <textarea name="content" class="form-control" rows="4">{{ old('content', $post->content) }}</textarea>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Kategori</label>
                <select name="category" class="form-select">
                    <option value="Achievement" {{ old('category', $post->category) == 'Achievement' ? 'selected' : '' }}>Achievement</option>
                    <option value="DocumentaryClass" {{ old('category', $post->category) == 'DocumentaryClass' ? 'selected' : '' }}>DocumentaryClass</option>
                    <option value="Product" {{ old('category', $post->category) == 'Product' ? 'selected' : '' }}>Product</option>
                </select>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Gambar</label>
                @if($post->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar" class="rounded" width="100">
                    </div>
                @endif
                <input type="file" name="image" class="form-control">
            </div>

            <!-- Tombol -->
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Update
            </button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
