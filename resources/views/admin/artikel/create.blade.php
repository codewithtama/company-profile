@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Artikel</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" name="penulis" value="{{ old('penulis') }}" required>
                    @error('penulis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ringkasan" class="form-label">Ringkasan</label>
                    <textarea class="form-control @error('ringkasan') is-invalid @enderror" id="ringkasan" name="ringkasan" rows="3" required>{{ old('ringkasan') }}</textarea>
                    @error('ringkasan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Artikel</label>
                    <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="10" required>{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                    <small class="text-muted">Format: jpeg, png, jpg, gif. Maks: 2MB</small>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
