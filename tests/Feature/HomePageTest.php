<?php

use App\Models\News;
use App\Models\Product;
use App\Models\ProfileBrand;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('renders the home page with content from the database', function () {
    $profile = ProfileBrand::factory()->create(['name' => 'THORXup Drumband']);
    $product = Product::factory()->create(['name' => 'Snare Drum Marching 14 inci']);
    $news = News::factory()->create([
        'title' => 'Kabar workshop terbaru',
        'published_at' => now()->subDay(),
    ]);

    $this->get('/')
        ->assertOk()
        ->assertSee($profile->name)
        ->assertSee($product->name)
        ->assertSee($news->title);
});

it('only lists news that has been published', function () {
    News::factory()->create([
        'title' => 'Berita yang sudah terbit',
        'published_at' => now()->subDay(),
    ]);

    News::factory()->create([
        'title' => 'Draf yang belum terbit',
        'published_at' => null,
    ]);

    $this->get('/')
        ->assertOk()
        ->assertSee('Berita yang sudah terbit')
        ->assertDontSee('Draf yang belum terbit');
});

it('renders the home page when the database is empty', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('THORXup');
});
