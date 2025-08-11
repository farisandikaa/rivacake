@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="text-center mb-4">
        <h5 class="text-info">Lupa Kata Sandi?</h5>
        <p class="small text-muted">Masukkan email akunmu untuk mengirim link reset password.</p>
    </div>

    <!-- Email Address -->
    <div class="mb-3">
        <label for="email" class="form-label">Alamat Email</label>
        <input id="email" type="email" name="email" class="form-control" required autofocus>
        @error('email')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit -->
    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-cyber">Kirim Link Reset</button>
    </div>

    @if (session('status'))
        <div class="alert alert-success small text-center">
            {{ session('status') }}
        </div>
    @endif

    <div class="text-center">
        <a href="{{ route('login') }}" class="text-decoration-none text-info small">← Kembali ke Login</a>
    </div>
</form>
@endsection
