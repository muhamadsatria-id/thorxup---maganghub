<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

Route::get('/', HomeController::class)->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [InquiryController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.detail');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.detail');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.detail');

Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms-of-service');



Route::get('/robots.txt', function () {
    if (!app()->isProduction()) {
        $lines = [
            'User-agent: *',
            'Disallow: /',
        ];
    } else {
        $lines = [
            'User-agent: *',
            'Disallow: /admin',
            'Disallow: /dashboard',
            'Disallow: /login',
            'Disallow: /register',
            'Disallow: /*?*', // Cegah crawl URL berparameter query
            'Sitemap: ' . url('/sitemap.xml'),
        ];
    }

    return response(implode("\n", $lines), 200)
        ->header('Content-Type', 'text/plain');
});

// 2. Dynamic Sitemap XML (Cached 6 Jam)
Route::get('/sitemap.xml', function () {
    $xml = Cache::remember('sitemap_xml', now()->addHours(6), function () {
        $posts = \App\Models\News::whereNotNull('published_at')->where('published_at', '<=', now())->latest('updated_at')->get();

        $urls = [
            [
                'loc' => url('/'),
                'lastmod' => now()->toAtomString(),
                'priority' => '1.0',
            ],
        ];

        foreach ($posts as $post) {
            $urls[] = [
                'loc' => route('news.detail', $post),
                'lastmod' => $post->updated_at->toAtomString(),
                'priority' => '0.8',
            ];
        }

        $xmlContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $xmlContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach ($urls as $u) {
            $xmlContent .= '<url>';
            $xmlContent .= '<loc>' . htmlspecialchars($u['loc']) . '</loc>';
            $xmlContent .= '<lastmod>' . $u['lastmod'] . '</lastmod>';
            $xmlContent .= '<priority>' . $u['priority'] . '</priority>';
            $xmlContent .= '</url>';
        }
        $xmlContent .= '</urlset>';

        return $xmlContent;
    });

    return response($xml, 200)->header('Content-Type', 'application/xml');
});