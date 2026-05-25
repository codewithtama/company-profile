<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Artikel;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        $artikels = Artikel::latest()->take(3)->get();
        return view('home', compact('layanans', 'artikels'));
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function layanan()
    {
        $layanans = Layanan::all();
        return view('layanan', compact('layanans'));
    }

    public function kontak()
    {
        $layanans = Layanan::all();
        return view('kontak', compact('layanans'));
    }

    public function kirimPesan(\App\Http\Requests\ContactStoreRequest $request)
    {
        // Validasi sudah ditangani otomatis oleh ContactStoreRequest
        $validatedData = $request->validated();

        // Di sini biasanya kita menyimpan ke database atau kirim email
        Contact::create($validatedData);

        return redirect()->route('kontak')->with('success', 'Terima kasih, pesan Anda berhasil terkirim! Tim kami akan segera menghubungi Anda.');
    }
}
