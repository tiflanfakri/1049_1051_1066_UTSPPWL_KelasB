@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; background: linear-gradient(to right, #ff4d6d, #ff1e56);">
    <div class="col-md-6">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-header text-center text-white fw-bold fs-4" style="background: linear-gradient(to right, #ff758c, #ff7eb3);">
                <i class="bi bi-pencil-square"></i> Edit Barang
            </div>
            <div class="card-body p-5 bg-light">
                <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                    @csrf
                    @method('PUT') {{-- Metode PUT untuk update data --}}

                    {{-- Nama Barang --}}
                    <div class="mb-4">
                        <label for="nama" class="form-label fw-semibold">Nama Barang:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-gradient bg-light"><i class="bi bi-box text-primary"></i></span>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   name="nama" id="nama" value="{{ old('nama', $barang->nama) }}" required>
                        </div>
                        @error('nama')
                            <span class="invalid-feedback d-block text-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    {{-- Harga --}}
                    <div class="mb-4">
                        <label for="harga" class="form-label fw-semibold">Harga:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-gradient bg-light"><i class="bi bi-cash text-primary"></i></span>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" 
                                   name="harga" id="harga" value="{{ old('harga', $barang->harga) }}" required>
                        </div>
                        @error('harga')
                            <span class="invalid-feedback d-block text-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    {{-- Stok --}}
                    <div class="mb-4">
                        <label for="stok" class="form-label fw-semibold">Stok:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-gradient bg-light"><i class="bi bi-list-ol text-primary"></i></span>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" 
                                   name="stok" id="stok" value="{{ old('stok', $barang->stok) }}" required>
                        </div>
                        @error('stok')
                            <span class="invalid-feedback d-block text-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    {{-- Tombol Simpan & Batal --}}
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('barang.index') }}" class="btn btn-secondary fw-semibold">
                            <i class="bi bi-arrow-left"></i> Batal
                        </a>
                        <button type="submit" class="btn text-white fw-semibold" style="background: linear-gradient(to right, #ff758c, #ff7eb3); border: none;">
                            <i class="bi bi-save"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
