<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Faq>
 */
class FaqFactory extends Factory
{
    protected $model = Faq::class;

    public function definition(): array
    {
        return [
            'category' => Faq::DEFAULT_CATEGORY,
            'question' => fake()->unique()->sentence(6),
            'answer' => fake()->paragraph(3),
            'sort_order' => fake()->numberBetween(0, 20),
            'is_published' => true,
        ];
    }
}
