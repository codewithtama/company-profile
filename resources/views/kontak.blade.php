@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#10555c] py-16" data-aos="fade-down">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-primary text-sm font-semibold uppercase tracking-wider mb-3" data-aos="fade-up" data-aos-delay="100">Hubungi Kami</p>
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4" data-aos="fade-up" data-aos-delay="200">Kapanpun Butuh, Kami Siap Bantu</h1>
        <p class="text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">Ada pertanyaan atau mau cek harga layanan? Langsung aja kontak kami, tim kami siap membalas pesan Anda dengan cepat.</p>
    </div>
</section>

{{-- CONTACT SECTION --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-8">
            
            {{-- CONTACT INFO --}}
            <div class="lg:col-span-2 space-y-6" data-aos="fade-right">
                <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm transition hover:shadow-md hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0 text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-gray-800 font-semibold mb-1">Kantor Pusat</h4>
                                <p class="text-gray-600 text-sm">Komplek Perkantoran Grogol Permai Blok C No. 25, JL. Prof Dr. Latumenten, Grogol, Jakarta Barat</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0 text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-gray-800 font-semibold mb-1">Telepon & WhatsApp</h4>
                                <p class="text-gray-600 text-sm">+62 812-1335-1978</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0 text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-gray-800 font-semibold mb-1">Email</h4>
                                <p class="text-gray-600 text-sm">info@hk-indonesia.id</p>
                                <p class="text-gray-600 text-sm">sales@hk-indonesia.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CONTACT FORM --}}
            <div class="lg:col-span-3" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-white p-8 lg:p-10 rounded-lg border border-gray-200 shadow-sm">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Tinggalkan Pesan</h2>
                        <p class="text-gray-500 text-sm">Isi form di bawah ini, ya. Tim kami bakalan langsung hubungin Anda maksimal dalam 1x24 jam kerja.</p>
                    </div>

                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                            <p class="text-green-700 font-semibold">Berhasil!</p>
                            <p class="text-green-600 text-sm">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('kontak.submit') }}" method="POST" onsubmit="this.querySelector('button[type=submit]').disabled = true;" class="space-y-5">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="text-sm font-semibold text-gray-700 mb-1 block">Nama Lengkap <span class="text-red-500">*</span></label>
                                <input type="text" name="nama" required class="w-full border border-gray-300 rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/30 focus:border-primary" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="text-sm font-semibold text-gray-700 mb-1 block">Nama Perusahaan</label>
                                <input type="text" name="perusahaan" class="w-full border border-gray-300 rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/30 focus:border-primary" placeholder="PT Contoh Sukses">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="text-sm font-semibold text-gray-700 mb-1 block">Alamat Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" required class="w-full border border-gray-300 rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/30 focus:border-primary" placeholder="john@example.com">
                            </div>
                            <div>
                                <label class="text-sm font-semibold text-gray-700 mb-1 block">Nomor Telepon</label>
                                <input type="tel" name="telepon" class="w-full border border-gray-300 rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/30 focus:border-primary" placeholder="+62 812 3456 7890">
                            </div>
                        </div>

                        <div>
                            <label class="text-sm font-semibold text-gray-700 mb-1 block">Pilih Layanan</label>
                            <select name="layanan" class="w-full border border-gray-300 rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/30 focus:border-primary">
                                @foreach($layanans as $layanan)
                                    <option value="{{ $layanan->nama }}">{{ $layanan->nama }}</option>
                                @endforeach
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-sm font-semibold text-gray-700 mb-1 block">Pesan <span class="text-red-500">*</span></label>
                            <textarea name="pesan" required rows="4" class="w-full border border-gray-300 rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/30 focus:border-primary resize-none" placeholder="Kasih tahu kami ruangan apa saja yang mau dibersihkan..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-primary text-white font-semibold rounded-lg py-3 hover:bg-orange-600">
                            Kirim Pesan &rarr;
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
