<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $layanans = [
            [
                'nama' => 'General Cleaning',
                'deskripsi' => 'Layanan kebersihan umum untuk gedung perkantoran, pusat perbelanjaan, dan fasilitas komersial lainnya. Meliputi pembersihan lantai, dinding, kaca, dan area publik secara menyeluruh.',
                'icon' => 'building',
            ],
            [
                'nama' => 'Office Cleaning',
                'deskripsi' => 'Layanan kebersihan khusus perkantoran yang mencakup pembersihan ruang kerja, toilet, pantry, dan ruang meeting. Dapat dijadwalkan harian, mingguan, atau bulanan.',
                'icon' => 'briefcase',
            ],
            [
                'nama' => 'Deep Cleaning',
                'deskripsi' => 'Pembersihan mendalam untuk area yang membutuhkan penanganan ekstra. Termasuk pembersihan AC, karpet, upholstery, dan area tersembunyi yang jarang dijangkau.',
                'icon' => 'sparkles',
            ],
            [
                'nama' => 'Marble Cleaning & Polishing',
                'deskripsi' => 'Layanan perawatan dan pemolesan lantai marmer, granit, dan material batu lainnya. Mengembalikan kilap alami dan menjaga keindahan material premium.',
                'icon' => 'star',
            ],
            [
                'nama' => 'Housekeeping',
                'deskripsi' => 'Penyediaan tenaga housekeeping profesional terlatih untuk hotel, apartemen, dan residensial. Tim kami berpengalaman dalam standar internasional perhotelan.',
                'icon' => 'home',
            ],
            [
                'nama' => 'Pest Control',
                'deskripsi' => 'Layanan pengendalian hama profesional menggunakan bahan-bahan yang aman dan ramah lingkungan. Efektif mengatasi masalah serangga, tikus, dan hama lainnya.',
                'icon' => 'shield',
            ],
        ];

        foreach ($layanans as $layanan) {
            Layanan::create($layanan);
        }
    }
}
