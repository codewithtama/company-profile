@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

{{-- HERO SECTION --}}
<section class="relative min-h-[80vh] flex items-center py-20 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/hero.png') }}" alt="Cleaning Services" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="max-w-2xl" data-aos="fade-right">
            <p class="text-primary text-sm font-semibold uppercase tracking-wider mb-4">Hygiene Kleen Indonesia</p>
            <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
                Jasa Cleaning Service Profesional
            </h1>
            <p class="text-gray-300 text-lg leading-relaxed mb-8">
                Percayakan kebersihan kantor dan tempat usaha Anda pada ahlinya. Ruangan bersih, rapi, dan wangi bikin kerja makin nyaman dan semangat!
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('layanan') }}" class="bg-primary text-white font-semibold px-6 py-3 rounded-lg hover:bg-orange-600">
                    Layanan Kami &rarr;
                </a>
                <a href="{{ route('kontak') }}" class="border border-white text-white font-semibold px-6 py-3 rounded-lg hover:bg-white hover:text-gray-800">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </div>
</section>

{{-- STATS SECTION --}}
<section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-6 border border-gray-200 rounded-lg transition hover:shadow hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="0">
                <p class="text-3xl font-bold text-primary mb-1">10+</p>
                <p class="text-gray-500 text-sm">Tahun Pengalaman</p>
            </div>
            <div class="p-6 border border-gray-200 rounded-lg transition hover:shadow hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="100">
                <p class="text-3xl font-bold text-primary mb-1">500+</p>
                <p class="text-gray-500 text-sm">Klien Aktif</p>
            </div>
            <div class="p-6 border border-gray-200 rounded-lg transition hover:shadow hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="200">
                <p class="text-3xl font-bold text-primary mb-1">{{ $layanans->count() }}</p>
                <p class="text-gray-500 text-sm">Jenis Layanan</p>
            </div>
            <div class="p-6 border border-gray-200 rounded-lg transition hover:shadow hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="300">
                <p class="text-3xl font-bold text-primary mb-1">ISO</p>
                <p class="text-gray-500 text-sm">Bersertifikasi</p>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
        <div data-aos="fade-right">
            <img src="{{ asset('img/about.png') }}" alt="About Us" class="rounded-lg shadow-md object-cover h-[400px] w-full">
        </div>
        <div data-aos="fade-left" data-aos-delay="200">
            <p class="text-primary font-semibold text-sm uppercase mb-2">Tentang HK Indonesia</p>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
                Solusi Jasa Kebersihan Andalan Bisnis Anda
            </h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                PT Peduli Cepat Internasional (PCI) hadir untuk menjawab kebutuhan layanan kebersihan yang benar-benar bisa diandalkan. Kami nggak cuma nyapu dan ngepel, tapi pastiin tempat kerja Anda betul-betul higienis dan nyaman buat semua orang.
            </p>
            <ul class="space-y-3 mb-6">
                <li class="flex items-center gap-2 text-gray-700">
                    <span class="text-green-500">&#10003;</span> Bahan pembersihnya aman dan ramah lingkungan
                </li>
                <li class="flex items-center gap-2 text-gray-700">
                    <span class="text-green-500">&#10003;</span> Tim kerja kami cepat, tanggap, dan hasilnya rapi
                </li>
                <li class="flex items-center gap-2 text-gray-700">
                    <span class="text-green-500">&#10003;</span> Harga bersahabat tapi kualitas tetap memuaskan
                </li>
            </ul>
            <a href="{{ route('tentang') }}" class="text-primary font-semibold hover:underline">
                Cari Tahu Lebih Lanjut &rarr;
            </a>
        </div>
    </div>
</section>

{{-- SERVICES PREVIEW --}}
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <p class="text-primary font-semibold text-sm uppercase mb-2">Layanan Utama</p>
            <h2 class="text-3xl font-bold text-gray-800">Pilihan Layanan Kami</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach($layanans->take(3) as $index => $layanan)
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                @php
                    $imgUrl = $layanan->icon ? asset('storage/' . $layanan->icon) : asset('img/service1.png');
                @endphp
                <div class="h-48 overflow-hidden">
                    <img src="{{ $imgUrl }}" alt="{{ $layanan->nama }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $layanan->nama }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($layanan->deskripsi, 120) }}</p>
                    <a href="{{ route('layanan') }}" class="text-primary font-semibold text-sm hover:underline">
                        Detail Layanan &rarr;
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('layanan') }}" class="inline-block px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-primary hover:text-primary transition">
                Lihat Semua Layanan
            </a>
        </div>
    </div>
</section>

{{-- CALL TO ACTION --}}
<section class="py-16 bg-primary">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4" data-aos="zoom-in">Butuh Jasa Cleaning Service Sekarang?</h2>
        <p class="text-white/80 text-lg mb-8" data-aos="fade-up" data-aos-delay="150">Tinggal hubungi tim kami, ceritakan apa yang Anda butuhkan, dan biar kami yang urus sisanya.</p>
        <a href="{{ route('kontak') }}" class="inline-block bg-white text-primary font-bold px-8 py-3 rounded-lg hover:bg-gray-100 transition hover:scale-105" data-aos="fade-up" data-aos-delay="300">
            Hubungi Kami Sekarang
        </a>
    </div>
</section>

@endsection
