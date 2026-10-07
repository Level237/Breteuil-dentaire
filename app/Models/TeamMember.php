<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'role',
        'photo',
        'diplomas',
        'appointment_url',
        'social_links',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'diplomas' => 'array',
        'social_links' => 'array',
        'sort_order' => 'integer',
        'is_active' => 'boolean',
    ];

    public function getPhotoUrlAttribute(): ?string
    {
        if (! $this->photo) {
            return null;
        }

        if (str_starts_with($this->photo, 'http://') || str_starts_with($this->photo, 'https://')) {
            return $this->photo;
        }

        if (str_starts_with($this->photo, 'assets/')) {
            return asset($this->photo);
        }

        return Storage::disk('public')->url($this->photo);
    }
}
