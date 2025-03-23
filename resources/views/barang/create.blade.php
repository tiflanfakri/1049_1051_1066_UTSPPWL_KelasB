@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, #ff4d6d, #ff1e56);">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-box-seam"></i> Sistem Manajemen Inventaris
        </a>
    </div>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; background: linear-gradient(to right, #ff4d6d, #ff1e56); padding: 20px;">
    <div class="col-md-8"> <!-- Menambah lebar container agar tidak terlalu sempit -->
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="padding: 20px;">
            <div class="card-header text-center text-white fw-bold fs-4" style="background: linear-gradient(to right, #ff758c, #ff7eb3); padding: 15px;">
                <i class="bi bi-box-seam"></i> Tambah Barang
            </div>
            <div class="card-body p-5 bg-light">
                <form action="{{ route('barang.store') }}" method="POST">
                    @csrf

                    <!-- Nama Barang -->
                    <div class="mb-4">
                        <label for="nama" class="form-label fw-semibold">Nama Barang:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-tag text-primary"></i></span>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}" required>
                        </div>
                        @error('nama')
                            <span class="invalid-feedback d-block text-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- Harga -->
                    <div class="mb-4">
                        <label for="harga" class="form-label fw-semibold">Harga:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-cash text-success"></i></span>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" value="{{ old('harga') }}" required>
                        </div>
                        @error('harga')
                            <span class="invalid-feedback d-block text-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- Stok -->
                    <div class="mb-4">
                        <label for="stok" class="form-label fw-semibold">Stok:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-boxes text-warning"></i></span>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" id="stok" value="{{ old('stok') }}" required>
                        </div>
                        @error('stok')
                            <span class="invalid-feedback d-block text-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-lg text-white fw-semibold" style="background: linear-gradient(to right, #ff758c, #ff7eb3); border: none; padding: 12px;">
                            <i class="bi bi-save"></i> Simpan Barang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection