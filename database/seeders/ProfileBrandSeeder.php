<?php

namespace Database\Seeders;

use App\Models\ProfileBrand;
use Illuminate\Database\Seeder;

class ProfileBrandSeeder extends Seeder
{
    public function run(): void
    {
        // Kontak di bawah adalah data demo. Ganti dengan data asli sebelum publikasi.
        $profile = ProfileBrand::query()->first() ?? new ProfileBrand;

        $profile->fill([
            'name' => 'THORXup',
            'vision' => 'Menjadi mitra drumband paling tepercaya di Indonesia — tempat sekolah, komunitas, dan tim performa menemukan perlengkapan yang rapi, tahan lama, dan siap panggung.',
            'mission' => "Memproduksi perlengkapan drumband dengan bahan pilihan dan kontrol kualitas di setiap tahap.\nMendampingi tim dari pemilihan instrumen hingga penyesuaian kostum.\nMenjaga layanan purna jual yang cepat, jelas, dan bisa diandalkan.",
            'core_values' => "Presisi\nKonsistensi\nKejujuran\nKolaborasi",
            'alamat' => 'Jl. Cigondewah Kaler No. 24, Bandung, Jawa Barat 40214',
            'email' => 'halo@thorxup.id',
            'phone' => '+62 812 3456 7890',
            'whatsapp' => '081234567890',
            'instagram' => 'https://www.instagram.com/thorxup',
            'facebook' => 'https://www.facebook.com/thorxup',
            'youtube' => 'https://www.youtube.com/@thorxup',
            'tiktok' => 'https://www.tiktok.com/@thorxup',
            'shopee' => 'thorxup',
            'tokopedia' => 'thorxup',
            'bukalapak' => 'thorxup',
            'lazada' => 'thorxup',
            'maps_link' => 'https://maps.google.com/?q=Jl.+Cigondewah+Kaler+No.+24+Bandung',
        ])->save();
    }
}
