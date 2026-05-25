<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->paginate(6);
        return view('artikel.index', compact('artikels'));
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $lainnya = Artikel::where('slug', '!=', $slug)->latest()->take(3)->get();
        return view('artikel.show', compact('artikel', 'lainnya'));
    }
}
