<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProfileBrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            NewsSeeder::class,
            CarouselSeeder::class,
            InquirySeeder::class,
        ]);

        User::query()->updateOrCreate(
            ['email' => 'admin@thorxup.id'],
            [
                'name' => 'Admin THORXup',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ],
        );
    }
}
