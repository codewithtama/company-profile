@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#10555c] py-16" data-aos="fade-down">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-primary text-sm font-semibold uppercase tracking-wider mb-3" data-aos="fade-up" data-aos-delay="100">Layanan Kami</p>
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4" data-aos="fade-up" data-aos-delay="200">Pilihan Layanan Lengkap & Profesional</h1>
        <p class="text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">Apapun jenis usaha Anda, kami punya solusi kebersihannya. Dari kantor kecil sampai gedung besar, kami siap bantu rawat dan bersihkan semuanya.</p>
    </div>
</section>

{{-- SERVICES GRID --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($layanans as $index => $layanan)
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                @php
                    $imgUrl = $layanan->icon ? asset('storage/' . $layanan->icon) : asset('img/service1.png');
                @endphp
                <div class="h-48 overflow-hidden">
                    <img src="{{ $imgUrl }}" alt="{{ $layanan->nama }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $layanan->nama }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $layanan->deskripsi }}</p>
                    <a href="{{ route('kontak') }}" class="inline-block w-full text-center bg-gray-100 hover:bg-primary text-gray-700 hover:text-white font-semibold py-2.5 rounded-lg text-sm">
                        Pesan Layanan &rarr;
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16 bg-white rounded-lg border border-gray-200">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Belum ada layanan</h3>
                <p class="text-gray-500">Data layanan belum tersedia saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- CUSTOM SERVICE CTA --}}
<section class="py-16 bg-primary">
    <div class="max-w-4xl mx-auto px-4 text-center text-white">
        <h2 class="text-3xl font-bold mb-4" data-aos="zoom-in">Punya Kebutuhan Kebersihan Khusus?</h2>
        <p class="text-white/80 text-lg mb-8" data-aos="fade-up" data-aos-delay="150">Tiap gedung pasti beda perawatannya. Ngobrol bareng tim kami, yuk! Kita buat paket cleaning service yang pas banget sama kebutuhan dan budget Anda.</p>
        <a href="{{ route('kontak') }}" class="inline-block bg-white text-primary font-bold px-8 py-3 rounded-lg hover:bg-gray-100 transition hover:scale-105" data-aos="fade-up" data-aos-delay="300">
            Konsultasi Gratis Sekarang
        </a>
    </div>
</section>

@endsection
