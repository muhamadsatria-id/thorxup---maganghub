<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            [
                'title' => 'Bunyi rapi. Tampilan berani. Siap panggung.',
                'subtitle' => 'Perlengkapan drumband performa',
                'description' => 'Snare, bass, tenor, cymbal, sampai kostum. Dibuat dengan bahan pilihan dan kontrol kualitas di setiap tahap, untuk tim yang tidak mau tampil setengah-setengah.',
                'image' => 'images/hero.jpg',
                'cta_label' => 'Lihat katalog',
                'cta_url' => '/products',
                'sort_order' => 1,
            ],
            [
                'title' => 'Dibuat untuk tim yang bergerak cepat.',
                'subtitle' => 'Produksi in-house',
                'description' => 'Setiap unit dirakit dan diperiksa di workshop Bandung. Dari rangka sampai finishing, tidak ada tahap yang dilewati.',
                'image' => null,
                'cta_label' => 'Lihat proses kami',
                'cta_url' => '/about',
                'sort_order' => 2,
            ],
            [
                'title' => 'Warna tim Anda, identitas kami.',
                'subtitle' => 'Kustom penuh',
                'description' => 'Warna, emblem, ukuran, dan detail performa bisa disesuaikan. Ceritakan brief tim Anda, kami bantu susun spesifikasinya.',
                'image' => null,
                'cta_label' => 'Mulai konsultasi',
                'cta_url' => '/contact',
                'sort_order' => 3,
            ],
        ];

        foreach ($slides as $slide) {
            Carousel::query()->updateOrCreate(
                ['title' => $slide['title']],
                [...$slide, 'is_active' => true],
            );
        }
    }
}
