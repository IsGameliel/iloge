<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShopProduct extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'category',
        'description',
        'price',
        'stock',
        'sku',
        'image_url',
        'is_published',
        'is_featured',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'stock' => 'integer',
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getAvailabilityLabelAttribute(): string
    {
        if (! $this->is_published) {
            return 'Archived';
        }

        if ($this->stock <= 0) {
            return 'Out of Stock';
        }

        if ($this->stock <= 12) {
            return 'Low Stock';
        }

        return 'In Stock';
    }
}
