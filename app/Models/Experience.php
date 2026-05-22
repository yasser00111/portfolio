<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'company', 'location', 'type', 'description',
        'responsibilities', 'tech_used', 'start_date', 'end_date',
        'is_current', 'is_active', 'sort_order',
    ];

    protected $casts = [
        'responsibilities' => 'array',
        'tech_used'        => 'array',
        'start_date'       => 'date',
        'end_date'         => 'date',
        'is_current'       => 'boolean',
        'is_active'        => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderByDesc('start_date');
    }

    public function getDurationAttribute(): string
    {
        $start = $this->start_date->format('M Y');
        $end   = $this->is_current ? 'Present' : ($this->end_date ? $this->end_date->format('M Y') : 'Present');
        return "{$start} – {$end}";
    }
}
