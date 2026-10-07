<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageMetaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() === true;
    }

    public function rules(): array
    {
        return [
            'meta_title' => ['required', 'string', 'max:180'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'meta_image' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:8192'],
            'remove_meta_image' => ['nullable', 'boolean'],
        ];
    }

    public function attributes(): array
    {
        return [
            'meta_title' => 'titre SEO',
            'meta_description' => 'description SEO',
            'meta_image' => 'image de partage',
        ];
    }
}
