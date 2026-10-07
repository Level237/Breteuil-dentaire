<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    use HasFactory;

    public const CATEGORY_SOINS = 'soins';

    public const CATEGORY_IMPLANTOLOGIE = 'implantologie';

    public const CATEGORY_ESTHETIQUE = 'esthetique';

    public const CATEGORIES = [
        self::CATEGORY_SOINS => 'Soins',
        self::CATEGORY_IMPLANTOLOGIE => 'Implantologie',
        self::CATEGORY_ESTHETIQUE => 'Esthétique',
    ];

    public const RESERVED_SLUGS = [
        'admin',
        'le-cabinet',
        'contact',
        'faq',
        'services',
        'prenez-rendez-vous',
        'login',
        'storage',
    ];

    protected $fillable = [
        'title',
        'slug',
        'category',
        'hero_image',
        'featured_image',
        'meta_title',
        'meta_description',
        'meta_image',
        'excerpt',
        'body',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'is_published' => 'boolean',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function getCategoryLabelAttribute(): string
    {
        return self::CATEGORIES[$this->category] ?? $this->category;
    }

    public function getHeroUrlAttribute(): ?string
    {
        return $this->resolveMediaUrl($this->hero_image);
    }

    public function getFeaturedUrlAttribute(): ?string
    {
        return $this->resolveMediaUrl($this->featured_image);
    }

    public function getMetaImageUrlAttribute(): ?string
    {
        return $this->resolveMediaUrl($this->meta_image)
            ?? $this->featured_url
            ?? $this->hero_url;
    }

    public function publicUrl(): string
    {
        return route('service.show', $this->slug);
    }

    private function resolveMediaUrl(?string $path): ?string
    {
        if (! $path) {
            return null;
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (str_starts_with($path, 'assets/')) {
            return asset($path);
        }

        return Storage::disk('public')->url($path);
    }
}
