@extends('layouts.app')

@section('title', $category->name.' — '.config('app.name', 'THORXup'))
@section('meta_description', \Illuminate\Support\Str::limit(strip_tags($category->description ?? ''), 155) ?: 'Kategori '.$category->name.' dari THORXup.')

@section('content')
    <x-page-hero
        eyebrow="Kategori produk"
        :title="$category->name"
        :description="$category->description"
    >
        <nav aria-label="Breadcrumb" class="mt-6 flex flex-wrap items-center gap-2 text-xs text-muted">
            <a href="{{ route('home') }}" class="hover:text-brand-700">Beranda</a>
            <span aria-hidden="true">/</span>
            <a href="{{ route('categories') }}" class="hover:text-brand-700">Kategori</a>
            <span aria-hidden="true">/</span>
            <span class="text-brand-950">{{ $category->name }}</span>
        </nav>
    </x-page-hero>

    <section class="py-12 md:py-16">
        <div class="container-page grid gap-10 lg:grid-cols-[1fr_19rem] lg:gap-14">
            <div>
                <div class="flex flex-wrap items-end justify-between gap-4 border-b border-line pb-4">
                    <p class="text-sm text-muted">
                        <span class="font-semibold text-brand-950">{{ $products->total() }}</span> produk dalam kategori ini
                    </p>
                    <a href="{{ route('products') }}" class="text-xs font-semibold text-brand-700 hover:text-brand-950">Lihat semua produk</a>
                </div>

                @if ($products->isNotEmpty())
                    <div class="mt-8 grid gap-5 sm:grid-cols-2">
                        @foreach ($products as $product)
                            <x-product-card
                                :product="$product"
                                :profile="$profileBrand"
                                :index="$loop->iteration"
                                class="reveal"
                                style="--reveal-delay: {{ min($loop->index, 5) * 50 }}ms"
                            />
                        @endforeach
                    </div>

                    <div class="mt-10">
                        {{ $products->links() }}
                    </div>
                @else
                    <div class="mt-8 rounded-panel border border-dashed border-brand-200 bg-white p-10 text-center">
                        <p class="text-lg font-semibold text-brand-950">Belum ada produk aktif.</p>
                        <p class="mt-2 text-sm text-muted">Kategori ini sedang diperbarui. Hubungi tim untuk ketersediaan terbaru.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary mt-6">Hubungi tim</a>
                    </div>
                @endif
            </div>

            <aside class="space-y-6">
                <div class="rounded-card border border-line bg-white p-5 shadow-card">
                    <p class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Butuh rekomendasi?</p>
                    <p class="mt-2 text-sm leading-6 text-ink/80">Ceritakan jumlah personel dan peran dalam formasi. Kami bantu pilih unit yang tepat.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-4 w-full">Konsultasi</a>
                </div>

                <div class="rounded-card border border-line bg-white p-5 shadow-card">
                    <p class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Kategori lain</p>
                    <a href="{{ route('categories') }}" class="link-arrow mt-3">Jelajahi semua kategori</a>
                </div>
            </aside>
        </div>
    </section>
@endsection
