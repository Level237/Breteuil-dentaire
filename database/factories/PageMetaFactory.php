<?php

namespace Database\Factories;

use App\Models\PageMeta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PageMeta>
 */
class PageMetaFactory extends Factory
{
    protected $model = PageMeta::class;

    public function definition(): array
    {
        return [
            'page_key' => 'homepage',
            'meta_title' => 'Breteuil dentaire',
            'meta_description' => 'Cabinet dentaire de l’Abbaye de Breteuil.',
            'meta_image' => 'assets/images/accueil.jpeg',
        ];
    }
}
