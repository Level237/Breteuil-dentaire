<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Gallery>
 */
class GalleryFactory extends Factory
{
    protected $model = Gallery::class;

    public function definition(): array
    {
        return [
            'path' => 'galleries/example.jpg',
            'alt' => fake()->sentence(4),
            'sort_order' => fake()->numberBetween(0, 20),
        ];
    }
}
