<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('podcast_episodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->string('category')->default('Leadership Blueprints');
            $table->text('description')->nullable();
            $table->string('youtube_url', 2048);
            $table->string('youtube_id', 32);
            $table->string('thumbnail_url', 2048)->nullable();
            $table->unsignedInteger('episode_number')->nullable();
            $table->string('duration')->nullable();
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        DB::table('podcast_episodes')->insert([
            [
                'title' => 'The Quantum Leap: AI Beyond the Hype Cycle',
                'category' => 'Tech Innovation',
                'description' => 'In this episode, we dissect the practical applications of generative intelligence in sovereign states and global logistics frameworks.',
                'youtube_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'youtube_id' => 'dQw4w9WgXcQ',
                'thumbnail_url' => 'https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg',
                'episode_number' => 142,
                'duration' => '48 MINS',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Sovereign Portfolio',
                'category' => 'Investment Insights',
                'description' => 'A study of long-horizon capital allocation, discipline, and durable positioning for modern builders.',
                'youtube_url' => 'https://www.youtube.com/watch?v=ysz5S6PUM-U',
                'youtube_id' => 'ysz5S6PUM-U',
                'thumbnail_url' => 'https://img.youtube.com/vi/ysz5S6PUM-U/hqdefault.jpg',
                'episode_number' => 141,
                'duration' => '32 MINS',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(8),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Blueprints of Power',
                'category' => 'Leadership Blueprints',
                'description' => 'How quiet decision systems compound into cultural authority and executive momentum.',
                'youtube_url' => 'https://www.youtube.com/watch?v=jNQXAC9IVRw',
                'youtube_id' => 'jNQXAC9IVRw',
                'thumbnail_url' => 'https://img.youtube.com/vi/jNQXAC9IVRw/hqdefault.jpg',
                'episode_number' => 140,
                'duration' => '55 MINS',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(14),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('podcast_episodes');
    }
};
