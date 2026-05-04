<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\GalleryItem;
use App\Models\PodcastEpisode;
use App\Models\ShopProduct;
use Illuminate\View\View;

class FrontController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function speaker(): View
    {
        return view('speaker');
    }

    public function investor(): View
    {
        return view('investor');
    }

    public function leader(): View
    {
        return view('leader');
    }

    public function pressroom(): View
    {
        return view('pressroom');
    }

    public function podcast(): View
    {
        $podcastEpisodes = PodcastEpisode::query()
            ->where('is_published', true)
            ->latest('published_at')
            ->paginate(9);

        return view('podcast', [
            'podcastEpisodes' => $podcastEpisodes,
            'featuredPodcastEpisode' => PodcastEpisode::query()
                ->where('is_published', true)
                ->where('is_featured', true)
                ->latest('published_at')
                ->first() ?? $podcastEpisodes->first(),
            'podcastCategories' => PodcastEpisode::query()
                ->where('is_published', true)
                ->select('category')
                ->distinct()
                ->orderBy('category')
                ->pluck('category'),
        ]);
    }

    public function blog(): View
    {
        $blogPosts = BlogPost::query()
            ->with('author')
            ->where('status', 'published')
            ->latest('published_at')
            ->paginate(9);

        return view('blog', [
            'blogPosts' => $blogPosts,
            'featuredPost' => $blogPosts->first(),
            'categories' => BlogPost::query()
                ->where('status', 'published')
                ->select('category')
                ->distinct()
                ->orderBy('category')
                ->pluck('category'),
        ]);
    }

    public function blogShow(BlogPost $blogPost): View
    {
        abort_unless($blogPost->status === 'published', 404);

        return view('blog-show', [
            'post' => $blogPost->load('author'),
            'relatedPosts' => BlogPost::query()
                ->where('status', 'published')
                ->whereKeyNot($blogPost->getKey())
                ->latest('published_at')
                ->take(3)
                ->get(),
        ]);
    }

    public function team(): View
    {
        return view('team');
    }

    public function gallery(): View
    {
        $galleryItems = GalleryItem::query()
            ->latest()
            ->paginate(12);

        return view('gallery', [
            'galleryItems' => $galleryItems,
            'featuredGalleryItem' => GalleryItem::query()
                ->where('is_featured', true)
                ->latest()
                ->first() ?? $galleryItems->first(),
            'galleryCategories' => GalleryItem::query()
                ->select('category')
                ->distinct()
                ->orderBy('category')
                ->pluck('category'),
        ]);
    }

    public function testimonials(): View
    {
        return view('testimonials');
    }

    public function shop(): View
    {
        $cart = collect(session('shop.cart', []))
            ->mapWithKeys(fn ($quantity, $id) => [(int) $id => (int) $quantity])
            ->filter(fn ($quantity) => $quantity > 0);

        $cartProducts = ShopProduct::query()
            ->whereIn('id', $cart->keys())
            ->get()
            ->keyBy('id');

        $cartItems = $cart
            ->map(function ($quantity, $productId) use ($cartProducts) {
                $product = $cartProducts->get($productId);

                if (! $product) {
                    return null;
                }

                return [
                    'product' => $product,
                    'quantity' => $quantity,
                    'line_total' => (float) $product->price * $quantity,
                ];
            })
            ->filter()
            ->values();

        $favoriteIds = collect(session('shop.favorites', []))
            ->map(fn ($id) => (int) $id)
            ->values();

        return view('shop', [
            'shopProducts' => ShopProduct::query()
                ->where('is_published', true)
                ->latest()
                ->paginate(9),
            'cartItems' => $cartItems,
            'cartCount' => $cartItems->sum('quantity'),
            'cartSubtotal' => $cartItems->sum('line_total'),
            'favoriteIds' => $favoriteIds,
            'favoriteProducts' => ShopProduct::query()
                ->where('is_published', true)
                ->whereIn('id', $favoriteIds)
                ->latest()
                ->get(),
        ]);
    }

    public function contact(): View
    {
        return view('contact');
    }
}
