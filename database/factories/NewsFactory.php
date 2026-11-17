<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<News>
 */
class NewsFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6),
            'content' => '<p>'.implode('</p><p>', fake()->paragraphs(3)).'</p>',
            'image' => null,
            'author' => fake()->name(),
            'published_at' => fake()->dateTimeBetween('-2 months', 'now'),
        ];
    }

    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => null,
        ]);
    }
}
