<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Memilih protective coating yang tepat untuk baja karbon di lingkungan produksi',
                'author' => 'Tim Throx Up',
                'published_at' => now()->subDays(7)->setTime(9, 0),
                'content' => '<p>Ketahanan lapisan pelindung tidak hanya ditentukan oleh harga, tetapi oleh kesesuaian formulasi dengan kondisi operasional dan jenis logam yang dilindungi.</p><p>Untuk baja karbon pada mesin produksi, perhatikan ketahanan terhadap lembap, suhu, dan paparan bahan kimia. Protective coating epoxy dengan preparasi permukaan yang benar memberikan adhesi optimal dan perlindungan jangka panjang.</p><p>Luangkan waktu untuk uji coba area terbatas sebelum aplikasi penuh. Periksa daya rekat, waktu curing, dan kompatibilitas dengan sistem pelapisan berikutnya.</p>',
            ],
            [
                'title' => 'Di balik layar: preparasi permukaan sebelum aplikasi coating',
                'author' => 'Rizky Pratama',
                'published_at' => now()->subDays(14)->setTime(10, 30),
                'content' => '<p>Setiap aplikasi coating melewati tahap pembersihan, preparasi, dan pemeriksaan permukaan sebelum produk diterapkan di lokasi pelanggan.</p><p>Pada proyek terbaru, tim menggunakan industrial cleaner dan surface treatment untuk memastikan tidak ada residu minyak yang mengganggu adhesi pada baja karbon dan stainless steel.</p><p>Proses preparasi memakan waktu dua hari kerja. Kami menahan aplikasi akhir sampai permukaan benar-benar siap agar perlindungan tidak cepat mengalami degradasi.</p>',
            ],
            [
                'title' => 'Perawatan preventif mesin: peran corrosion inhibitor dalam memperpanjang umur aset',
                'author' => 'Tim Throx Up',
                'published_at' => now()->subDays(24)->setTime(8, 15),
                'content' => '<p>Biaya perawatan industri dapat ditekan dengan program perawatan preventif yang konsisten, salah satunya melalui penggunaan corrosion inhibitor pada sistem kritis.</p><p>Formulasi yang tepat membantu melindungi baja karbon, aluminium, dan logam non-ferrous dari korosi tanpa mengganggu kinerja operasional mesin.</p><p>Segera jadwalkan evaluasi kondisi sistem Anda bersama tim teknis kami untuk menentukan dosis dan interval aplikasi yang paling efisien.</p>',
            ],
            [
                'title' => 'PT Trit Indonesia dan Throx Up perluas dukungan perawatan aset industri nasional',
                'author' => 'Tim Workshop',
                'published_at' => now()->subDays(32)->setTime(13, 0),
                'content' => '<p>Melalui kemitraan dengan PT Trit Indonesia, produk Throx Up kini tersedia untuk mendukung program perawatan preventif dan perlindungan aset mesin industri di seluruh Indonesia.</p><p>Kolaborasi ini menggabungkan formulasi kimia permukaan yang terus disempurnakan dengan jaringan distribusi dan dukungan teknis yang responsif bagi tim maintenance.</p><p>Setiap produk dikirim dengan standar kualitas yang terjamin serta pendampingan aplikasi sesuai kebutuhan fasilitas.</p>',
            ],
            [
                'title' => 'Draf: rencana workshop aplikasi coating untuk tim maintenance',
                'author' => 'Tim Throx Up',
                'published_at' => null,
                'content' => '<p>Kami sedang menyiapkan workshop aplikasi protective coating dan surface treatment untuk tim maintenance industri di Bandung. Detail jadwal dan materi akan diumumkan setelah finalisasi.</p>',
            ],
        ];

        foreach ($articles as $article) {
            $article['image'] = null;

            News::query()->updateOrCreate(['title' => $article['title']], $article);
        }

        // Hapus hanya artikel demo lama; jangan menyentuh artikel buatan admin.
        News::query()
            ->whereIn('title', [
                'Kesalahan umum saat memilih snare drum untuk sekolah',
                'Di balik layar: finishing bass drum pesanan sekolah',
                'Jadwal produksi akhir tahun dan tips memesan kostum',
                'Cara merawat instrumen drumband setelah performa',
                'Draf: rencana workshop terbuka untuk komunitas',
            ])
            ->delete();
    }
}
