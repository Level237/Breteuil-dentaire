<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTeamMemberRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() === true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150'],
            'slug' => ['nullable', 'string', 'max:150', Rule::unique('team_members', 'slug')],
            'role' => ['required', 'string', 'max:150'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:8192'],
            'diplomas_text' => ['nullable', 'string', 'max:5000'],
            'appointment_url' => ['nullable', 'url', 'max:255'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:9999'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nom complet',
            'slug' => 'identifiant d’URL (slug)',
            'role' => 'titre ou rôle',
            'photo' => 'photo du praticien',
            'diplomas_text' => 'diplômes et formations',
            'appointment_url' => 'lien de prise de rendez-vous',
            'sort_order' => 'ordre d’affichage',
            'is_active' => 'visibilité sur le site',
        ];
    }
}
