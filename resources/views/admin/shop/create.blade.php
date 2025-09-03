@extends('layouts.admin')

@section('title', 'Tambah Produk - Riva Cake')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">➕ Tambah Post</h2>
    <a href="{{ route('shop-items.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>
<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('shop-items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Kategori</label>
                    <select name="category" class="form-select" required>
                        <option value="" disabled selected>-- Pilih kategori --</option>
                        <option value="kuekering" {{ old('category', $item->category ?? '') === 'kue kering' ? 'selected' : '' }}>Kue Kering</option>
                        <option value="kuebasah" {{ old('category', $item->category ?? '') === 'kue basah' ? 'selected' : '' }}>Kue Basah</option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label fw-semibold">Harga</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label fw-semibold">Gambar Produk</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan
            </button>
            
        </form>
    </div>
</div>
@endsection
