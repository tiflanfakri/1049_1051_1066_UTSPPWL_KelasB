@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-header text-center text-white fw-bold fs-4" style="background: linear-gradient(to right, #ff758c, #ff7eb3);">
            <i class="bi bi-box-seam"></i> Daftar Barang
        </div>
        <div class="card-body p-4 bg-light">
            <div class="d-flex justify-content-between mb-4">
                <a href="{{ route('barang.create') }}" class="btn btn-success fw-semibold btn-hover">
                    <i class="bi bi-plus-circle"></i> Tambah Barang
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center align-middle">
                    <thead class="text-white" style="background: linear-gradient(to right, #4facfe, #00f2fe);">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barang as $item)
                        <tr class="table-light">
                            <td>{{ $item->id }}</td>
                            <td class="text-start">{{ $item->nama }}</td>
                            <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning btn-sm btn-hover">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <button class="btn btn-danger btn-sm btn-hover" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Konfirmasi Hapus -->
                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteModalLabel">
                                            <i class="bi bi-exclamation-triangle-fill"></i> Konfirmasi Hapus
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <p>Apakah Anda yakin ingin menghapus <strong>{{ $item->nama }}</strong>?</p>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger px-4">Ya, Hapus</button>
                                            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
