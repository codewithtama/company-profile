# HK Indonesia - Professional Cleaning & Housekeeping Services
## Company Profile Application

[![Laravel Version](https://img.shields.io/badge/Laravel-v12.0-red?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-%5E8.2-blue?style=flat-square&logo=php)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v4.0-38bdf8?style=flat-square&logo=tailwind-css)](https://tailwindcss.com)
[![License](https://img.shields.io/badge/License-MIT-green.style=flat-square)](LICENSE)

Aplikasi Company Profile interaktif dan responsif untuk **HK Indonesia (Housekeeping Indonesia)**, penyedia jasa kebersihan (cleaning service) dan housekeeping profesional berskala nasional. Aplikasi ini dibangun dengan performa tinggi, visual premium modern, dan administrasi konten terintegrasi.

---

## 🌟 Fitur Utama

### 1. Halaman Publik (Frontend)
- **Home (Landing Page)**: Antarmuka modern yang menyajikan *value proposition* perusahaan, ringkasan layanan utama, statistik pencapaian, testimonial, serta 3 artikel edukasi terbaru.
- **Tentang Kami**: Informasi detail profil HK Indonesia, visi & misi, nilai-nilai utama perusahaan (*eco-friendly, profesional, tepercaya*), serta struktur keunggulan operasional.
- **Layanan**: Katalog layanan lengkap dengan ikon modern (seperti General Cleaning, Office Cleaning, Deep Cleaning, Marble Polishing, Housekeeping, dan Pest Control).
- **Artikel (Blog/Edukasi)**: Halaman daftar artikel dengan paginasi rapi dan SEO-friendly routing, serta halaman baca artikel yang kaya akan konten teks terformat.
- **Hubungi Kami (Kontak)**: Formulir pemesanan layanan atau pesan umum yang dilengkapi dengan validasi input menyeluruh, langsung tersimpan aman ke basis data.

### 2. Panel Admin (Backend / CMS)
- **Dashboard**: Halaman pemantauan ringkas untuk mengelola konten web.
- **Manajemen Artikel**: CRUD (*Create, Read, Update, Delete*) artikel lengkap dengan fitur unggah gambar/foto, generator *slug* otomatis yang aman terhadap duplikasi (*unique slug generator*), dan penulisan konten yang terstruktur.
- **Manajemen Layanan**: Manajemen data katalog layanan lengkap beserta kustomisasi nama, deskripsi, dan ikon representatif.

---

## 🛠️ Spesifikasi Teknologi (Tech Stack)

- **Backend**: [Laravel 12.0](https://laravel.com) (PHP 8.2+) dengan arsitektur MVC bersih.
- **Frontend**: [Tailwind CSS v4.0](https://tailwindcss.com) terintegrasi via compiler Vite terbaru untuk efisiensi performa aset tertinggi.
- **Database**: [SQLite](https://www.sqlite.org/) (Sangat ringan, andal, dan siap digunakan tanpa konfigurasi server database eksternal).
- **Pengembangan**: Laravel Vite Plugin, Laravel Tinker, dan Laravel Pail untuk pelacakan log secara *real-time*.

---

## 📋 Persyaratan Sistem

Pastikan perangkat Anda telah terinstal:
- PHP >= 8.2 (dilengkapi ekstensi `pdo_sqlite` dan `sqlite3` aktif)
- Composer >= 2.0
- Node.js >= 18.0 & npm
- Git

---

## 🚀 Langkah Instalasi & Setup Cepat

Gunakan perintah instalasi otomatis satu baris yang telah disiapkan di konfigurasi proyek:

### 1. Klon Repositori
```bash
git clone https://github.com/codewithtama/company-profile.git
cd company-profile
```

### 2. Jalankan Setup Otomatis
Proyek ini dilengkapi dengan skrip penginstalan cepat yang akan menginstal dependensi PHP & JS, menyalin berkas konfigurasi `.env`, membuat kunci enkripsi aplikasi, menginisialisasi basis data SQLite, menjalankan migrasi, dan melakukan build aset frontend secara otomatis:

```bash
composer run setup
```

### 3. Isi Data Awal (Database Seeding)
Masukkan data sampel layanan dan artikel awal untuk mempopulasikan database:

```bash
php artisan db:seed
```

---

## 💻 Menjalankan Aplikasi di Lingkungan Lokal

Aplikasi ini menggunakan integrasi *multi-process concurrency* untuk menjalankan semua komponen pengembangan secara simultan dengan satu perintah terpadu:

```bash
composer run dev
```

Perintah di atas akan secara otomatis menjalankan:
1. **PHP Development Server** (`php artisan serve` di `http://127.0.0.1:8000` / `http://localhost:8000`)
2. **Vite Hot-Reload Compiler** (`npm run dev` untuk mendeteksi perubahan css/js secara instan)
3. **Queue Listener** (`php artisan queue:listen` untuk pemrosesan antrean latar belakang)
4. **Log Streamer** (`php artisan pail` untuk menampilkan log eror/sistem langsung di terminal Anda)

---

## 🗄️ Struktur Database & Model

Aplikasi ini menggunakan 3 tabel utama (di luar sistem bawaan Laravel):

1. **`layanans`**:
   - `nama` (string): Nama layanan.
   - `deskripsi` (text): Deskripsi detail cakupan pekerjaan.
   - `icon` (string): Kode kelas ikon representatif.
2. **`artikels`**:
   - `judul` (string): Judul artikel.
   - `slug` (string): URL ramah SEO yang unik.
   - `ringkasan` (text): Cuplikan singkat artikel.
   - `isi` (longText): Isi artikel terformat.
   - `gambar` (string, nullable): Jalur penyimpanan berkas gambar artikel.
   - `penulis` (string): Nama penulis artikel (default: *Tim HK Indonesia*).
3. **`contacts`**:
   - `nama` (string), `perusahaan` (string, nullable), `email` (string), `telepon` (string), `layanan` (string), `pesan` (text).

---

## 🗺️ Struktur Rute (Routing)

### Rute Publik
| Metode | Endpoint | Controller Action | Keterangan |
| :--- | :--- | :--- | :--- |
| GET | `/` | `HomeController@index` | Landing Page & Sorotan Utama |
| GET | `/tentang` | `HomeController@tentang` | Halaman Profil Perusahaan |
| GET | `/layanan` | `HomeController@layanan` | Daftar Seluruh Jasa |
| GET | `/kontak` | `HomeController@kontak` | Halaman Formulir Kontak & Pemesanan |
| POST | `/kontak` | `HomeController@kirimPesan` | Submit Pesan (Validasi via `ContactStoreRequest`) |
| GET | `/artikel` | `ArtikelController@index` | Daftar Artikel / Blog dengan Paginasi |
| GET | `/artikel/{slug}` | `ArtikelController@show` | Detail Artikel & Navigasi SEO |

### Rute Admin Panel
| Metode | Endpoint | Controller Action | Keterangan |
| :--- | :--- | :--- | :--- |
| GET | `/admin` | *Inline closure* | Dashboard Panel Admin |
| Resource | `/admin/artikel` | `Admin\ArtikelController` | CRUD Artikel Lengkap (Unggah Gambar & Auto Slug) |
| Resource | `/admin/layanan` | `Admin\LayananController` | CRUD Manajemen Jenis Layanan Jasa |

---

## 🔒 Catatan Keamanan & Produksi

1. **Autentikasi Admin**: Di lingkungan *production*, sangat disarankan untuk menerapkan sistem autentikasi (seperti Laravel Breeze/Fortify) atau membatasi akses URL `/admin/*` menggunakan Middleware khusus.
2. **Performa Produksi**: Saat memindahkan aplikasi ke server *production*, pastikan untuk mengoptimalkan performa menggunakan perintah berikut:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   npm run build
   ```

## 📄 Lisensi

Aplikasi ini dikembangkan di bawah lisensi **MIT**. Anda bebas mendistribusikan, memodifikasi, dan menggunakannya untuk tujuan komersial maupun pribadi dengan tetap menyertakan hak cipta asli.

