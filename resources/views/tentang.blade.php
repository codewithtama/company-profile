@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#10555c] py-16" data-aos="fade-down">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-primary text-sm font-semibold uppercase tracking-wider mb-3" data-aos="fade-up" data-aos-delay="100">Tentang Perusahaan</p>
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4" data-aos="fade-up" data-aos-delay="200">Partner Jasa Kebersihan Terpercaya</h1>
        <p class="text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">Kenalan yuk sama PT Peduli Cepat Internasional (HK Indonesia)! Kami hadir bawa solusi kebersihan buat kantor dan tempat usaha Anda.</p>
    </div>
</section>

{{-- COMPANY STORY --}}
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('img/service1.png') }}" class="rounded-lg w-full h-56 object-cover mt-6" alt="Cleaning 1">
                    <img src="{{ asset('img/service2.png') }}" class="rounded-lg w-full h-56 object-cover" alt="Cleaning 2">
                </div>
            </div>
            
            <div data-aos="fade-left">
                <p class="text-primary font-semibold text-sm uppercase mb-2">Cerita Kami</p>
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-4">Kerja Tuntas, Hasil Puas!</h2>
                <p class="text-gray-600 mb-4">
                    Berawal dari keinginan ngasih layanan cleaning service terbaik di Indonesia, <strong>HK Indonesia (Hygiene Kleen)</strong> di bawah naungan PT Peduli Cepat Internasional hadir buat Anda. Kami pantang pulang sebelum tempat kerja Anda kinclong.
                </p>
                <p class="text-gray-600 mb-6">
                    Kami tahu banget kalau kantor yang bersih itu bikin karyawan betah dan kerja makin produktif. Makanya, kami terjunkan tim yang sudah terlatih, pakai alat-alat canggih, plus cairan pembersih yang aman buat kesehatan dan lingkungan.
                </p>
                
                <div class="p-4 bg-gray-50 border-l-4 border-primary rounded" data-aos="fade-up" data-aos-delay="200">
                    <p class="italic text-gray-700">"Buat kami, bersihin ruangan itu cuma bonus. Tujuan utamanya supaya Anda bisa kerja tenang tanpa mikirin debu dan kotoran."</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- VISION & MISSION --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="0">
                <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Visi Kami</h3>
                <p class="text-gray-600">Jadi partner cleaning service nomor satu yang paling dicari, baik di dalam maupun luar negeri, karena hasil kerja kami yang konsisten rapinya.</p>
            </div>

            <div class="bg-[#10555c] p-8 rounded-lg shadow-sm transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Misi Kami</h3>
                <ul class="space-y-3 text-gray-300">
                    <li class="flex items-start gap-2">
                        <span class="text-green-400 mt-1">&#10003;</span>
                        <span>Ngasih layanan yang cepat tanggap, ramah, dan pastinya memuaskan.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-green-400 mt-1">&#10003;</span>
                        <span>Membekali tim kami biar kerja jujur, rajin, dan bisa dipercaya.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-green-400 mt-1">&#10003;</span>
                        <span>Kerja rapi pakai standar kebersihan yang jelas supaya hasilnya selalu mantap.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- CORE VALUES --}}
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-primary font-semibold text-sm uppercase mb-2" data-aos="fade-up">Budaya Kerja</p>
        <h2 class="text-3xl font-bold text-gray-800 mb-10" data-aos="fade-up" data-aos-delay="100">Nilai Inti Kami</h2>
        
        <div class="grid md:grid-cols-4 gap-6">
            <div class="p-6 border border-gray-200 rounded-lg transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="0">
                <div class="w-14 h-14 bg-orange-50 rounded-lg flex items-center justify-center mx-auto mb-4 text-primary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="font-bold text-gray-800 mb-2">Jaminan Mutu</h3>
                <p class="text-gray-600 text-sm">Kami komitmen kasih hasil bersih-bersih yang bikin Anda puas dan kagum.</p>
            </div>
            
            <div class="p-6 border border-gray-200 rounded-lg transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-orange-50 rounded-lg flex items-center justify-center mx-auto mb-4 text-primary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-gray-800 mb-2">Jujur & Terpercaya</h3>
                <p class="text-gray-600 text-sm">Tim kami adalah orang-orang pilihan, jadi Anda nggak perlu was-was soal keamanan ruangan.</p>
            </div>
            
            <div class="p-6 border border-gray-200 rounded-lg transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-orange-50 rounded-lg flex items-center justify-center mx-auto mb-4 text-primary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-800 mb-2">Aman & Ramah</h3>
                <p class="text-gray-600 text-sm">Pembersih yang kami pakai aman dihirup, nggak bikin perih, dan ramah lingkungan.</p>
            </div>
            
            <div class="p-6 border border-gray-200 rounded-lg transition hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 bg-orange-50 rounded-lg flex items-center justify-center mx-auto mb-4 text-primary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-gray-800 mb-2">Kerja Cerdas</h3>
                <p class="text-gray-600 text-sm">Selalu update alat dan cara bersih-bersih supaya hasilnya cepat beres dan maksimal.</p>
            </div>
        </div>
    </div>
</section>

@endsection
