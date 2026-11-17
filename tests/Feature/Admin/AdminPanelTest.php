<?php

use App\Filament\Resources\Products\Pages\CreateProduct;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Inquiry;
use App\Models\News;
use App\Models\Product;
use App\Models\ProfileBrand;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function () {
    $this->admin = User::factory()->create(['is_admin' => true]);

    $this->actingAs($this->admin);
});

it('renders the admin dashboard and its widgets', function () {
    Inquiry::factory()->create(['status' => 'new']);

    $this->get('/admin')
        ->assertOk()
        ->assertSee('THORXup')
        ->assertSee('Inquiry terbaru');
});

it('renders catalog admin screens', function () {
    $category = Category::factory()->create(['name' => 'Protective Coating']);
    $product = Product::factory()->for($category)->create(['name' => 'TX-Surface Prep 110']);

    $this->get('/admin/categories')->assertOk()->assertSee('Protective Coating');
    $this->get('/admin/categories/create')->assertOk();
    $this->get('/admin/categories/'.$category->id.'/edit')->assertOk()->assertSee('Protective Coating');

    $this->get('/admin/products')->assertOk()->assertSee('TX-Surface Prep 110');
    $this->get('/admin/products/create')->assertOk();
    $this->get('/admin/products/'.$product->id.'/edit')->assertOk()->assertSee('TX-Surface Prep 110');
});

it('renders content admin screens', function () {
    $carousel = Carousel::factory()->create(['title' => 'Slide utama']);
    $news = News::factory()->create(['title' => 'Berita utama']);

    $this->get('/admin/carousels')->assertOk()->assertSee('Slide utama');
    $this->get('/admin/carousels/create')->assertOk();
    $this->get('/admin/carousels/'.$carousel->id.'/edit')->assertOk()->assertSee('Slide utama');

    $this->get('/admin/news')->assertOk()->assertSee('Berita utama');
    $this->get('/admin/news/create')->assertOk();
    $this->get('/admin/news/'.$news->id)->assertOk()->assertSee('Berita utama');
    $this->get('/admin/news/'.$news->id.'/edit')->assertOk()->assertSee('Berita utama');
});

it('renders inquiry admin screens', function () {
    $inquiry = Inquiry::factory()->create([
        'name' => 'SMA Negeri 1',
        'subject' => 'Permintaan penawaran',
        'status' => 'new',
    ]);

    $this->get('/admin/inquiries')->assertOk()->assertSee('SMA Negeri 1');
    $this->get('/admin/inquiries/'.$inquiry->id)->assertOk()->assertSee('Permintaan penawaran');
    $this->get('/admin/inquiries/'.$inquiry->id.'/edit')->assertOk()->assertSee('SMA Negeri 1');
});

it('renders settings admin screens', function () {
    $profile = ProfileBrand::factory()->create(['name' => 'THORXup']);
    $user = User::factory()->create(['name' => 'Operator Konten']);

    $this->get('/admin/profile-brands')->assertOk()->assertSee('THORXup');
    $this->get('/admin/profile-brands/create')->assertOk();
    $this->get('/admin/profile-brands/'.$profile->id.'/edit')->assertOk()->assertSee('THORXup');

    $this->get('/admin/users')->assertOk()->assertSee('Operator Konten');
    $this->get('/admin/users/create')->assertOk();
    $this->get('/admin/users/'.$user->id.'/edit')->assertOk()->assertSee('Operator Konten');
});

it('creates a product through the admin form', function () {
    $category = Category::factory()->create();

    Livewire::test(CreateProduct::class)
        ->fillForm([
            'name' => 'Produk Baru',
            'category_id' => $category->id,
            'description' => 'Deskripsi produk baru.',
            'is_active' => true,
            'is_featured' => false,
            'sort_order' => 3,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $this->assertDatabaseHas('products', [
        'name' => 'Produk Baru',
        'category_id' => $category->id,
        'is_active' => true,
        'sort_order' => 3,
    ]);
});

it('blocks non administrators from the panel', function () {
    $user = User::factory()->create(['is_admin' => false]);

    $this->actingAs($user)
        ->get('/admin')
        ->assertForbidden();
});
