<?php

namespace Database\Factories;

use App\Models\Carousel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Carousel>
 */
class CarouselFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6),
            'subtitle' => fake()->words(2, true),
            'description' => fake()->paragraph(),
            'image' => null,
            'cta_label' => 'Lihat katalog',
            'cta_url' => '/products',
            'is_active' => true,
            'sort_order' => 0,
        ];
    }
}
