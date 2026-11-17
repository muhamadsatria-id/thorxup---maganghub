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
                'name' => 'PT Nusantara Manufacturing',
                'company' => 'PT Nusantara Manufacturing',
                'email' => 'maintenance@nusantara-mfg.example',
                'phone' => '081234567801',
                'product' => 'TX-Protect EP 500',
                'quantity' => 20,
                'subject' => 'Penawaran protective coating untuk lini produksi',
                'message' => 'Kami ingin memesan 20 kg protective coating untuk perlindungan baja karbon di lini produksi. Mohon informasi spesifikasi teknis, cakupan aplikasi, dan estimasi biaya.',
                'status' => 'new',
                'admin_notes' => null,
            ],
            [
                'name' => 'PT Trit Indonesia',
                'company' => 'PT Trit Indonesia',
                'email' => 'engineering@trit-indonesia.example',
                'phone' => '081234567802',
                'product' => 'TX-Corr Inhib 330',
                'quantity' => 50,
                'subject' => 'Corrosion inhibitor untuk sistem sirkulasi pabrik',
                'message' => 'Kami membutuhkan 50 liter corrosion inhibitor untuk sistem sirkulasi pendingin. Bisa dikirimkan rekomendasi dosis dan data kompatibilitas material?',
                'status' => 'read',
                'admin_notes' => 'Sudah dikirim lembar data teknis melalui email.',
            ],
            [
                'name' => 'Pak Andi',
                'company' => 'Yayasan Bina Prestasi',
                'email' => 'andi@binaprestasi.example',
                'phone' => '081234567803',
                'product' => 'TX-Surface Prep 110',
                'quantity' => 10,
                'subject' => 'Surface treatment untuk preparasi permukaan logam',
                'message' => 'Butuh 10 liter surface treatment untuk preparasi permukaan sebelum pelapisan. Apakah tersedia panduan aplikasi dan estimasi waktu pengiriman?',
                'status' => 'replied',
                'admin_notes' => 'Penawaran sudah dikirim. Menunggu konfirmasi jadwal pengiriman.',
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

        // Hapus hanya pesan demo lama; jangan menyentuh pesan masuk asli.
        Inquiry::query()
            ->whereIn('subject', [
                'Penawaran snare untuk tim drumband sekolah',
                'Kostum performa warna navy dan kuningan',
                'Bass drum untuk latihan rutin',
            ])
            ->delete();
    }
}
