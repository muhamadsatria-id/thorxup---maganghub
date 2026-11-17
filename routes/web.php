<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
