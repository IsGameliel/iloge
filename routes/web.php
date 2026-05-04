<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\GalleryItemController;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\PodcastEpisodeController;
use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\ShopCustomerController;
use App\Http\Controllers\ShopProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/speaker', [FrontController::class, 'speaker'])->name('speaker');
Route::get('/investor', [FrontController::class, 'investor'])->name('investor');
Route::get('/leader', [FrontController::class, 'leader'])->name('leader');
Route::get('/pressroom', [FrontController::class, 'pressroom'])->name('pressroom');
Route::get('/podcast', [FrontController::class, 'podcast'])->name('podcast');
Route::post('/newsletter', [NewsletterSubscriberController::class, 'store'])->name('newsletter.store');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog/{blogPost:slug}', [FrontController::class, 'blogShow'])->name('blog.show');
Route::get('/team', [FrontController::class, 'team'])->name('team');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/testimonials', [FrontController::class, 'testimonials'])->name('testimonials');
Route::get('/shop', [FrontController::class, 'shop'])->name('shop');
Route::post('/shop/cart/{shopProduct}', [ShopCartController::class, 'add'])->name('shop.cart.add');
Route::patch('/shop/cart/{shopProduct}', [ShopCartController::class, 'update'])->name('shop.cart.update');
Route::delete('/shop/cart/{shopProduct}', [ShopCartController::class, 'remove'])->name('shop.cart.remove');
Route::post('/shop/favorites/{shopProduct}', [ShopCartController::class, 'toggleFavorite'])->name('shop.favorites.toggle');
Route::post('/shop/checkout', [ShopCartController::class, 'checkout'])->name('shop.checkout');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/blog', [DashboardController::class, 'blog'])->name('dashboard.blog');
    Route::post('/dashboard/blog', [BlogPostController::class, 'store'])->name('dashboard.blog.store');
    Route::patch('/dashboard/blog/{blogPost}', [BlogPostController::class, 'update'])->name('dashboard.blog.update');
    Route::delete('/dashboard/blog/{blogPost}', [BlogPostController::class, 'destroy'])->name('dashboard.blog.destroy');
    Route::get('/dashboard/gallery', [DashboardController::class, 'gallery'])->name('dashboard.gallery');
    Route::post('/dashboard/gallery', [GalleryItemController::class, 'store'])->name('dashboard.gallery.store');
    Route::patch('/dashboard/gallery/{galleryItem}', [GalleryItemController::class, 'update'])->name('dashboard.gallery.update');
    Route::delete('/dashboard/gallery/{galleryItem}', [GalleryItemController::class, 'destroy'])->name('dashboard.gallery.destroy');
    Route::get('/dashboard/podcast', [DashboardController::class, 'podcast'])->name('dashboard.podcast');
    Route::post('/dashboard/podcast', [PodcastEpisodeController::class, 'store'])->name('dashboard.podcast.store');
    Route::patch('/dashboard/podcast/{podcastEpisode}', [PodcastEpisodeController::class, 'update'])->name('dashboard.podcast.update');
    Route::delete('/dashboard/podcast/{podcastEpisode}', [PodcastEpisodeController::class, 'destroy'])->name('dashboard.podcast.destroy');
    Route::get('/dashboard/shop', [DashboardController::class, 'shop'])->name('dashboard.shop');
    Route::post('/dashboard/shop', [ShopProductController::class, 'store'])->name('dashboard.shop.store');
    Route::patch('/dashboard/shop/{shopProduct}', [ShopProductController::class, 'update'])->name('dashboard.shop.update');
    Route::delete('/dashboard/shop/{shopProduct}', [ShopProductController::class, 'destroy'])->name('dashboard.shop.destroy');
    Route::get('/dashboard/customers', [DashboardController::class, 'customers'])->name('dashboard.customers');
    Route::post('/dashboard/customers', [ShopCustomerController::class, 'store'])->name('dashboard.customers.store');
    Route::patch('/dashboard/customers/{shopCustomer}', [ShopCustomerController::class, 'update'])->name('dashboard.customers.update');
    Route::delete('/dashboard/customers/{shopCustomer}', [ShopCustomerController::class, 'destroy'])->name('dashboard.customers.destroy');
    Route::get('/dashboard/subscribers', [DashboardController::class, 'subscribers'])->name('dashboard.subscribers');
    Route::post('/dashboard/subscribers', [NewsletterSubscriberController::class, 'adminStore'])->name('dashboard.subscribers.store');
    Route::patch('/dashboard/subscribers/{newsletterSubscriber}', [NewsletterSubscriberController::class, 'update'])->name('dashboard.subscribers.update');
    Route::delete('/dashboard/subscribers/{newsletterSubscriber}', [NewsletterSubscriberController::class, 'destroy'])->name('dashboard.subscribers.destroy');
    Route::post('/dashboard/subscribers/send', [NewsletterSubscriberController::class, 'send'])->name('dashboard.subscribers.send');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
