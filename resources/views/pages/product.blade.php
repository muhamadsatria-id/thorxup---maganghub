@extends('layouts.app')

@section('title', 'Produk — '.config('app.name', 'THORXup'))
@section('meta_description', 'Jelajahi snare, bass drum, tenor, cymbal, kostum, dan perlengkapan mayoret THORXup. Filter berdasarkan kategori atau cari produk tertentu.')

@section('content')
    <x-page-hero
        eyebrow="Katalog"
        title="Perlengkapan yang bekerja sebagai satu sistem."
        description="Pilih kategori, bandingkan spesifikasi, lalu konsultasikan kebutuhan tim Anda. Semua produk dapat disesuaikan dengan warna dan identitas sekolah atau komunitas."
    >
        <form action="{{ route('products') }}" method="GET" class="mt-8 flex max-w-2xl flex-col gap-3 sm:flex-row">
            @if ($categoryId)
                <input type="hidden" name="category" value="{{ $categoryId }}">
            @endif

            <label for="q" class="sr-only">Cari produk</label>
            <div class="relative flex-1">
                <svg class="pointer-events-none absolute top-1/2 left-4 h-4 w-4 -translate-y-1/2 text-muted" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <circle cx="8.5" cy="8.5" r="5.5" stroke="currentColor" stroke-width="1.5"/>
                    <path d="m13 13 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <input
                    id="q"
                    name="q"
                    type="search"
                    value="{{ $search }}"
                    placeholder="Cari snare, kostum, cymbal..."
                    class="w-full rounded-full border border-line bg-white py-3 pr-4 pl-11 text-sm text-ink shadow-sm outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-200"
                >
            </div>

            <button type="submit" class="btn btn-primary">Cari produk</button>
        </form>
    </x-page-hero>

    <section class="py-12 md:py-16">
        <div class="container-page">
            <div class="flex flex-wrap items-center gap-2" aria-label="Filter kategori">
                <a
                    href="{{ route('products', array_filter(['q' => $search])) }}"
                    @class([
                        'rounded-full border px-4 py-2 text-xs font-semibold transition',
                        'border-brand-600 bg-brand-600 text-white' => ! $categoryId,
                        'border-line bg-white text-muted hover:border-brand-300 hover:text-brand-800' => $categoryId,
                    ])
                >
                    Semua
                </a>

                @foreach ($categories as $category)
                    <a
                        href="{{ route('products', array_filter(['category' => $category->id, 'q' => $search])) }}"
                        @class([
                            'rounded-full border px-4 py-2 text-xs font-semibold transition',
                            'border-brand-600 bg-brand-600 text-white' => (int) $categoryId === $category->id,
                            'border-line bg-white text-muted hover:border-brand-300 hover:text-brand-800' => (int) $categoryId !== $category->id,
                        ])
                    >
                        {{ $category->name }}
                        <span class="ml-1 text-[0.65rem] opacity-70">{{ $category->products_count }}</span>
                    </a>
                @endforeach
            </div>

            <div class="mt-8 flex flex-wrap items-end justify-between gap-4 border-b border-line pb-4">
                <p class="text-sm text-muted">
                    Menampilkan <span class="font-semibold text-brand-950">{{ $products->total() }}</span> produk
                    @if ($search !== '')
                        untuk “{{ $search }}”
                    @endif
                </p>

                @if ($search !== '' || $categoryId)
                    <a href="{{ route('products') }}" class="text-xs font-semibold text-brand-700 hover:text-brand-950">Reset filter</a>
                @endif
            </div>

            @if ($products->isNotEmpty())
                <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($products as $product)
                        <x-product-card
                            :product="$product"
                            :profile="$profileBrand ?? null"
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
                <div class="mt-10 rounded-panel border border-dashed border-brand-200 bg-white p-10 text-center">
                    <p class="text-lg font-semibold text-brand-950">Produk tidak ditemukan.</p>
                    <p class="mt-2 text-sm text-muted">Coba kata kunci lain atau lihat semua kategori yang tersedia.</p>
                    <a href="{{ route('products') }}" class="btn btn-primary mt-6">Lihat semua produk</a>
                </div>
            @endif
        </div>
    </section>

    <section class="border-t border-line bg-white py-14">
        <div class="container-page flex flex-col items-start justify-between gap-5 rounded-panel bg-brand-950 p-8 text-white sm:flex-row sm:items-center">
            <div>
                <p class="text-lg font-semibold tracking-tight">Butuh susunan untuk satu tim penuh?</p>
                <p class="mt-1 text-sm text-brand-200">Kirim daftar personel dan formasi, kami bantu susun spesifikasinya.</p>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-light shrink-0">Konsultasi kebutuhan</a>
        </div>
    </section>
@endsection
