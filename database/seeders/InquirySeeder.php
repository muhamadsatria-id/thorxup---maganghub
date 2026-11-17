<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use App\Models\Product;
use Illuminate\Database\Seeder;

class InquirySeeder extends Seeder
{
    public function run(): void
    {
        // Contoh pesan masuk untuk mengisi panel admin. Hapus sebelum publikasi.
        $inquiries = [
            [
                'name' => 'SMA Negeri 1 Bandung',
                'company' => 'SMA Negeri 1 Bandung',
                'email' => 'humas@smansa-bandung.example',
                'phone' => '081234567801',
                'product' => 'Snare Drum Marching 14 inci',
                'quantity' => 8,
                'subject' => 'Penawaran snare untuk tim drumband sekolah',
                'message' => 'Kami ingin memesan 8 snare untuk tim drumband sekolah. Mohon informasi spesifikasi, waktu produksi, dan estimasi biaya.',
                'status' => 'new',
                'admin_notes' => null,
            ],
            [
                'name' => 'Komunitas Drumband Cimahi',
                'company' => 'Komunitas Drumband Cimahi',
                'email' => 'kontak@drumcimahi.example',
                'phone' => '081234567802',
                'product' => 'Kostum Drumband Performa',
                'quantity' => 24,
                'subject' => 'Kostum performa warna navy dan kuningan',
                'message' => 'Kami butuh 24 set kostum untuk lomba bulan depan. Bisa minta contoh bahan dan formulir ukuran?',
                'status' => 'read',
                'admin_notes' => 'Sudah dikirim katalog bahan melalui WhatsApp.',
            ],
            [
                'name' => 'Pak Andi',
                'company' => 'Yayasan Bina Prestasi',
                'email' => 'andi@binaprestasi.example',
                'phone' => '081234567803',
                'product' => 'Bass Drum Marching 28 inci',
                'quantity' => 2,
                'subject' => 'Bass drum untuk latihan rutin',
                'message' => 'Butuh 2 bass drum untuk latihan rutin. Apakah tersedia harness dan penutup hujan?',
                'status' => 'replied',
                'admin_notes' => 'Penawaran sudah dikirim. Menunggu konfirmasi jadwal produksi.',
            ],
        ];

        foreach ($inquiries as $inquiry) {
            $productName = $inquiry['product'];
            unset($inquiry['product']);

            $inquiry['product_id'] = Product::query()->where('name', $productName)->value('id');

            Inquiry::query()->updateOrCreate(
                ['email' => $inquiry['email'], 'subject' => $inquiry['subject']],
                $inquiry,
            );
        }
    }
}
