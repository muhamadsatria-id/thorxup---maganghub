<?php

namespace Database\Factories;

use App\Models\ProfileBrand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProfileBrand>
 */
class ProfileBrandFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'vision' => fake()->paragraph(),
            'mission' => implode("\n", fake()->sentences(3)),
            'core_values' => implode("\n", fake()->words(4)),
            'alamat' => fake()->address(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'whatsapp' => '08'.fake()->numerify('##########'),
        ];
    }
}
