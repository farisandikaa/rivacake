@extends('layouts.admin')

@section('title', 'Manajemen Post - Riva Product')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold">📝 Manajemen Post</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Post
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($posts->isEmpty())
            <p class="text-center text-muted my-4">Belum ada post yang dibuat</p>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $index => $post)
                            <tr>
                                <td>{{ $posts->firstItem() + $index }}</td>
                                <td>
                                    @if($post->image)
                                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" width="60" class="rounded">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $post->title }}</td>
                                <td>{{ $post->category }}</td>
                                <td>{{ $post->created_at->format('d M Y') }}</td>
                                <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">
                                <i class="bi bi-eye"></i></a>
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus post ini?')">
                                        @csrf
                                        @method('DELETE')
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

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-3">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
