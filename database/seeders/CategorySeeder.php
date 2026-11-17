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
                'name' => 'Snare Drum',
                'description' => 'Snare marching dengan artikulasi tegas untuk barisan depan.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Bass Drum',
                'description' => 'Bass drum bervolume besar dengan nada rendah yang stabil.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Tenor & Quint',
                'description' => 'Set tenor dan quint untuk pola ritmis yang lebih kaya.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Cymbal',
                'description' => 'Cymbal marching dengan proyeksi terang dan sustain panjang.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Kostum & Aksesori',
                'description' => 'Kostum performa, sarung tangan, dan aksesori pendukung.',
                'sort_order' => 5,
            ],
            [
                'name' => 'Mayoret & Color Guard',
                'description' => 'Baton, bendera, dan perlengkapan tim visual.',
                'sort_order' => 6,
            ],
        ];

        foreach ($categories as $category) {
            Category::query()->updateOrCreate(
                ['name' => $category['name']],
                [...$category, 'is_active' => true],
            );
        }
    }
}
