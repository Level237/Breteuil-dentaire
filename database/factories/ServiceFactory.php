<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $title = fake()->unique()->words(3, true);

        return [
            'title' => ucfirst($title),
            'slug' => Str::slug($title),
            'category' => fake()->randomElement(array_keys(Service::CATEGORIES)),
            'hero_image' => 'assets/images/protese.jpg',
            'featured_image' => 'assets/images/service-single-img.jpg',
            'meta_title' => ucfirst($title),
            'meta_description' => fake()->sentence(12),
            'excerpt' => fake()->paragraph(),
            'body' => '<p>'.fake()->paragraphs(2, true).'</p>',
            'sort_order' => fake()->numberBetween(0, 20),
            'is_published' => true,
        ];
    }
}
