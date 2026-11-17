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
                'title' => 'Perlindungan permukaan logam untuk industri yang menuntut.',
                'subtitle' => '',
                'description' => 'Protective coating, surface treatment, corrosion inhibitor, dan pembersih permukaan industri. Diformulasikan untuk ketahanan jangka panjang terhadap korosi, gesekan, dan degradasi permukaan.',
                'image' => 'images/hero.jpg',
                'cta_label' => 'Lihat katalog',
                'cta_url' => '/products',
                'sort_order' => 1,
            ],
            [
                'title' => 'Formulasi presisi untuk ketahanan jangka panjang.',
                'subtitle' => '',
                'description' => 'Produk Throx Up memastikan adhesi optimal pada baja karbon, stainless steel, aluminium, dan logam non-ferrous, bahkan pada kondisi operasional paling menuntut.',
                'image' => null,
                'cta_label' => 'Pelajari teknologi kami',
                'cta_url' => '/about',
                'sort_order' => 2,
            ],
            [
                'title' => 'Dukungan teknis untuk tim maintenance industri.',
                'subtitle' => '',
                'description' => 'Bersama PT Trit Indonesia, kami mendampingi program perawatan preventif dan perlindungan aset mesin industri di seluruh Indonesia dengan standar kualitas terjamin.',
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

        // Hapus hanya slide demo lama; jangan menyentuh slide buatan admin.
        Carousel::query()
            ->whereIn('title', [
                'Bunyi rapi. Tampilan berani. Siap panggung.',
                'Dibuat untuk tim yang bergerak cepat.',
                'Warna tim Anda, identitas kami.',
            ])
            ->delete();
    }
}
