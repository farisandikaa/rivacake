@extends('layouts.admin')

@section('title', 'Edit Produk - Riva Cake')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">✏️ Edit Post</h2>
    <a href="{{ route('shop-items.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>
<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('shop-items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $item->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Kategori</label>
                    <select name="category" class="form-select" required>
                        <option value="" disabled selected>-- Pilih kategori --</option>
                        <option value="kuekering" {{ old('category', $item->category ?? '') === 'kuekering' ? 'selected' : '' }}>Kue Kering</option>
                        <option value="kuebasah" {{ old('category', $item->category ?? '') === 'kuebasah' ? 'selected' : '' }}>Kue Basah</option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label fw-semibold">Harga</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $item->price) }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $item->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Gambar Saat Ini</label><br>
                @if ($item->image)
                    <img src="{{ asset('storage/'.$item->image) }}" alt="Gambar Produk" width="100" class="rounded mb-2">
                @else
                    <p class="text-muted">Tidak ada gambar.</p>
                @endif
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('shop-items.index') }}" class="btn btn-secondary">Batal</a>
            
        </form>
    </div>
</div>
@endsection
