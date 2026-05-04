<?php

namespace App\Http\Controllers;

use App\Models\PodcastEpisode;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PodcastEpisodeController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request);
        $youtubeId = $this->youtubeIdFromUrl($data['youtube_url']);

        $data['user_id'] = $request->user()->id;
        $data['youtube_id'] = $youtubeId;
        $data['thumbnail_url'] = $data['thumbnail_url'] ?: "https://img.youtube.com/vi/{$youtubeId}/hqdefault.jpg";
        $data['is_published'] = $request->boolean('is_published');
        $data['is_featured'] = $request->boolean('is_featured');
        $data['published_at'] = $data['is_published'] ? now() : null;

        PodcastEpisode::create($data);

        return redirect()
            ->route('dashboard.podcast')
            ->with('success', 'Podcast episode created.');
    }

    public function update(Request $request, PodcastEpisode $podcastEpisode): RedirectResponse
    {
        $data = $this->validatedData($request);
        $youtubeId = $this->youtubeIdFromUrl($data['youtube_url']);

        $data['youtube_id'] = $youtubeId;
        $data['thumbnail_url'] = $data['thumbnail_url'] ?: "https://img.youtube.com/vi/{$youtubeId}/hqdefault.jpg";
        $data['is_published'] = $request->boolean('is_published');
        $data['is_featured'] = $request->boolean('is_featured');

        if ($data['is_published'] && ! $podcastEpisode->published_at) {
            $data['published_at'] = now();
        }

        if (! $data['is_published']) {
            $data['published_at'] = null;
        }

        $podcastEpisode->update($data);

        return redirect()
            ->route('dashboard.podcast')
            ->with('success', 'Podcast episode updated.');
    }

    public function destroy(PodcastEpisode $podcastEpisode): RedirectResponse
    {
        $podcastEpisode->delete();

        return redirect()
            ->route('dashboard.podcast')
            ->with('success', 'Podcast episode deleted.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:1200'],
            'youtube_url' => ['required', 'url', 'max:2048'],
            'thumbnail_url' => ['nullable', 'url', 'max:2048'],
            'episode_number' => ['nullable', 'integer', 'min:1', 'max:100000'],
            'duration' => ['nullable', 'string', 'max:50'],
        ]);
    }

    private function youtubeIdFromUrl(string $url): string
    {
        $parts = parse_url($url);
        $host = strtolower($parts['host'] ?? '');
        $path = trim($parts['path'] ?? '', '/');

        if (str_contains($host, 'youtu.be') && $path !== '') {
            return strtok($path, '/');
        }

        if (str_contains($host, 'youtube.com')) {
            parse_str($parts['query'] ?? '', $query);

            if (! empty($query['v'])) {
                return $query['v'];
            }

            foreach (['embed/', 'shorts/', 'live/'] as $prefix) {
                if (str_starts_with($path, $prefix)) {
                    return strtok(substr($path, strlen($prefix)), '/');
                }
            }
        }

        throw ValidationException::withMessages([
            'youtube_url' => 'Enter a valid YouTube video link.',
        ]);
    }
}
