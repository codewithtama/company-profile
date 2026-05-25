@extends('layouts.app')

@section('title', $artikel->judul)

@section('content')

{{-- ARTICLE HEADER --}}
<section class="bg-[#10555c] py-16" data-aos="fade-down">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {{-- Breadcrumb --}}
        <div class="flex items-center justify-center gap-2 text-sm text-gray-400 mb-6" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('home') }}" class="hover:text-white">Beranda</a>
            <span>&bull;</span>
            <a href="{{ route('artikel.index') }}" class="hover:text-white">Artikel</a>
            <span>&bull;</span>
            <span class="text-primary">{{ Str::limit($artikel->judul, 30) }}</span>
        </div>

        <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6" data-aos="fade-up" data-aos-delay="200">{{ $artikel->judul }}</h1>
        
        <div class="flex items-center justify-center gap-4 text-sm text-gray-300" data-aos="fade-up" data-aos-delay="300">
            <span>Oleh: {{ $artikel->penulis }}</span>
            <span>&bull;</span>
            <span>{{ $artikel->created_at->format('d F Y') }}</span>
        </div>
    </div>
</section>

{{-- ARTICLE CONTENT --}}
<section class="py-12 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($artikel->gambar)
        <div class="mb-8 overflow-hidden rounded-xl shadow-lg" data-aos="zoom-in">
            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="w-full h-auto object-cover max-h-[500px]">
        </div>
        @endif
        
        <div class="article-content max-w-none mb-12" data-aos="fade-up">
            {!! $artikel->isi !!}
        </div>

        {{-- Back button --}}
        <div class="py-6 border-t border-gray-200" data-aos="fade-up">
            <a href="{{ route('artikel.index') }}" class="inline-flex items-center gap-2 text-gray-600 font-semibold hover:text-primary transition">
                &larr; Kembali ke Daftar Artikel
            </a>
        </div>
    </div>
</section>

{{-- RELATED ARTICLES --}}
@if($lainnya->count() > 0)
<section class="bg-gray-50 py-16 px-4 border-t border-gray-200" data-aos="fade-up">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-2xl font-bold text-gray-800">Artikel Lainnya</h3>
            <a href="{{ route('artikel.index') }}" class="text-primary font-semibold hover:underline text-sm hidden md:block">Lihat Semua &rarr;</a>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($lainnya as $index => $item)
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                <div class="p-6">
                    <p class="text-xs text-gray-400 mb-2">{{ $item->created_at->format('d M Y') }}</p>
                    <h4 class="text-lg font-bold text-gray-800 mb-3 leading-tight"><a href="{{ route('artikel.show', $item->slug) }}" class="hover:text-primary">{{ $item->judul }}</a></h4>
                    <a href="{{ route('artikel.show', $item->slug) }}" class="text-primary text-sm font-semibold hover:underline">Baca Artikel &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
