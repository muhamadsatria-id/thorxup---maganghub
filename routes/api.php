<?php

use App\Http\Controllers\Api\V1\CarouselController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\InquiryController;
use App\Http\Controllers\Api\V1\NewsController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')
    ->name('api.v1.')
    ->group(function (): void {
        Route::get('/health', fn () => response()->json([
            'status' => 'ok',
            'service' => config('app.name', 'THORXup').' API',
            'version' => 'v1',
            'timestamp' => now()->toIso8601String(),
        ]))->name('health');

        Route::get('/home', HomeController::class)->name('home');
        Route::get('/profile', ProfileController::class)->name('profile');
        Route::get('/carousels', [CarouselController::class, 'index'])->name('carousels.index');

        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/{category}', [CategoryController::class, 'show'])
            ->whereNumber('category')
            ->name('categories.show');

        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/{product}', [ProductController::class, 'show'])
            ->whereNumber('product')
            ->name('products.show');

        Route::get('/news', [NewsController::class, 'index'])->name('news.index');
        Route::get('/news/{news}', [NewsController::class, 'show'])
            ->whereNumber('news')
            ->name('news.show');

        Route::post('/inquiries', [InquiryController::class, 'store'])
            ->middleware('throttle:10,1')
            ->name('inquiries.store');
    });
