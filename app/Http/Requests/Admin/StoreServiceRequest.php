<?php

namespace App\Http\Requests\Admin;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() === true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:180'],
            'slug' => ['nullable', 'string', 'max:180', 'alpha_dash', Rule::unique('services', 'slug'), Rule::notIn(Service::RESERVED_SLUGS)],
            'category' => ['required', 'string', Rule::in(array_keys(Service::CATEGORIES))],
            'hero_image' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:8192'],
            'featured_image' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:8192'],
            'meta_title' => ['nullable', 'string', 'max:180'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:2000'],
            'body' => ['nullable', 'string', 'max:50000'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:9999'],
            'is_published' => ['nullable', 'boolean'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'titre',
            'slug' => 'adresse web (slug)',
            'category' => 'catégorie',
            'hero_image' => 'image du bandeau',
            'featured_image' => 'image principale',
            'meta_title' => 'titre SEO',
            'meta_description' => 'description SEO',
            'excerpt' => 'chapeau',
            'body' => 'contenu',
            'sort_order' => 'ordre d’affichage',
            'is_published' => 'publication',
        ];
    }
}
