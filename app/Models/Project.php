<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'long_description',
        'thumbnail', 'images', 'tech_stack', 'category',
        'status', 'live_url', 'github_url', 'featured',
        'is_active', 'sort_order',
    ];

    protected $casts = [
        'images'     => 'array',
        'tech_stack' => 'array',
        'featured'   => 'boolean',
        'is_active'  => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderByDesc('created_at');
    }
}
