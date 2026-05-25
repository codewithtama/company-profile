@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Artikel</h1>
        <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> Tambah Artikel
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($artikels as $artikel)
                        <tr>
                            <td>{{ ($artikels->currentPage() - 1) * $artikels->perPage() + $loop->iteration }}</td>
                            <td>
                                @if($artikel->gambar)
                                    <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    <span class="text-muted">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td>{{ $artikel->judul }}</td>
                            <td>{{ $artikel->penulis }}</td>
                            <td>{{ $artikel->created_at->format('d M Y') }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.artikel.edit', $artikel->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.artikel.destroy', $artikel->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
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
                            <td colspan="6" class="text-center">Belum ada artikel.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $artikels->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
