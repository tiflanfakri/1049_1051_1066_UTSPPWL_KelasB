@extends('layouts.app')

@section('content')
<div class="container-auth">
    <div class="auth-card">
        <h3 class="mb-4 fw-bold text-danger">Login</h3>
        <p class="mb-4 text-muted">Silakan masukkan email dan password</p>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label text-danger">Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-envelope text-danger"></i></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" required placeholder="Masukkan email">
                </div>
                @error('email')<span class="invalid-feedback d-block text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-danger">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-lock text-danger"></i></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                        name="password" required placeholder="Masukkan password">
                </div>
                @error('password')<span class="invalid-feedback d-block text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Ingat Saya</label>
            </div>

            <button type="submit" class="btn auth-btn w-100 mb-3" style="background-color: pink; border: 1px solid #ff69b4; color: white;">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </button>

            <div class="text-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-danger fw-bold">Lupa Password?</a>
                @endif
                <span class="mx-2">|</span>
                <a href="{{ route('register') }}" class="text-decoration-none text-danger fw-bold">Daftar Akun</a>
            </div>
        </form>
    </div>
</div>
@endsection