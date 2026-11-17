<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Snare Drum Marching 14 inci',
                'category' => 'Snare Drum',
                'description' => 'Snare dengan proyeksi tinggi dan artikulasi tegas, dirancang untuk barisan depan yang bergerak cepat.',
                'benefits' => "Suara tajam dan konsisten di lapangan terbuka\nShell maple 8 ply dengan bearing edge presisi\nTension rod kuningan yang mudah disetel ulang",
                'details' => "Diameter 14 inci, kedalaman 6,5 inci\nBerat 4,2 kg\nTermasuk tas jinjing berbusa",
                'is_featured' => true,
            ],
            [
                'name' => 'Bass Drum Marching 28 inci',
                'category' => 'Bass Drum',
                'description' => 'Fondasi ritme dengan nada rendah yang dalam dan tetap terbaca dari tribun terjauh.',
                'benefits' => "Volume besar tanpa kehilangan definisi\nRangka aluminium ringan dan kuat\nHoop kuningan dengan finishing tahan lembap",
                'details' => "Diameter 28 inci, kedalaman 14 inci\nBerat 9,8 kg\nTersedia harness dan penutup hujan",
                'is_featured' => true,
            ],
            [
                'name' => 'Tenor Quint Set',
                'category' => 'Tenor & Quint',
                'description' => 'Lima tenor dalam satu rangka ergonomis untuk pola melodi dan ritmis yang lebih hidup.',
                'benefits' => "Susunan nada rapi dan mudah dijangkau\nRangka ringan dengan sudut nyaman\nDrum head interchange yang cepat",
                'details' => "Ukuran 6, 8, 10, 12, dan 13 inci\nBerat total 11,4 kg\nTermasuk harness adjustable",
                'is_featured' => true,
            ],
            [
                'name' => 'Cymbal Marching 16 inci',
                'category' => 'Cymbal',
                'description' => 'Cymbal dengan serangan terang dan sustain panjang untuk aksen di setiap formasi.',
                'benefits' => "Proyeksi terang yang tidak memecah telinga\nPaduan kuningan B20 yang stabil\nMounting kuat untuk gerakan cepat",
                'details' => "Diameter 16 inci\nBerat 2,1 kg\nTermasuk strap dan polish cloth",
                'is_featured' => false,
            ],
            [
                'name' => 'Kostum Drumband Performa',
                'category' => 'Kostum & Aksesori',
                'description' => 'Kostum performa dengan potongan tegas, bahan breathable, dan detail aksen yang bisa disesuaikan.',
                'benefits' => "Bahan adem untuk performa panjang\nJahitan ganda di titik gerak\nDesain warna dan emblem bisa dikustom",
                'details' => "Ukuran S sampai XXL\nBahan drill premium dan mesh\nMinimum 10 set per pesanan",
                'is_featured' => false,
            ],
            [
                'name' => 'Mayoret Baton Profesional',
                'category' => 'Mayoret & Color Guard',
                'description' => 'Baton seimbang untuk mayoret dengan grip aman dan finishing mengkilap di bawah sorot lampu.',
                'benefits' => "Titik seimbang presisi untuk putaran stabil\nGrip anti-slip saat tangan berkeringat\nFinishing chrome tahan gores",
                'details' => "Panjang 55 cm\nBerat 210 gram\nTermasuk sarung beludru",
                'is_featured' => false,
            ],
            [
                'name' => 'Snare Drum Marching 13 inci',
                'category' => 'Snare Drum',
                'description' => 'Ukuran ringkas untuk pemain muda dengan kontrol nada yang tetap konsisten.',
                'benefits' => "Bobot ringan untuk latihan panjang\nNada tinggi yang mudah menembus ansambel\nLug dan tension rod yang mudah dirawat",
                'details' => "Diameter 13 inci, kedalaman 5,5 inci\nBerat 3,6 kg\nTermasuk tas jinjing",
                'is_featured' => false,
            ],
            [
                'name' => 'Color Guard Flag Set',
                'category' => 'Mayoret & Color Guard',
                'description' => 'Set bendera color guard dengan kain ringan dan pola gerak yang stabil.',
                'benefits' => "Kain ringan dan tidak mudah kusut\nPole seimbang untuk putaran cepat\nWarna dan sablon bisa disesuaikan",
                'details' => "Panjang pole 180 cm\nSatu set berisi 6 bendera\nTermasuk protective sleeve",
                'is_featured' => false,
            ],
            [
                'name' => 'Sepatu Marching Putih',
                'category' => 'Kostum & Aksesori',
                'description' => 'Sepatu marching dengan sol anti-slip dan upper yang mudah dibersihkan.',
                'benefits' => "Sol anti-slip untuk lapangan basah\nBantalan nyaman untuk baris panjang\nUpper sintetis mudah dibersihkan",
                'details' => "Ukuran 36 sampai 45\nBerat 420 gram per sepatu\nTersedia versi hitam dan putih",
                'is_featured' => false,
            ],
            [
                'name' => 'Bass Drum Marching 26 inci',
                'category' => 'Bass Drum',
                'description' => 'Alternatif bass drum yang lebih ringan untuk tim dengan personel muda.',
                'benefits' => "Nada rendah tetap dalam\nBobot lebih mudah dibawa\nFinishing tahan perubahan cuaca",
                'details' => "Diameter 26 inci, kedalaman 12 inci\nBerat 8,4 kg\nTermasuk harness adjustable",
                'is_featured' => false,
            ],
        ];

        foreach ($products as $index => $product) {
            $categoryName = $product['category'];
            unset($product['category']);

            $product['category_id'] = Category::query()->where('name', $categoryName)->value('id');
            $product['is_active'] = true;
            $product['sort_order'] = $index + 1;

            Product::query()->updateOrCreate(['name' => $product['name']], $product);
        }
    }
}
