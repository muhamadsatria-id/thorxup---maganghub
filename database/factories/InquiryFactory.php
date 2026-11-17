<?php

namespace Database\Factories;

use App\Models\Inquiry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Inquiry>
 */
class InquiryFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'company' => fake()->company(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => '08'.fake()->numerify('##########'),
            'product_id' => null,
            'quantity' => fake()->numberBetween(1, 40),
            'subject' => fake()->sentence(4),
            'message' => fake()->paragraph(),
            'status' => 'new',
            'admin_notes' => null,
        ];
    }
}
