@extends('layouts.admin')

@section('title', 'Manajemen Produk - Riva Cake')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold">🛍️ Manajemen Produk</h1>
    <a href="{{ route('shop-items.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Produk
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

        @if($items->isEmpty())
            <p class="text-center text-muted my-4">Belum ada produk yang ditambahkan</p>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Tanggal</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $index => $item)
                            <tr>
                                <td>{{ $items->firstItem() + $index }}</td>
                                <td>
                                    @if($item->image)
                                        <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->name }}" width="60" class="rounded">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $item->name }}</td>
                                <td>{{ $item->category ?? '-' }}</td>
                                <td>Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('shop-items.show', $item->id) }}" class="btn btn-info btn-sm">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('shop-items.edit', $item) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('shop-items.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus produk ini?')">
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
                {{ $items->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
