{{-- resources/views/posts/show.blade.php --}}
@extends('layouts.admin')

@section('title', 'Detail Post')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">
            <i class="bi bi-eye"></i> Detail Post
        </h2>
        <a href="{{ route('posts.index') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            {{-- Judul --}}
            <h3 class="fw-bold">{{ $post->title }}</h3>

            {{-- Kategori & Tanggal --}}
            <div class="mb-3 text-muted small">
                <i class="bi bi-tag"></i> {{ $post->category }}  
                &nbsp;|&nbsp;  
                <i class="bi bi-calendar-event"></i> {{ $post->created_at->format('d M Y') }}
            </div>

            {{-- Gambar --}}
            @if($post->image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $post->image) }}" 
                         alt="{{ $post->title }}" 
                         class="img-fluid rounded shadow-sm" 
                         style="max-height: 400px; object-fit: cover;">
                </div>
            @endif

            {{-- Konten --}}
            <p style="white-space: pre-line;">{{ $post->content }}</p>
        </div>
    </div>
</div>
@endsection
