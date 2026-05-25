<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->paginate(10);
        return view('admin.layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('layanan', 'public');
        }

        Layanan::create($data);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit', compact('layanan'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            if ($layanan->icon) {
                Storage::disk('public')->delete($layanan->icon);
            }
            $data['icon'] = $request->file('icon')->store('layanan', 'public');
        }

        $layanan->update($data);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy(Layanan $layanan)
    {
        if ($layanan->icon) {
            Storage::disk('public')->delete($layanan->icon);
        }
        $layanan->delete();

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
