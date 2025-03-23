@extends('layouts.app')

@section('content')
<div class="container-auth">
    <div class="auth-card">
        <h3 class="mb-4 fw-bold text-danger">Daftar Akun</h3>
        <p class="mb-4 text-muted">Silakan isi formulir untuk membuat akun</p>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label text-danger">Nama Lengkap</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-person text-danger"></i></span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                        name="name" value="{{ old('name') }}" required placeholder="Masukkan nama">
                </div>
                @error('name')<span class="invalid-feedback d-block text-danger">{{ $message }}</span>@enderror
            </div>

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

            <div class="mb-3">
                <label for="password-confirm" class="form-label text-danger">Konfirmasi Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-check-circle text-danger"></i></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                        required placeholder="Ulangi password">
                </div>
            </div>

            <button type="submit" class="btn auth-btn w-100 mb-3" style="background-color: pink; border: 1px solid #ff69b4; color: white;">
                <i class="bi bi-person-check"></i> Daftar Akun
            </button>

            <div class="text-center">
                <span>Sudah punya akun?</span>
                <a href="{{ route('login') }}" class="text-decoration-none text-danger fw-bold">Login di sini</a>
            </div>
        </form>
    </div>
</div>
@endsection
