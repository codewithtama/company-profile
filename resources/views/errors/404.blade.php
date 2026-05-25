@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<section class="min-h-[70vh] flex items-center justify-center bg-slate-50 pt-20">
    <div class="text-center px-4">
        <div class="relative inline-block mb-8">
            <h1 class="text-[10rem] md:text-[15rem] font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-slate-200 to-slate-300 leading-none select-none">404</h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-white p-6 rounded-3xl shadow-2xl shadow-primary/10 border border-slate-100 rotate-12 hover:rotate-0">
                    <svg class="w-16 h-16 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
            </div>
        </div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Waduh, Kesasar Ya?</h2>
        <p class="text-slate-500 text-lg mb-10 max-w-md mx-auto">Halaman yang Anda cari sepertinya tidak ada, sudah dihapus, atau URL-nya salah ketik.</p>
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-primary hover:bg-sky-600 text-white font-bold py-4 px-8 rounded-full shadow-lg shadow-primary/30 hover:shadow-primary/50">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Balik ke Beranda Aja
        </a>
    </div>
</section>
@endsection
