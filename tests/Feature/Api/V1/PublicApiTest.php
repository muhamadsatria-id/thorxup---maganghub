<?php

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Inquiry;
use App\Models\News;
use App\Models\Product;
use App\Models\ProfileBrand;

it('returns the public home payload', function () {
    $profile = ProfileBrand::factory()->create(['name' => 'THORXup Industrial']);
    $category = Category::factory()->create(['name' => 'Protective Coating']);
    $product = Product::factory()->for($category)->create(['name' => 'TX-Surface Prep 110', 'is_featured' => true]);
    $news = News::factory()->create(['title' => 'Berita terbaru', 'published_at' => now()->subDay()]);
    Carousel::factory()->create(['title' => 'Slide utama']);

    $this->getJson('/api/v1/home')
        ->assertOk()
        ->assertJsonPath('data.profile.name', $profile->name)
        ->assertJsonPath('data.categories.0.name', $category->name)
        ->assertJsonPath('data.featured_products.0.name', $product->name)
        ->assertJsonPath('data.latest_news.0.title', $news->title)
        ->assertJsonPath('data.carousels.0.title', 'Slide utama')
        ->assertJsonPath('data.stats.products', 1);
});

it('returns only active products with filters and pagination', function () {
    $category = Category::factory()->create();
    $active = Product::factory()->for($category)->create(['name' => 'Coating Aktif']);
    Product::factory()->for($category)->create(['name' => 'Coating Nonaktif', 'is_active' => false]);

    $this->getJson('/api/v1/products?category='.$category->id.'&q=Coating&per_page=5')
        ->assertOk()
        ->assertJsonPath('data.0.id', $active->id)
        ->assertJsonPath('data.0.name', 'Coating Aktif')
        ->assertJsonCount(1, 'data')
        ->assertJsonPath('meta.total', 1)
        ->assertJsonPath('meta.per_page', 5);
});

it('returns a product detail and rejects an inactive product', function () {
    $product = Product::factory()->create(['name' => 'TX-Corr Inhib 330']);

    $this->getJson('/api/v1/products/'.$product->id)
        ->assertOk()
        ->assertJsonPath('data.name', 'TX-Corr Inhib 330')
        ->assertJsonStructure([
            'data' => ['id', 'name', 'category' => ['id', 'name'], 'benefits', 'details', 'image_url'],
        ]);

    $product->update(['is_active' => false]);

    $this->getJson('/api/v1/products/'.$product->id)->assertNotFound();
});

it('returns categories with product counts', function () {
    $category = Category::factory()->create(['name' => 'Industrial Cleaner']);
    Product::factory()->for($category)->create();
    Product::factory()->for($category)->create(['is_active' => false]);

    $this->getJson('/api/v1/categories')
        ->assertOk()
        ->assertJsonPath('data.0.name', 'Industrial Cleaner')
        ->assertJsonPath('data.0.products_count', 1);

    $this->getJson('/api/v1/categories/'.$category->id)
        ->assertOk()
        ->assertJsonPath('data.products_count', 1);
});

it('hides draft news from the API', function () {
    $published = News::factory()->create(['title' => 'Terbit', 'published_at' => now()->subDay()]);
    News::factory()->draft()->create(['title' => 'Draf']);

    $this->getJson('/api/v1/news')
        ->assertOk()
        ->assertJsonCount(1, 'data')
        ->assertJsonPath('data.0.title', 'Terbit');

    $this->getJson('/api/v1/news/'.$published->id)
        ->assertOk()
        ->assertJsonPath('data.content', $published->content);

    $draft = News::factory()->draft()->create();

    $this->getJson('/api/v1/news/'.$draft->id)->assertNotFound();
});

it('stores a valid inquiry', function () {
    $product = Product::factory()->create();

    $payload = [
        'name' => 'SMA Negeri 1',
        'company' => 'SMA Negeri 1 Bandung',
        'email' => 'humas@example.test',
        'phone' => '081234567890',
        'product_id' => $product->id,
        'quantity' => 8,
        'subject' => 'Penawaran coating',
        'message' => 'Kami ingin meminta penawaran untuk protective coating.',
    ];

    $this->postJson('/api/v1/inquiries', $payload)
        ->assertCreated()
        ->assertJsonPath('data.status', 'new')
        ->assertJsonPath('data.product_id', $product->id)
        ->assertJsonPath('message', 'Terima kasih. Tim THORXup akan menghubungi Anda pada jam kerja.');

    $this->assertDatabaseHas('inquiries', [
        'email' => 'humas@example.test',
        'status' => 'new',
        'product_id' => $product->id,
    ]);
});

it('validates inquiry input', function () {
    $this->postJson('/api/v1/inquiries', [])
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['name', 'email', 'phone', 'subject', 'message']);

    expect(Inquiry::query()->count())->toBe(0);
});

it('does not persist honeypot submissions', function () {
    $this->postJson('/api/v1/inquiries', [
        'name' => 'Bot',
        'email' => 'bot@example.test',
        'phone' => '081234567890',
        'subject' => 'Spam',
        'message' => 'This is a spam message that is long enough to pass validation.',
        'website' => 'https://spam.example',
    ])->assertCreated();

    expect(Inquiry::query()->count())->toBe(0);
});
