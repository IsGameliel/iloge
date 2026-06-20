<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PodcastEpisode extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'category',
        'description',
        'youtube_url',
        'youtube_id',
        'thumbnail_url',
        'episode_number',
        'duration',
        'is_published',
        'is_featured',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'episode_number' => 'integer',
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getEmbedUrlAttribute(): string
    {
        return "https://www.youtube.com/embed/{$this->youtube_id}";
    }

    public function getWatchUrlAttribute(): string
    {
        return "https://www.youtube.com/watch?v={$this->youtube_id}";
    }

    public function getDisplayThumbnailAttribute(): string
    {
        return $this->thumbnail_url ?: "https://i.ytimg.com/vi/{$this->youtube_id}/hqdefault.jpg";
    }
}
