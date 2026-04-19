<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GalleryItemController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request);
        $data['user_id'] = $request->user()->id;
        $data['is_featured'] = $request->boolean('is_featured');

        GalleryItem::create($data);

        return redirect()
            ->route('dashboard.gallery')
            ->with('success', 'Gallery asset created.');
    }

    public function update(Request $request, GalleryItem $galleryItem): RedirectResponse
    {
        $data = $this->validatedData($request);
        $data['is_featured'] = $request->boolean('is_featured');

        $galleryItem->update($data);

        return redirect()
            ->route('dashboard.gallery')
            ->with('success', 'Gallery asset updated.');
    }

    public function destroy(GalleryItem $galleryItem): RedirectResponse
    {
        $galleryItem->delete();

        return redirect()
            ->route('dashboard.gallery')
            ->with('success', 'Gallery asset deleted.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'asset_type' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:1000'],
            'image_url' => ['required', 'url', 'max:2048'],
        ]);
    }
}
