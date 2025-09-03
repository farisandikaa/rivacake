@extends('layouts.admin')

@section('title', 'Dashboard - Riva Product')

@push('styles')
<style>
    .card-stat {
        border: none;
        border-radius: 15px;
        padding: 1.5rem;
        color: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        text-align: center;
    }
    .card-stat h3 {
        font-weight: 700;
        font-size: 2rem;
    }
    .card-stat span {
        font-size: 0.9rem;
        opacity: 0.9;
    }
    .bg-Achievement { background: linear-gradient(135deg, #f78ca0, #f9748f); }
    .bg-DocumentaryClass { background: linear-gradient(135deg, #ffb347, #ffcc33); }
    .bg-Product    { background: linear-gradient(135deg, #56ab2f, #a8e063); }
    .bg-total   { background: linear-gradient(135deg, #6a11cb, #2575fc); }
</style>
@endpush

@section('content')
<div class="dashboard-header mb-4">
    <h1 class="fw-bold mb-1">📊 Dashboard</h1>
    <p class="text-muted">Ringkasan data dan aktivitas terbaru</p>
</div>

<!-- Statistik Gallery -->
<div class="row g-4 mb-5">
    <div class="col-md-3 col-sm-6">
        <div class="card-stat bg-Achievement">
            <h3>{{ $AchievementCount }}</h3>
            <span>Achievement</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card-stat bg-DocumentaryClass">
            <h3>{{ $DocumentaryClassCount }}</h3>
            <span>DocumentaryClass</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card-stat bg-Product">
            <h3>{{ $ProductCount }}</h3>
            <span>Product</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card-stat bg-total">
            <h3>{{ $totalPosts }}</h3>
            <span>Total Post Gallery</span>
        </div>
    </div>
</div>
<!--statistik shop-->
<div class="row g-4 mb-5">
    <div class="col-md-3 col-sm-6">
        <div class="card-stat bg-Achievement">
            <h3>{{ $kuekeringCount }}</h3>
            <span>Kue Kering</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card-stat bg-DocumentaryClass">
            <h3>{{ $kuebasahCount }}</h3>
            <span>Kue Basah</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card-stat bg-total">
            <h3>{{ $totalitems }}</h3>
            <span>Total Post shop</span>
        </div>
    </div>
<!-- Post Gallery Terbaru -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0">🆕 Post Gallery Terbaru</h5>
        <a href="{{ route('posts.index') }}" class="btn btn-sm btn-outline-primary">
            Lihat Semua
        </a>
    </div>
    <div class="card-body">
        @if($latestPosts->isEmpty())
            <p class="text-center text-muted my-3">Belum ada post terbaru</p>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($latestPosts as $post)
                            <tr>
                                <td class="fw-semibold">{{ $post->title }}</td>
                                <td>{{ $post->category }}</td>
                                <td>{{ $post->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

<!-- Post Shop Terbaru -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0">🆕 Post Shop Terbaru</h5>
        <a href="{{ route('shop-items.index') }}" class="btn btn-sm btn-outline-primary">
            Lihat Semua
        </a>
    </div>
    <div class="card-body">
        @if($latestitems->isEmpty())
            <p class="text-center text-muted my-3">Belum ada post terbaru</p>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($latestitems as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $post->created_at->format('d M Y') }}</td>   
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
