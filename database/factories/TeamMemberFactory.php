<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<TeamMember>
 */
class TeamMemberFactory extends Factory
{
    protected $model = TeamMember::class;

    public function definition(): array
    {
        $name = fake()->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'role' => 'Chirurgien-dentiste',
            'photo' => 'teams/example.jpg',
            'diplomas' => [
                'Diplôme universitaire d’implantologie',
                'Certificat d’études supérieures',
            ],
            'appointment_url' => null,
            'social_links' => null,
            'sort_order' => fake()->numberBetween(0, 10),
            'is_active' => true,
        ];
    }
}
