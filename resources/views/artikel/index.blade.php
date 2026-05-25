@extends('layouts.app')

@section('title', 'Artikel & Berita')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#10555c] py-16" data-aos="fade-down">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-primary text-sm font-semibold uppercase tracking-wider mb-3" data-aos="fade-up" data-aos-delay="100">Artikel & Berita</p>
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4" data-aos="fade-up" data-aos-delay="200">Info Seputar Kebersihan</h1>
        <p class="text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">Cari tahu tips, trik, dan update terbaru soal cara bikin lingkungan kerja tetap bersih dan sehat.</p>
    </div>
</section>

{{-- ARTICLES GRID --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($artikels as $index => $artikel)
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden flex flex-col transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $index % 3 * 100 }}">
                @php
                    $imgUrl = $artikel->gambar ? asset('storage/' . $artikel->gambar) : asset('img/hero.png');
                @endphp
                <div class="h-48 overflow-hidden">
                    <img src="{{ $imgUrl }}" alt="{{ $artikel->judul }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex items-center text-xs text-gray-400 mb-3 gap-3">
                        <span>{{ $artikel->created_at->format('d M Y') }}</span>
                        <span>&bull;</span>
                        <span>{{ $artikel->penulis }}</span>
                    </div>
                    <h2 class="text-lg font-bold text-gray-800 mb-2 leading-tight">
                        <a href="{{ route('artikel.show', $artikel->slug) }}" class="hover:text-primary">
                            {{ $artikel->judul }}
                        </a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 flex-1">{!! Str::limit(strip_tags($artikel->isi), 120) !!}</p>
                    <a href="{{ route('artikel.show', $artikel->slug) }}" class="text-primary font-semibold text-sm hover:underline">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16 bg-white rounded-lg border border-gray-200">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Artikelnya belum ada</h3>
                <p class="text-gray-500">Tungguin ya, nanti bakal ada info seru seputar kebersihan di sini!</p>
            </div>
            @endforelse
        </div>

        <div class="mt-10 flex justify-center">
            {{ $artikels->links() }}
        </div>
    </div>
</section>

@endsection
