@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" name="email" class="form-control" required autofocus>
        @error('email')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi</label>
        <input id="password" type="password" name="password" class="form-control" required>
        @error('password')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Ingat Saya</label>
    </div>

    <!-- Submit -->
    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-cyber">Masuk</button>
    </div>

    <!-- Reset pw nanti dl blm ada docker<div class="text-center">
        <a href="{{ route('password.request') }}" class="text-decoration-none text-info small">Lupa Password?</a>
    </div> -->
</form>
@endsection
