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
                'title' => 'Kesalahan umum saat memilih snare drum untuk sekolah',
                'author' => 'Tim THORXup',
                'published_at' => now()->subDays(7)->setTime(9, 0),
                'content' => '<p>Snare drum sering dipilih hanya berdasarkan harga, padahal ukuran dan konstruksi shell menentukan seberapa mudah tim menyetel nadanya.</p><p>Untuk pemula, snare 14 inci dengan kedalaman sedang lebih mudah dikontrol. Hindari shell yang terlalu tebal karena bobotnya cepat melelahkan pemain saat latihan panjang.</p><p>Luangkan waktu untuk mencoba langsung. Perhatikan artikulasi saat dimainkan keras, lalu cek apakah tension rod tetap stabil setelah beberapa kali penyetelan.</p>',
            ],
            [
                'title' => 'Di balik layar: finishing bass drum pesanan sekolah',
                'author' => 'Rizky Pratama',
                'published_at' => now()->subDays(14)->setTime(10, 30),
                'content' => '<p>Setiap bass drum melewati tahap pemeriksaan rangka, pemasangan hoop, hingga finishing sebelum dikirim.</p><p>Pada pesanan terbaru, tim memilih warna biru navy dengan aksen kuningan. Kombinasi ini tetap terbaca jelas di bawah cahaya lapangan dan tidak mudah terlihat kusam.</p><p>Proses finishing memakan waktu tiga hari kerja. Kami menahan pengiriman sampai cat benar-benar kering agar tidak rusak saat perjalanan.</p>',
            ],
            [
                'title' => 'Jadwal produksi akhir tahun dan tips memesan kostum',
                'author' => 'Tim THORXup',
                'published_at' => now()->subDays(24)->setTime(8, 15),
                'content' => '<p>Pesanan kostum drumband biasanya meningkat menjelang akhir tahun ajaran. Agar tidak bentrok dengan jadwal lomba, pesan minimal enam minggu sebelum tanggal pemakaian.</p><p>Siapkan daftar ukuran yang sudah diperbarui, referensi warna, dan posisi emblem pada kostum. Semakin lengkap brief, semakin sedikit revisi yang dibutuhkan.</p><p>Slot produksi terbatas. Hubungi tim kami untuk mengecek ketersediaan jadwal sebelum mengunci tanggal pengiriman.</p>',
            ],
            [
                'title' => 'Cara merawat instrumen drumband setelah performa',
                'author' => 'Tim Workshop',
                'published_at' => now()->subDays(32)->setTime(13, 0),
                'content' => '<p>Setelah tampil di lapangan, instrumen perlu dibersihkan sebelum disimpan. Debu dan keringat yang dibiarkan terlalu lama bisa mempercepat korosi pada logam.</p><p>Gunakan kain microfiber kering untuk bagian shell dan chrome. Hindari menyemprotkan pembersih langsung ke drum head atau bearing edge.</p><p>Simpan instrumen di ruang kering dengan kelembapan stabil. Jika tim sering berlatih di luar ruangan, jadwalkan pemeriksaan tension rod setiap bulan.</p>',
            ],
            [
                'title' => 'Draf: rencana workshop terbuka untuk komunitas',
                'author' => 'Tim THORXup',
                'published_at' => null,
                'content' => '<p>Kami sedang menyiapkan workshop terbuka untuk komunitas drumband di Bandung. Detail jadwal dan materi akan diumumkan setelah finalisasi.</p>',
            ],
        ];

        foreach ($articles as $article) {
            $article['image'] = null;

            News::query()->updateOrCreate(['title' => $article['title']], $article);
        }
    }
}
