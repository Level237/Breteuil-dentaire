<?php

namespace Database\Seeders;

use App\Models\PageMeta;
use Illuminate\Database\Seeder;

class PageMetaSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->defaults() as $key => $item) {
            if (PageMeta::query()->where('page_key', $key)->exists()) {
                continue;
            }

            PageMeta::query()->create([
                'page_key' => $key,
                'meta_title' => $item['meta_title'],
                'meta_description' => $item['meta_description'],
                'meta_image' => $item['meta_image'],
            ]);
        }
    }

    /**
     * @return array<string, array{meta_title: string, meta_description: string, meta_image: string}>
     */
    private function defaults(): array
    {
        return [
            'homepage' => [
                'meta_title' => 'Breteuil dentaire',
                'meta_description' => 'Cabinet dentaire de la MSP de l’abbaye de Breteuil. Soins, implantologie et esthétique.',
                'meta_image' => 'assets/images/accueil.jpeg',
            ],
            'team' => [
                'meta_title' => 'Notre équipe',
                'meta_description' => 'Breteuil dentaire - Les chirurgiens-dentistes et l’équipe du cabinet',
                'meta_image' => 'assets/images/dark-team.jpg',
            ],
            'gallery' => [
                'meta_title' => 'Visite du cabinet',
                'meta_description' => 'Breteuil dentaire - Visite du cabinet',
                'meta_image' => 'assets/images/accueil.jpeg',
            ],
            'services' => [
                'meta_title' => 'Nos services',
                'meta_description' => 'Breteuil dentaire - Tous les soins, l’implantologie et l’esthétique du cabinet',
                'meta_image' => 'assets/images/protese.jpg',
            ],
            'faq' => [
                'meta_title' => 'FAQ',
                'meta_description' => 'Questions fréquentes sur les implants et les soins du cabinet Breteuil dentaire',
                'meta_image' => 'assets/images/protese.jpg',
            ],
            'contact' => [
                'meta_title' => 'Contact',
                'meta_description' => 'Contactez le cabinet dentaire de l’Abbaye de Breteuil',
                'meta_image' => 'assets/images/protese.jpg',
            ],
            'appointment' => [
                'meta_title' => 'Prenez un rendez-vous',
                'meta_description' => 'Breteuil dentaire - Prenez un rendez-vous',
                'meta_image' => 'assets/images/dental-process-img-1.jpg',
            ],
        ];
    }
}
