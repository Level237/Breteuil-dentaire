<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PageMeta extends Model
{
    use HasFactory;

    public const PAGES = [
        'homepage' => [
            'label' => 'Accueil',
            'route' => 'homepage',
            'path' => '/',
        ],
        'team' => [
            'label' => 'Notre équipe',
            'route' => 'team',
            'path' => '/le-cabinet/notre-equipe',
        ],
        'gallery' => [
            'label' => 'Visite du cabinet',
            'route' => 'visite-cabinet',
            'path' => '/le-cabinet/visite-cabinet',
        ],
        'services' => [
            'label' => 'Liste des services',
            'route' => 'service.index',
            'path' => '/services',
        ],
        'faq' => [
            'label' => 'FAQ',
            'route' => 'faq',
            'path' => '/faq',
        ],
        'contact' => [
            'label' => 'Contact',
            'route' => 'contact.view',
            'path' => '/contact',
        ],
        'appointment' => [
            'label' => 'Prenez rendez-vous',
            'route' => 'appointment',
            'path' => '/prenez-rendez-vous',
        ],
    ];

    protected $fillable = [
        'page_key',
        'meta_title',
        'meta_description',
        'meta_image',
    ];

    public function getLabelAttribute(): string
    {
        return self::PAGES[$this->page_key]['label'] ?? $this->page_key;
    }

    public function getImageUrlAttribute(): ?string
    {
        if (! $this->meta_image) {
            return null;
        }

        if (str_starts_with($this->meta_image, 'http://') || str_starts_with($this->meta_image, 'https://')) {
            return $this->meta_image;
        }

        if (str_starts_with($this->meta_image, 'assets/')) {
            return asset($this->meta_image);
        }

        return Storage::disk('public')->url($this->meta_image);
    }

    public static function keyForRoute(?string $routeName): ?string
    {
        return match ($routeName) {
            'homepage' => 'homepage',
            'team' => 'team',
            'visite-cabinet' => 'gallery',
            'service.index' => 'services',
            'faq' => 'faq',
            'contact.view' => 'contact',
            'appointment' => 'appointment',
            default => null,
        };
    }
}
