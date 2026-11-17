<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Protective Coating',
                'description' => 'Lapisan pelindung untuk ketahanan korosi dan degradasi permukaan pada logam industri.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Surface Treatment',
                'description' => 'Perlakuan permukaan untuk meningkatkan adhesi dan kinerja lapisan pada berbagai paduan logam.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Corrosion Inhibitor',
                'description' => 'Formulasi penghambat korosi untuk perlindungan jangka panjang pada sistem dan aset logam.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Industrial Cleaner',
                'description' => 'Pembersih permukaan industri untuk menghilangkan kontaminan sebelum aplikasi lapisan.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Metal Reconditioning',
                'description' => 'Produk rekondisi untuk memulihkan permukaan logam yang mengalami keausan dan gesekan.',
                'sort_order' => 5,
            ],
            [
                'name' => 'Maintenance Support',
                'description' => 'Pendukung aplikasi dan perlengkapan untuk program perawatan preventif mesin industri.',
                'sort_order' => 6,
            ],
        ];

        foreach ($categories as $category) {
            Category::query()->updateOrCreate(
                ['name' => $category['name']],
                [...$category, 'is_active' => true],
            );
        }

        // Hapus hanya data demo lama; jangan menyentuh kategori buatan admin.
        Category::query()
            ->whereIn('name', [
                'Snare Drum', 'Bass Drum', 'Tenor & Quint',
                'Cymbal', 'Kostum & Aksesori', 'Mayoret & Color Guard',
            ])
            ->delete();
    }
}
