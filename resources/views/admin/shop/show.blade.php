@extends('layouts.admin')

@section('title', 'Detail Produk - Riva Cake')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">
            <i class="bi bi-eye"></i> Detail Post
        </h2>
        <a href="{{ route('shop-items.index') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <h2 class="fw-bold mb-3">{{ $item->name }}</h2>

        <div class="row">
            <div class="col-md-4 mb-3">
                @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="img-fluid rounded">
                @else
                    <div class="text-muted text-center">Tidak ada gambar</div>
                @endif
            </div>
            <div class="col-md-8">
                <p><strong>Kategori:</strong> {{ $item->category ?? '-' }}</p>
                <p><strong>Harga:</strong> Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                <p><strong>Deskripsi:</strong></p>
                <p>{!! nl2br(e($item->description)) !!}</p>
                <p class="text-muted">Dibuat pada: {{ $item->created_at->format('d M Y H:i') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
