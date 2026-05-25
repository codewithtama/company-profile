@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Layanan</h1>
        <a href="{{ route('admin.layanan.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> Tambah Layanan
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Icon/Gambar</th>
                            <th>Nama Layanan</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($layanans as $layanan)
                        <tr>
                            <td>{{ ($layanans->currentPage() - 1) * $layanans->perPage() + $loop->iteration }}</td>
                            <td>
                                @if($layanan->icon)
                                    <img src="{{ asset('storage/' . $layanan->icon) }}" alt="{{ $layanan->nama }}" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    <span class="text-muted">Tidak ada icon</span>
                                @endif
                            </td>
                            <td>{{ $layanan->nama }}</td>
                            <td>{{ Str::limit($layanan->deskripsi, 100) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.layanan.edit', $layanan->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.layanan.destroy', $layanan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada layanan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $layanans->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
