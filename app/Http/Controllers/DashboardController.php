<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\GalleryItem;
use App\Models\NewsletterSubscriber;
use App\Models\PodcastEpisode;
use App\Models\ShopCustomer;
use App\Models\ShopOrder;
use App\Models\ShopProduct;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard');
    }

    public function blog(Request $request): View
    {
        $blogPosts = BlogPost::query()
            ->with('author')
            ->latest()
            ->paginate(10);

        $editingPost = null;

        if ($request->filled('edit')) {
            $editingPost = BlogPost::find($request->integer('edit'));
        }

        return view('admin.blog-management', [
            'blogPosts' => $blogPosts,
            'editingPost' => $editingPost,
            'totalPosts' => BlogPost::count(),
            'publishedPosts' => BlogPost::where('status', 'published')->count(),
            'draftPosts' => BlogPost::where('status', 'draft')->count(),
            'averageReadTime' => (int) round(BlogPost::avg('read_time') ?: 0),
        ]);
    }

    public function gallery(Request $request): View
    {
        $galleryItems = GalleryItem::query()
            ->with('author')
            ->latest()
            ->paginate(9);

        $editingItem = null;

        if ($request->filled('edit')) {
            $editingItem = GalleryItem::find($request->integer('edit'));
        }

        return view('admin.gallery-management', [
            'galleryItems' => $galleryItems,
            'editingItem' => $editingItem,
            'totalGalleryItems' => GalleryItem::count(),
            'featuredGalleryItems' => GalleryItem::where('is_featured', true)->count(),
        ]);
    }

    public function podcast(Request $request): View
    {
        $podcastEpisodes = PodcastEpisode::query()
            ->with('author')
            ->latest('published_at')
            ->latest()
            ->paginate(8);

        $editingEpisode = null;

        if ($request->filled('edit')) {
            $editingEpisode = PodcastEpisode::find($request->integer('edit'));
        }

        return view('admin.podcast-management', [
            'podcastEpisodes' => $podcastEpisodes,
            'editingEpisode' => $editingEpisode,
            'totalPodcastEpisodes' => PodcastEpisode::count(),
            'publishedPodcastEpisodes' => PodcastEpisode::where('is_published', true)->count(),
            'featuredPodcastEpisodes' => PodcastEpisode::where('is_featured', true)->count(),
        ]);
    }

    public function shop(Request $request): View
    {
        $shopProducts = ShopProduct::query()
            ->with('author')
            ->latest()
            ->paginate(9);

        $editingProduct = null;

        if ($request->filled('edit')) {
            $editingProduct = ShopProduct::find($request->integer('edit'));
        }

        return view('admin.shop-management', [
            'shopProducts' => $shopProducts,
            'editingProduct' => $editingProduct,
            'totalShopProducts' => ShopProduct::count(),
            'publishedShopProducts' => ShopProduct::where('is_published', true)->count(),
            'lowStockProducts' => ShopProduct::where('is_published', true)->where('stock', '<=', 12)->count(),
        ]);
    }

    public function customers(Request $request): View
    {
        $customers = ShopCustomer::query()
            ->withCount('orders')
            ->withSum('orders as total_spent', 'subtotal')
            ->latest()
            ->paginate(10);

        $editingCustomer = null;

        if ($request->filled('edit')) {
            $editingCustomer = ShopCustomer::find($request->integer('edit'));
        }

        return view('admin.customer-management', [
            'customers' => $customers,
            'editingCustomer' => $editingCustomer,
            'totalCustomers' => ShopCustomer::count(),
            'vipCustomers' => ShopCustomer::where('status', 'vip')->count(),
            'customersWithOrders' => ShopCustomer::has('orders')->count(),
            'totalCustomerRevenue' => (float) ShopOrder::sum('subtotal'),
        ]);
    }

    public function subscribers(Request $request): View
    {
        $subscribers = NewsletterSubscriber::query()
            ->latest()
            ->paginate(12);

        $editingSubscriber = null;

        if ($request->filled('edit')) {
            $editingSubscriber = NewsletterSubscriber::find($request->integer('edit'));
        }

        return view('admin.subscriber-management', [
            'subscribers' => $subscribers,
            'editingSubscriber' => $editingSubscriber,
            'totalSubscribers' => NewsletterSubscriber::count(),
            'activeSubscribers' => NewsletterSubscriber::where('status', 'subscribed')->count(),
            'pausedSubscribers' => NewsletterSubscriber::where('status', 'paused')->count(),
            'unsubscribedSubscribers' => NewsletterSubscriber::where('status', 'unsubscribed')->count(),
            'subscriberSources' => NewsletterSubscriber::query()
                ->whereNotNull('source')
                ->select('source')
                ->distinct()
                ->orderBy('source')
                ->pluck('source'),
        ]);
    }
}
