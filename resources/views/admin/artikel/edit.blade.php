@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $artikel->judul) }}" required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" name="penulis" value="{{ old('penulis', $artikel->penulis) }}" required>
                    @error('penulis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ringkasan" class="form-label">Ringkasan</label>
                    <textarea class="form-control @error('ringkasan') is-invalid @enderror" id="ringkasan" name="ringkasan" rows="3" required>{{ old('ringkasan', $artikel->ringkasan) }}</textarea>
                    @error('ringkasan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Artikel</label>
                    <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="10" required>{{ old('isi', $artikel->isi) }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    @if($artikel->gambar)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" style="width: 150px;">
                        </div>
                    @endif
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar. Format: jpeg, png, jpg, gif. Maks: 2MB</small>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
