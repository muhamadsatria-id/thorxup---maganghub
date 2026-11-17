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
            'Protective Coating', 'Surface Treatment', 'Corrosion Inhibitor',
            'Industrial Cleaner', 'Metal Reconditioning', 'Maintenance Support',
        ]);

        return [
            'name' => $type.' '.fake()->unique()->numerify('TX-###'),
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
