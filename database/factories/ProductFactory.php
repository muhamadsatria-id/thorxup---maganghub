<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement([
            'Snare Drum', 'Bass Drum', 'Tenor Drum', 'Cymbal Marching', 'Kostum Drumband', 'Mayoret Baton',
        ]);

        return [
            'name' => $type.' '.fake()->unique()->numerify('Seri ###'),
            'category_id' => Category::factory(),
            'description' => fake()->paragraph(),
            'benefits' => implode("\n", fake()->sentences(3)),
            'details' => implode("\n", fake()->sentences(4)),
            'image' => null,
            'is_active' => true,
            'is_featured' => false,
            'sort_order' => 0,
        ];
    }
}
