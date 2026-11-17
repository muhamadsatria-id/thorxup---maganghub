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
            'vision' => 'Menjadi mitra tepercaya bagi industri manufaktur dan pemeliharaan mesin di Indonesia melalui solusi kimia permukaan logam yang inovatif, andal, dan berkelanjutan.',
            'mission' => "Menghadirkan produk perawatan, perlindungan, dan rekondisi permukaan logam yang diformulasikan untuk ketahanan jangka panjang terhadap korosi, gesekan, dan degradasi permukaan.\nMenyediakan protective coating, surface treatment, corrosion inhibitor, dan pembersih permukaan industri untuk baja karbon, stainless steel, aluminium, dan logam non-ferrous lainnya.\nMendukung program perawatan preventif dan perlindungan aset mesin industri di seluruh Indonesia melalui kemitraan dengan PT Trit Indonesia dengan standar kualitas yang terjamin.",
            'core_values' => "Inovasi\nKetahanan\nPresisi\nKolaborasi",
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
