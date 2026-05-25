<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $artikels = [
            [
                'judul' => 'Tips Merawat Lantai Marmer Agar Tetap Berkilau',
                'slug' => 'tips-merawat-lantai-marmer-agar-tetap-berkilau',
                'ringkasan' => 'Lantai marmer memberikan kesan mewah, namun butuh perawatan khusus. Simak tips sederhana agar marmer Anda selalu mengkilap.',
                'isi' => '<p>Lantai marmer adalah investasi yang indah untuk gedung atau rumah Anda. Namun, sifatnya yang berpori membuatnya rentan terhadap noda dan goresan. Berikut adalah beberapa tips praktis untuk merawatnya:</p>

<h3>1. Bersihkan Tumpahan Segera</h3>
<p>Karena marmer sensitif terhadap asam, tumpahan cairan seperti kopi, jus, atau pembersih berbahan lemon harus segera dilap. Gunakan kain lembut dan hindari menggosok terlalu keras agar noda tidak meresap ke dalam pori-pori batu.</p>

<h3>2. Gunakan Pembersih pH Netral</h3>
<p>Hindari pembersih lantai umum yang mengandung asam atau pemutih. Selalu gunakan sabun pembersih khusus marmer dengan pH netral untuk menjaga lapisan pelindungnya tetap awet.</p>

<h3>3. Rutin Melakukan Polishing</h3>
<p>Untuk mengembalikan kilau asli marmer yang mulai kusam akibat gesekan sepatu atau lalu lintas orang, lakukan perawatan kristalisasi dan polishing minimal 6 bulan hingga 1 tahun sekali. Proses ini membutuhkan mesin khusus dan bahan kimia poles (seperti marble powder) yang sebaiknya dikerjakan oleh tenaga profesional.</p>

<p>Dengan perawatan yang benar, lantai marmer Anda akan selalu memancarkan keindahan dan kemewahannya sepanjang tahun. Jika Anda membutuhkan bantuan profesional, tim spesialis marmer dari HK Indonesia siap mengembalikan kilau lantai Anda seperti baru kembali.</p>',
                'gambar' => null,
                'penulis' => 'Tim HK Indonesia',
            ],
            [
                'judul' => 'Inovasi Alat Pembersih Ramah Lingkungan 2026',
                'slug' => 'inovasi-alat-pembersih-ramah-lingkungan-2026',
                'ringkasan' => 'Dunia cleaning service terus berinovasi. Kini hadir berbagai alat pembersih yang tidak hanya efektif namun juga peduli lingkungan.',
                'isi' => '<p>Dulu, bersih-bersih gedung identik dengan bau klorin menyengat dan ember-ember besar berisi cairan kimia warna-warni. Sekarang? Industrinya sudah berubah drastis. Tren <strong>green cleaning</strong> bukan lagi slogan pemasaran — ini sudah jadi standar operasional bagi perusahaan jasa kebersihan yang serius.</p>

<h3>Kenapa Harus Peduli Soal "Green"?</h3>
<p>Coba pikirkan ini: karyawan Anda menghabiskan 8+ jam sehari di dalam ruangan. Kalau ruangan itu setiap hari dibersihkan pakai bahan kimia keras, residu kimianya menempel di meja, terhurup lewat udara, dan terakumulasi selama berbulan-bulan. Data dari US Environmental Protection Agency menunjukkan bahwa <strong>polusi udara dalam ruangan bisa 2-5 kali lebih buruk</strong> dibanding udara luar — dan produk pembersih konvensional adalah salah satu penyumbang utamanya.</p>

<h3>Teknologi yang Mengubah Cara Kami Bekerja</h3>

<p><strong>Steam Cleaning — Panas yang Membunuh Kuman</strong></p>
<p>Mesin steam menghasilkan uap bersuhu di atas 150°C yang mampu membunuh 99.9% bakteri dan virus tanpa bahan kimia sama sekali. Cocok banget untuk area sensitif seperti dapur kantor, ruang meeting, dan toilet. Hasilnya? Bersih, steril, dan tidak ada residu kimia yang tertinggal.</p>

<p><strong>Microfiber Generasi Baru — Lebih Sedikit Air, Lebih Banyak Hasil</strong></p>
<p>Kain microfiber sekarang punya serat berukuran 0.1 denier — lebih halus dari rambut manusia. Serat sehalus ini mampu mengangkat kotoran dan bakteri hanya dengan sedikit air, tanpa perlu deterjen. Satu kain bisa dicuci ulang ratusan kali, jadi limbahnya juga minimal.</p>

<p><strong>Deterjen Berbasis Enzim — Bukan Kimia, Tapi Biologi</strong></p>
<p>Generasi terbaru cairan pembersih menggunakan enzim dan mikroorganisme probiotik yang secara alami menguraikan kotoran organik. Setelah dibuang ke saluran air, bahan ini terurai sempurna dalam hitungan minggu — berbeda dengan deterjen konvensional yang residunya bisa bertahan bertahun-tahun di lingkungan.</p>

<p><strong>Vacuum dengan Filter HEPA — Udara Bersih Setelah Disedot</strong></p>
<p>Vacuum cleaner biasa hanya memindahkan debu dari lantai ke udara. Vacuum industri dengan filter HEPA H14 menangkap partikel hingga ukuran 0.3 mikron — termasuk serbuk sari, spora jamur, dan debu halus PM2.5. Jadi setelah divacuum, udara ruangan justru jadi lebih bersih.</p>

<h3>Bukan Tren, Tapi Tanggung Jawab</h3>
<p>Di HK Indonesia, kami sudah mengadopsi prinsip green cleaning sejak awal. Bukan karena lagi ngetren, tapi karena kami percaya bahwa membersihkan gedung tidak boleh sambil merusak kesehatan penghuninya atau merusak lingkungan. Semua produk yang kami gunakan bersertifikasi ramah lingkungan, dan kami terus mengevaluasi teknologi baru yang bisa membuat pekerjaan kami lebih efektif sekaligus lebih bertanggung jawab.</p>',
                'gambar' => null,
                'penulis' => 'Tim HK Indonesia',
            ],
        ];

        foreach ($artikels as $artikel) {
            Artikel::create($artikel);
        }
    }
}
