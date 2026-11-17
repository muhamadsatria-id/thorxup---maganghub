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
                'name' => 'TX-Protect EP 500',
                'category' => 'Protective Coating',
                'description' => 'Protective coating epoxy dua komponen untuk baja karbon dengan ketahanan tinggi terhadap korosi dan degradasi permukaan.',
                'benefits' => "Adhesi optimal pada baja karbon yang telah dipreparasi\nKetahanan jangka panjang terhadap lembap dan bahan kimia industri\nCocok untuk aplikasi pada mesin dan struktur produksi",
                'details' => "Kemasan 5 kg dan 20 kg\nWaktu pengeringan 6 jam per lapis\nCakupan 6–8 m²/kg per lapis",
                'is_featured' => true,
            ],
            [
                'name' => 'TX-Shield PU 720',
                'category' => 'Protective Coating',
                'description' => 'Topcoat polyurethane dengan ketahanan UV dan abrasi untuk perlindungan permukaan logam pada kondisi operasional yang menuntut.',
                'benefits' => "Perlindungan terhadap gesekan dan paparan kimia\nRetensi warna dan kilap yang stabil di lingkungan produksi\nKompatibel dengan primer epoxy dan zinc rich",
                'details' => "Kemasan 4 kg dan 18 kg\nWaktu pengeringan 4 jam per lapis\nFinishing gloss dan semi-gloss",
                'is_featured' => true,
            ],
            [
                'name' => 'TX-Surface Prep 110',
                'category' => 'Surface Treatment',
                'description' => 'Perlakuan permukaan kimia untuk meningkatkan adhesi lapisan pada baja karbon, stainless steel, dan aluminium.',
                'benefits' => "Meningkatkan daya rekat coating secara signifikan\nMembersihkan oksida ringan tanpa merusak logam dasar\nProses aplikasi sederhana untuk tim maintenance",
                'details' => "Kemasan 1 liter dan 5 liter\nWaktu kontak 5–10 menit\nBilas dengan air bersih sebelum pelapisan",
                'is_featured' => true,
            ],
            [
                'name' => 'TX-Corr Inhib 330',
                'category' => 'Corrosion Inhibitor',
                'description' => 'Corrosion inhibitor cair untuk perlindungan jangka panjang pada sistem sirkulasi dan aset mesin industri.',
                'benefits' => "Menghambat korosi pada baja karbon dan paduan logam\nStabil pada rentang suhu operasi industri\nDosis rendah dengan efek perlindungan maksimal",
                'details' => "Kemasan 1 liter, 5 liter, dan 20 liter\nDosis 0,5–1,5% dari volume sistem\nKompatibel dengan sistem air dan glycol",
                'is_featured' => true,
            ],
            [
                'name' => 'TX-Clean Degreaser 210',
                'category' => 'Industrial Cleaner',
                'description' => 'Pembersih permukaan industri untuk menghilangkan minyak, lemak, dan kontaminan sebelum aplikasi coating.',
                'benefits' => "Membersihkan residu minyak dan lemak secara efektif\nTidak meninggalkan film yang mengganggu adhesi\nAman untuk baja, stainless steel, dan aluminium",
                'details' => "Kemasan 1 liter dan 5 liter\nAplikasi semprot, lap, atau celup\nDapat dibilas dengan air",
                'is_featured' => false,
            ],
            [
                'name' => 'TX-Recond Metal 450',
                'category' => 'Metal Reconditioning',
                'description' => 'Senyawa rekondisi untuk memulihkan permukaan logam yang mengalami keausan akibat gesekan operasional.',
                'benefits' => "Memulihkan profil permukaan komponen yang aus\nMengurangi gesekan lanjutan pada area perbaikan\nMemperpanjang umur pakai aset sebelum replacement",
                'details' => "Kemasan 500 gram dan 2 kg\nWaktu curing 8 jam pada suhu ruang\nDapat diamplas setelah curing",
                'is_featured' => false,
            ],
            [
                'name' => 'TX-Zinc Rich 610',
                'category' => 'Protective Coating',
                'description' => 'Primer kaya seng dengan proteksi katodik untuk struktur baja dan komponen mesin di lingkungan korosif.',
                'benefits' => "Proteksi katodik pada area goresan dan sambungan\nDaya rekat kuat pada permukaan baja yang dibersihkan\nLandasan ideal untuk topcoat epoxy dan polyurethane",
                'details' => "Kemasan 5 kg dan 20 kg\nKandungan seng 80% berat kering\nCakupan 5–7 m²/kg per lapis",
                'is_featured' => false,
            ],
            [
                'name' => 'TX-Alu Etch 140',
                'category' => 'Surface Treatment',
                'description' => 'Conversion coating untuk aluminium dan logam non-ferrous guna meningkatkan daya rekat dan ketahanan korosi.',
                'benefits' => "Membentuk lapisan konversi yang stabil pada aluminium\nMencegah oksidasi cepat setelah preparasi\nMeningkatkan kinerja lapisan cat berikutnya",
                'details' => "Kemasan 1 liter dan 5 liter\nWaktu aplikasi 2–5 menit\nBilas dan keringkan sebelum pelapisan",
                'is_featured' => false,
            ],
            [
                'name' => 'TX-Rust Blocker 360',
                'category' => 'Corrosion Inhibitor',
                'description' => 'Agen penghambat karat yang menstabilkan permukaan baja sebelum pelapisan akhir.',
                'benefits' => "Menghentikan perkembangan karat aktif\nMembentuk film pelindung pada permukaan baja\nMengurangi waktu persiapan sebelum coating",
                'details' => "Kemasan 1 liter dan 5 liter\nAplikasi kuas atau semprot\nDapat ditutup dengan primer setelah kering",
                'is_featured' => false,
            ],
            [
                'name' => 'TX-Flush Clean 230',
                'category' => 'Industrial Cleaner',
                'description' => 'Pembersih flush berbasis air untuk membersihkan residu proses dan saluran sistem hidrolik.',
                'benefits' => "Menghilangkan endapan dan residu dalam saluran\nKompatibel dengan sistem hidrolik dan pompa\nFormula rendah busa untuk pembilasan cepat",
                'details' => "Kemasan 5 liter dan 20 liter\nDilarutkan sesuai rasio yang dianjurkan\nTidak meninggalkan residu setelah pembilasan",
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

        // Hapus hanya produk demo lama; jangan menyentuh produk buatan admin.
        Product::query()
            ->whereIn('name', [
                'Snare Drum Marching 14 inci', 'Bass Drum Marching 28 inci',
                'Tenor Quint Set', 'Cymbal Marching 16 inci',
                'Kostum Drumband Performa', 'Mayoret Baton Profesional',
                'Snare Drum Marching 13 inci', 'Color Guard Flag Set',
                'Sepatu Marching Putih', 'Bass Drum Marching 26 inci',
            ])
            ->delete();
    }
}
