@extends('layouts.app')

@section('title', config('app.name', 'THORXup').' — Solusi Perawatan Permukaan Logam Industri')
@section('meta_description', 'Throx Up menghadirkan protective coating, surface treatment, corrosion inhibitor, dan pembersih permukaan industri untuk ketahanan maksimal pada logam.')

@php
    $brandName = trim($profile?->name ?? config('app.name', 'THORXup'));

    $heroSlides = $carousels->map(function ($slide) {
        return [
            'badge' => $slide->subtitle ?: 'Perawatan Logam Industri',
            'title' => $slide->title,
            'description' => $slide->description,
            'image' => $slide->imageUrl() ?: asset('images/hero.jpg'),
            'cta_label' => $slide->cta_label ?: 'Lihat Katalog',
            'cta_url' => $slide->ctaHref() ?: route('products'),
        ];
    })->values();

    if ($heroSlides->isEmpty()) {
        $heroSlides = collect([[
            'badge' => 'Perawatan Logam Industri',
            'title' => 'Perlindungan permukaan logam untuk industri yang menuntut.',
            'description' => 'Protective coating, surface treatment, corrosion inhibitor, dan pembersih permukaan industri untuk ketahanan jangka panjang terhadap korosi, gesekan, dan degradasi permukaan.',
            'image' => asset('images/hero.jpg'),
            'cta_label' => 'Lihat Katalog',
            'cta_url' => route('products'),
        ]]);
    }

    $categoryIcon = function (?string $name): string {
        $name = mb_strtolower((string) $name);

        return match (true) {
            str_contains($name, 'coating') => 'layers',
            str_contains($name, 'treatment') => 'gradient',
            str_contains($name, 'inhibitor') => 'shield',
            str_contains($name, 'cleaner') => 'cleaning_services',
            str_contains($name, 'reconditioning') => 'build',
            str_contains($name, 'maintenance') => 'engineering',
            default => 'science',
        };
    };

    $c1 = $categories->get(0);
    $c2 = $categories->get(1);
    $c3 = $categories->get(2);
    $c4 = $categories->get(3);
    $c5 = $categories->get(4);
    $c6 = $categories->get(5);

    $productCards = $products->map(function ($product) use ($categoryIcon) {
        return [
            'name' => $product->name,
            'category' => $product->category?->name ?? 'Perawatan Logam Industri',
            'url' => route('products.detail', $product),
            'image' => $product->imageUrl(),
            'icon' => $categoryIcon($product->category?->name),
        ];
    })->values();

    $newsCards = $news->map(function ($article) use ($brandName) {
        $plainText = trim(strip_tags((string) $article->content));
        $wordCount = str_word_count($plainText);
        $author = $article->author ?: $brandName;
        $initials = collect(preg_split('/\s+/', $author) ?: [])
            ->filter()
            ->take(2)
            ->map(fn (string $part): string => mb_strtoupper(mb_substr($part, 0, 1)))
            ->implode('');

        return [
            'title' => $article->title,
            'url' => route('news.detail', $article),
            'image' => $article->imageUrl() ?: asset('images/hero.jpg'),
            'date' => mb_strtoupper($article->published_at?->locale('id')->translatedFormat('d F Y') ?? '—'),
            'read_time' => max(1, (int) ceil($wordCount / 200)),
            'excerpt' => \Illuminate\Support\Str::limit($plainText, 180),
            'author' => $author,
            'initials' => $initials ?: 'TX',
        ];
    })->values();

    $missions = $profile?->missionList() ?? [];

    if ($missions === []) {
        $missions = [
            'Menghadirkan produk perawatan, perlindungan, dan rekondisi permukaan logam yang diformulasikan untuk ketahanan jangka panjang.',
            'Menyediakan protective coating, surface treatment, corrosion inhibitor, dan pembersih permukaan industri.',
            'Mendukung program perawatan preventif dan perlindungan aset mesin industri di seluruh Indonesia.',
        ];
    }

    $coreValues = $profile?->coreValueList() ?? [];
    $pillarMeta = [
        ['icon' => 'verified_user', 'description' => 'Setiap formulasi diuji untuk adhesi dan ketahanan sebelum didistribusikan.'],
        ['icon' => 'precision_manufacturing', 'description' => 'Kualitas setiap batch dijaga agar konsisten dari produksi pertama sampai pengiriman berikutnya.'],
        ['icon' => 'shield', 'description' => 'Dirancang untuk kondisi operasional yang paling menuntut di lantai produksi.'],
        ['icon' => 'handshake', 'description' => 'Pendampingan teknis dari evaluasi kebutuhan, aplikasi, sampai evaluasi hasil di lapangan.'],
    ];

    $pillars = collect($coreValues)->values()->map(function (string $value, int $index) use ($pillarMeta) {
        return [
            'title' => $value,
            'icon' => $pillarMeta[$index]['icon'] ?? 'verified_user',
            'description' => $pillarMeta[$index]['description'] ?? 'Nilai yang kami pegang di setiap tahap produksi dan layanan.',
        ];
    });

    if ($pillars->isEmpty()) {
        $pillars = collect([
            ['title' => 'Inovasi', 'icon' => 'verified_user', 'description' => 'Setiap formulasi diuji untuk adhesi dan ketahanan sebelum didistribusikan.'],
            ['title' => 'Ketahanan', 'icon' => 'precision_manufacturing', 'description' => 'Kualitas setiap batch dijaga agar konsisten dari produksi pertama sampai pengiriman berikutnya.'],
            ['title' => 'Presisi', 'icon' => 'shield', 'description' => 'Dirancang untuk kondisi operasional yang paling menuntut di lantai produksi.'],
            ['title' => 'Kolaborasi', 'icon' => 'handshake', 'description' => 'Pendampingan teknis dari evaluasi kebutuhan, aplikasi, sampai evaluasi hasil di lapangan.'],
        ]);
    }

    $stats = [
        ['value' => '100%', 'title' => 'Quality Control', 'description' => 'Diperiksa sebelum kirim'],
        ['value' => '10+', 'title' => 'Lini Produk', 'description' => 'Siap untuk kebutuhan industri'],
        ['value' => '48-Jam', 'title' => 'Respons Cepat', 'description' => 'Penawaran pada jam kerja'],
        ['value' => 'QC', 'title' => 'Standar Produksi', 'description' => 'Kontrol di setiap tahap'],
    ];

    $socialLinks = collect($profile?->socialLinks() ?? []);
    $marketplaceLinks = $socialLinks->keyBy('label');
    $marketplaces = collect([
        ['label' => 'Tokopedia', 'icon' => 'storefront', 'description' => 'Toko resmi • Produk perawatan logam'],
        ['label' => 'Shopee', 'icon' => 'shopping_bag', 'description' => 'Outlet resmi • Coating & inhibitor'],
        ['label' => 'TikTok Shop', 'icon' => 'play_circle', 'description' => 'Konsultasi live • Checkout langsung'],
        ['label' => 'Bukalapak', 'icon' => 'store', 'description' => 'Pengadaan instansi • Kebutuhan industri'],
        ['label' => 'Lazada', 'icon' => 'verified', 'description' => 'Distribusi resmi • Stok regional'],
    ])->map(function (array $marketplace) use ($marketplaceLinks) {
        $key = $marketplace['label'] === 'TikTok Shop' ? 'TikTok' : $marketplace['label'];

        return [
            ...$marketplace,
            'url' => $marketplaceLinks->get($key)['url'] ?? '#quote-inquiry',
        ];
    });

    $inputClass = 'w-full px-space-md py-space-sm rounded-2xl bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#3949ab] transition-all';
    $inputErrorClass = 'shadow-[0_0_0_2px_#e11d48]';
@endphp

@push('head')
<style>
    .reveal { opacity: 0; transition: opacity .7s cubic-bezier(.22,1,.36,1), transform .7s cubic-bezier(.22,1,.36,1); will-change: opacity, transform; }
    .reveal-left { transform: translateX(-50px); }
    .reveal-right { transform: translateX(50px); }
    .reveal-up { transform: translateY(30px); }
    .reveal.is-visible { opacity: 1; transform: translate(0,0); }
    .delay-100 { transition-delay: .1s; }
    .delay-200 { transition-delay: .2s; }
    .delay-300 { transition-delay: .3s; }
    @media (prefers-reduced-motion: reduce) {
        .reveal { opacity: 1; transform: none; transition: none; }
    }
</style>
@endpush
@section('content')
    <div class="flex flex-col w-full" style="overflow-x: clip;">
        {{-- 1. HERO CAROUSEL --}}
        <section
            class="relative w-full overflow-hidden bg-primary text-on-primary h-[640px] md:h-[680px] lg:h-[720px] flex items-center select-none cursor-grab active:cursor-grabbing"
            id="heroCarousel"
            aria-roledescription="carousel"
            aria-label="Sorotan {{ $brandName }}"
        >
            <div class="relative w-full h-full flex transition-transform duration-700 ease-out" id="carouselTrack" style="transform: translateX(0%);">
                @foreach ($heroSlides as $slide)
                    <div class="w-full flex-shrink-0 relative h-full flex flex-col justify-center items-center">
                        <div class="absolute inset-0 z-0">
                            <img
                                alt="{{ $slide['title'] }}"
                                class="w-full h-full object-cover object-center transform scale-105"
                                src="{{ $slide['image'] }}"
                                @if ($loop->first) fetchpriority="high" @else loading="lazy" @endif
                            >
                            <div class="absolute inset-0 bg-gradient-to-r from-primary/95 via-primary/90 to-primary/95"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-primary via-transparent to-primary/90"></div>
                            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px]"></div>
                        </div>

                        <div class="relative z-10 max-w-[1360px] mx-auto px-margin-mobile lg:px-margin pt-24 pb-space-xl w-full flex flex-col justify-center my-auto">
                            <div class="max-w-3xl my-auto py-space-xl text-center mx-auto">
                                <div class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-secondary-fixed text-label-spec uppercase tracking-widest font-bold mb-space-md">
                                    <span>{{ $slide['badge'] }}</span>
                                </div>

                                @if ($loop->first)
                                    <h1 class="font-display-hero text-display-hero-mobile md:text-display-hero text-on-primary tracking-tight font-extrabold leading-tight">
                                        {{ $slide['title'] }}
                                    </h1>
                                @else
                                    <h2 class="font-display-hero text-display-hero-mobile md:text-display-hero text-on-primary tracking-tight font-extrabold leading-tight">
                                        {{ $slide['title'] }}
                                    </h2>
                                @endif

                                <p class="mt-space-md font-body-lg text-body-lg text-on-primary-container max-w-2xl font-normal mx-auto leading-relaxed">
                                    {{ $slide['description'] }}
                                </p>

                                <div class="mt-space-xl flex flex-wrap items-center justify-center gap-space-md">
                                    <a class="inline-flex items-center gap-space-xs bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container font-label-lg text-label-lg px-space-xl py-space-sm rounded-full shadow-lg transition-all font-bold group" href="{{ $slide['cta_url'] }}">
                                        <span>{{ $slide['cta_label'] }}</span>
                                        <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                                    </a>
                                    <a class="inline-flex items-center gap-space-xs bg-surface-container-lowest/15 hover:bg-surface-container-lowest/25 text-on-primary border border-white/30 backdrop-blur-sm font-label-lg text-label-lg px-space-xl py-space-sm rounded-full transition-all font-bold" href="#quote-inquiry">
                                        <span>Minta Penawaran</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($heroSlides->count() > 1)
                <button aria-label="Slide Sebelumnya" class="absolute left-4 lg:left-8 top-1/2 -translate-y-1/2 z-20 w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-white/10 hover:bg-white/25 active:scale-95 text-on-primary backdrop-blur-md border border-white/25 shadow-xl transition-all flex items-center justify-center group" id="carouselPrevBtn" type="button">
                    <span class="material-symbols-outlined text-[28px] group-hover:-translate-x-0.5 transition-transform">chevron_left</span>
                </button>
                <button aria-label="Slide Berikutnya" class="absolute right-4 lg:right-8 top-1/2 -translate-y-1/2 z-20 w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-white/10 hover:bg-white/25 active:scale-95 text-on-primary backdrop-blur-md border border-white/25 shadow-xl transition-all flex items-center justify-center group" id="carouselNextBtn" type="button">
                    <span class="material-symbols-outlined text-[28px] group-hover:translate-x-0.5 transition-transform">chevron_right</span>
                </button>

                <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex items-center gap-space-sm">
                    @foreach ($heroSlides as $slide)
                        <button
                            aria-label="Slide {{ $loop->iteration }}"
                            class="carousel-dot transition-all duration-300 {{ $loop->first ? 'w-8 h-2.5 rounded-full bg-secondary-fixed shadow-md' : 'w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/70' }}"
                            data-slide-index="{{ $loop->index }}"
                            aria-current="{{ $loop->first ? 'true' : 'false' }}"
                            type="button"
                        ></button>
                    @endforeach
                </div>
            @endif
        </section>

        {{-- 2. CATEGORY SECTION --}}
        <section class="w-full bg-surface py-space-2xl border-b border-outline-variant/30" id="product-categories">
            <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
                <div class="w-16 h-1 bg-primary rounded-full mx-auto mb-space-lg"></div>

                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg mb-space-2xl">
                    <div class="flex flex-col gap-space-xs max-w-2xl">
                        <span class="font-label-spec text-label-spec uppercase tracking-wider text-secondary font-bold">- KATEGORI PRODUK</span>
                        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface font-extrabold tracking-tight">
                            Kategori Perawatan Logam Industri
                        </h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md text-left md:text-right">
                        Telusuri lini protective coating, surface treatment, corrosion inhibitor, dan pembersih permukaan industri yang dirancang untuk bekerja sebagai satu sistem.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-gutter auto-rows-[220px]">
                    {{-- Category 01: tall editorial card --}}
                    <a href="{{ $c1 ? route('categories.detail', $c1) : route('categories') }}" class="group relative lg:col-span-4 row-span-2 rounded-[3rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-space-lg bg-inverse-surface border border-outline-variant/30">
                        <img src="{{ asset('images/hero.jpg') }}" alt="{{ $c1?->name ?? 'Perawatan logam industri' }}" class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-black/20"></div>

                        <div class="relative z-10 flex items-center justify-between w-full">
                            <span class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white font-label-spec text-label-spec uppercase tracking-wider font-bold">
                                <span class="w-2 h-2 rounded-full bg-secondary-fixed"></span>
                                Lini Utama
                            </span>
                            <span class="material-symbols-outlined text-white text-[20px] opacity-80 group-hover:rotate-45 transition-transform">north_east</span>
                        </div>

                        <div class="relative z-10 flex items-end justify-between w-full pt-space-xl">
                            <div class="max-w-[70%]">
                                <span class="text-secondary-fixed text-label-spec uppercase tracking-widest font-semibold">Kategori 01</span>
                                <h3 class="font-headline-lg text-headline-lg text-white font-extrabold leading-tight mt-0.5">{{ $c1?->name ?? 'Protective Coating' }}</h3>
                                <p class="font-body-sm text-body-sm text-surface-container-highest mt-space-xs line-clamp-2 hidden sm:block">{{ $c1?->description ?? 'Lapisan pelindung untuk ketahanan korosi pada logam industri.' }}</p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white text-on-surface flex items-center justify-center shadow-lg group-hover:bg-primary group-hover:text-on-primary group-hover:scale-105 transition-all">
                                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>

                    {{-- Category 02: color block --}}
                    <a href="{{ $c2 ? route('categories.detail', $c2) : route('categories') }}" class="group relative lg:col-span-4 row-span-1 rounded-[3rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-space-lg bg-secondary-fixed border border-outline-variant/30 text-on-secondary-fixed">
                        <div class="flex items-center justify-between w-full">
                            <span class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-on-secondary-fixed/10 border border-on-secondary-fixed/15 text-on-secondary-fixed font-label-spec text-label-spec uppercase tracking-wider font-bold">Preparasi</span>
                            <span class="material-symbols-outlined text-on-secondary-fixed text-[20px]">settings</span>
                        </div>
                        <div class="flex items-end justify-between w-full mt-auto">
                            <div>
                                <span class="text-on-secondary-fixed-variant text-label-spec uppercase tracking-wider font-semibold">Kategori 02</span>
                                <h3 class="font-headline-md text-headline-md text-on-secondary-fixed font-extrabold leading-tight">{{ $c2?->name ?? 'Surface Treatment' }}</h3>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-on-secondary-fixed text-white flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>

                    {{-- Category 03: photographic card --}}
                    <a href="{{ $c3 ? route('categories.detail', $c3) : route('categories') }}" class="group relative lg:col-span-4 row-span-1 rounded-[3rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-space-lg bg-inverse-surface border border-outline-variant/30 text-white">
                        <img src="{{ asset('images/hero.jpg') }}" alt="{{ $c3?->name ?? 'Perawatan logam industri' }}" class="absolute inset-0 w-full h-full object-cover object-left transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/40 to-transparent"></div>
                        <div class="relative z-10 flex items-center justify-between w-full">
                            <span class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/25 text-white font-label-spec text-label-spec uppercase tracking-wider font-bold">Keandalan</span>
                            <span class="material-symbols-outlined text-white text-[20px]">build</span>
                        </div>
                        <div class="relative z-10 flex items-end justify-between w-full mt-auto">
                            <div>
                                <span class="text-secondary-fixed text-label-spec uppercase tracking-wider font-semibold">Kategori 03</span>
                                <h3 class="font-headline-md text-headline-md text-white font-bold leading-tight">{{ $c3?->name ?? 'Corrosion Inhibitor' }}</h3>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-white text-on-surface flex items-center justify-center shadow-md group-hover:bg-primary group-hover:text-on-primary group-hover:scale-105 transition-all">
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>

                    {{-- Category 04: tinted card --}}
                    <a href="{{ $c4 ? route('categories.detail', $c4) : route('categories') }}" class="group relative lg:col-span-4 row-span-1 rounded-[3rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-space-lg bg-surface-container-low border border-outline-variant/30 hover:bg-surface-container">
                        <div class="flex items-center justify-between w-full">
                            <span class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-primary/10 border border-primary/20 text-primary font-label-spec text-label-spec uppercase tracking-wider font-bold">Adhesi</span>
                            <span class="material-symbols-outlined text-outline text-[20px]">height</span>
                        </div>
                        <div class="flex items-end justify-between w-full mt-auto">
                            <div>
                                <span class="text-outline text-label-spec uppercase tracking-wider font-semibold">Kategori 04</span>
                                <h3 class="font-headline-md text-headline-md text-primary font-extrabold leading-tight">{{ $c4?->name ?? 'Industrial Cleaner' }}</h3>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-md group-hover:bg-primary-container group-hover:scale-105 transition-all">
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>

                    {{-- Category 05: photographic card --}}
                    <a href="{{ $c5 ? route('categories.detail', $c5) : route('categories') }}" class="group relative lg:col-span-4 row-span-1 rounded-[3rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-space-lg bg-inverse-surface border border-outline-variant/30 text-white">
                        <img src="{{ asset('images/hero.jpg') }}" alt="{{ $c5?->name ?? 'Perawatan logam industri' }}" class="absolute inset-0 w-full h-full object-cover object-right transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/40 to-transparent"></div>
                        <div class="relative z-10 flex items-center justify-between w-full">
                            <span class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/25 text-white font-label-spec text-label-spec uppercase tracking-wider font-bold">Daya Tahan</span>
                            <span class="material-symbols-outlined text-white text-[20px]">hardware</span>
                        </div>
                        <div class="relative z-10 flex items-end justify-between w-full mt-auto">
                            <div>
                                <span class="text-secondary-fixed text-label-spec uppercase tracking-wider font-semibold">Kategori 05</span>
                                <h3 class="font-headline-md text-headline-md text-white font-bold leading-tight">{{ $c5?->name ?? 'Metal Reconditioning' }}</h3>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-white text-on-surface flex items-center justify-center shadow-md group-hover:bg-primary group-hover:text-on-primary group-hover:scale-105 transition-all">
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>

                    {{-- Category 06: wide photographic card --}}
                    <a href="{{ $c6 ? route('categories.detail', $c6) : route('categories') }}" class="group relative lg:col-span-7 row-span-1 rounded-[3rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-space-lg bg-inverse-surface border border-outline-variant/30 text-white">
                        <img src="{{ asset('images/hero.jpg') }}" alt="{{ $c6?->name ?? 'Perawatan logam industri' }}" class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/60 to-black/30"></div>
                        <div class="relative z-10 flex items-center justify-between w-full">
                            <span class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/25 text-white font-label-spec text-label-spec uppercase tracking-wider font-bold">Signature</span>
                            <span class="material-symbols-outlined text-white text-[20px]">speed</span>
                        </div>
                        <div class="relative z-10 flex items-end justify-between w-full mt-auto">
                            <div class="max-w-md">
                                <span class="text-secondary-fixed text-label-spec uppercase tracking-wider font-semibold">Kategori 06</span>
                                <h3 class="font-headline-md text-headline-md text-white font-bold leading-tight">{{ $c6?->name ?? 'Maintenance Support' }}</h3>
                            </div>
                            <div class="w-11 h-11 rounded-full bg-white text-on-surface flex items-center justify-center shadow-md group-hover:bg-primary group-hover:text-on-primary group-hover:scale-105 transition-all">
                                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>

                    {{-- Category 07: accent CTA card --}}
                    <a href="{{ route('categories') }}" class="group relative lg:col-span-5 row-span-1 rounded-[3rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-space-lg bg-primary-container text-on-primary border border-primary-container">
                        <div class="flex items-center justify-between w-full">
                            <span class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/20 text-white font-label-spec text-label-spec uppercase tracking-wider font-bold">Katalog</span>
                            <span class="material-symbols-outlined text-on-primary text-[20px]">science</span>
                        </div>
                        <div class="flex items-end justify-between w-full mt-auto">
                            <div>
                                <span class="text-primary-fixed-dim text-label-spec uppercase tracking-wider font-semibold">Kategori 07</span>
                                <h3 class="font-headline-md text-headline-md text-on-primary font-bold leading-tight">Semua Kategori</h3>
                            </div>
                            <div class="w-11 h-11 rounded-full bg-white text-primary flex items-center justify-center shadow-md group-hover:bg-secondary-fixed group-hover:text-on-secondary-fixed group-hover:scale-105 transition-all">
                                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- 3. PRODUCT SHOWCASE --}}
        <section class="w-full bg-surface-container-low pb-space-2xl pt-space-2xl" id="inventory-showcase">
            <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
                <div class="w-16 h-1 bg-primary rounded-full mx-auto mb-space-lg"></div>

                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg mb-space-xl">
                    <div class="flex flex-col gap-space-xs">
                        <span class="font-label-spec text-label-spec uppercase tracking-wider text-secondary font-bold">- KOLEKSI PRODUK</span>
                        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface font-extrabold tracking-tight">Produk Perawatan Logam Terbaru</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md text-left md:text-right">
                        Formulasi kimia permukaan yang siap mendukung program perawatan preventif dan perlindungan aset mesin industri Anda.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                    @forelse ($productCards as $product)
                        <div class="bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group rounded-[2px]">
                            <div class="relative h-52 bg-surface-container overflow-hidden">
                                @if ($product['image'])
                                    <img alt="{{ $product['name'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ $product['image'] }}" loading="lazy">
                                @else
                                    <div class="absolute inset-0 bg-[linear-gradient(140deg,#1b234d_0%,#101530_62%,#232c63_100%)]"></div>
                                    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px]"></div>
                                    <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-[150px] leading-none text-white/10">{{ $product['icon'] }}</span>
                                    <span class="absolute left-5 top-5 font-label-spec text-label-spec uppercase tracking-widest text-secondary-fixed/80">THORXup</span>
                                @endif
                            </div>
                            <div class="p-space-lg flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="font-label-spec text-label-spec uppercase text-secondary font-semibold tracking-wider">{{ $product['category'] }}</span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1">{{ $product['name'] }}</h3>
                                </div>
                                <div class="mt-space-lg pt-space-xs">
                                    <a class="inline-flex items-center gap-1 font-label-lg text-label-lg text-primary hover:text-primary-container font-bold transition-colors group-hover:translate-x-1 duration-200" href="{{ $product['url'] }}">
                                        <span>Lihat Detail</span>
                                        <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="md:col-span-2 lg:col-span-4 bg-surface-container-lowest rounded-2xl p-space-xl text-center shadow-sm">
                            <p class="font-headline-sm text-headline-sm text-on-surface font-bold">Katalog sedang disiapkan.</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Hubungi tim kami untuk melihat stok dan opsi kustom yang tersedia.</p>
                            <a href="{{ route('contact') }}" class="inline-flex items-center gap-space-sm bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg px-space-2xl py-space-sm rounded-full shadow-md hover:shadow-lg transition-all group tracking-wide mt-space-lg">
                                <span>Hubungi Tim</span>
                                <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    @endforelse
                </div>

                <div class="mt-space-2xl text-center flex justify-center">
                    <a class="inline-flex items-center gap-space-sm bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg px-space-2xl py-space-sm rounded-full shadow-md hover:shadow-lg transition-all group tracking-wide" href="{{ route('products') }}">
                        <span>Lihat Semua</span>
                        <span class="font-bold tracking-tighter text-[16px] group-hover:translate-x-1 transition-transform">&gt;</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- 4. STATEMENT + METRICS --}}
        <section class="w-full py-space-2xl bg-on-secondary-fixed text-on-primary relative overflow-hidden">
            <div class="absolute right-0 top-0 w-96 h-96 bg-primary-container/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute left-10 bottom-0 w-72 h-72 bg-secondary/15 rounded-full blur-2xl pointer-events-none"></div>

            <div class="relative z-10 max-w-[1360px] mx-auto px-margin-mobile lg:px-margin justify-center">
                <div class="max-w-4xl mx-auto text-center flex flex-col items-center">
                    <div class="w-12 h-1 bg-secondary-container rounded-full mb-space-lg"></div>
                    <blockquote class="font-display-hero text-headline-lg-mobile md:text-headline-lg text-on-primary font-extrabold leading-snug tracking-tight">
                        “Dibangun untuk Ketahanan Tanpa Kompromi. Saat produksi menuntut konsistensi dan degradasi permukaan tidak bisa diabaikan, Throx Up menyiapkan formulasi yang melindungi aset mesin Anda.”
                    </blockquote>
                    <p class="font-body-md text-body-md text-secondary-fixed-dim mt-space-md max-w-xl">
                        Setiap produk melewati pemeriksaan formulasi, adhesi, dan ketahanan sebelum sampai ke fasilitas Anda.
                    </p>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-gutter mt-space-2xl pt-space-xl bg-primary/40 backdrop-blur-sm p-space-lg rounded-[2rem]">
                    @foreach ($stats as $stat)
                        <div class="flex flex-col items-center text-center p-space-sm">
                            <span class="font-display-hero text-headline-lg md:text-display-hero text-secondary-fixed font-black">{{ $stat['value'] }}</span>
                            <span class="font-label-lg text-label-lg text-on-primary font-semibold mt-1">{{ $stat['title'] }}</span>
                            <span class="font-body-sm text-body-sm text-secondary-fixed-dim">{{ $stat['description'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- 5. LATEST NEWS --}}
        <section class="w-full py-space-2xl bg-surface" id="berita">
            <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
                <div class="w-16 h-1 bg-primary rounded-full mx-auto mb-space-lg"></div>

                <div class="flex items-center justify-between mb-space-2xl">
                    <div class="flex flex-col gap-space-xs">
                        <span class="font-label-spec text-label-spec text-primary tracking-widest uppercase font-bold">KABAR INDUSTRI • INSIGHT</span>
                        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface font-extrabold tracking-tight">Berita &amp; Insight Terbaru</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md text-left md:text-right hidden sm:block">
                        Catatan dari lantai produksi, tips perawatan permukaan, dan insight untuk tim maintenance industri.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                    @forelse ($newsCards as $article)
                        <article class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                            <div class="relative h-48 overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" alt="{{ $article['title'] }}" src="{{ $article['image'] }}" loading="lazy">
                            </div>
                            <div class="p-space-lg flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-space-sm text-outline font-label-spec text-label-spec mb-space-xs">
                                        <span>{{ $article['date'] }}</span>
                                        <span>•</span>
                                        <span>{{ $article['read_time'] }} MENIT BACA</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold leading-snug">{{ $article['title'] }}</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm line-clamp-3">{{ $article['excerpt'] }}</p>
                                </div>
                                <div class="mt-space-lg pt-space-sm flex items-center justify-between">
                                    <div class="flex items-center gap-space-xs">
                                        <span class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-spec text-label-spec">{{ $article['initials'] }}</span>
                                        <span class="font-body-sm text-body-sm text-on-surface font-medium">{{ $article['author'] }}</span>
                                    </div>
                                    <a class="font-label-lg text-label-lg text-primary hover:text-primary-container font-bold flex items-center gap-0.5" href="{{ $article['url'] }}">
                                        <span>Baca Artikel</span>
                                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="md:col-span-3 rounded-2xl bg-surface-container-lowest p-space-xl text-center shadow-sm">
                            <p class="font-headline-sm text-headline-sm text-on-surface font-bold">Belum ada kabar baru.</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Ikuti update produk dan tips perawatan permukaan logam dari tim kami.</p>
                        </div>
                    @endforelse
                </div>

                <div class="mt-space-2xl text-center flex justify-center">
                    <a class="inline-flex items-center gap-space-sm bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg px-space-2xl py-space-sm rounded-full shadow-md hover:shadow-lg transition-all group tracking-wide" href="{{ route('news') }}">
                        <span>Baca Semua Artikel &amp; Insight</span>
                        <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- 6. ABOUT / VISION / MISSION / CORE VALUES --}}
        <section class="w-full bg-surface-container-low pb-space-2xl pt-space-2xl">
            <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg mb-space-2xl">
                    <div class="flex flex-col gap-space-xs max-w-2xl">
                        <span class="font-label-spec text-label-spec text-primary tracking-widest uppercase font-bold">TENTANG THORXUP</span>
                        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface font-extrabold tracking-tight">Membangun Fondasi Perlindungan Logam Industri</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                        Bersama PT Trit Indonesia, {{ $brandName }} menghadirkan produk perawatan dan perlindungan permukaan logam untuk kebutuhan industri manufaktur dan pemeliharaan mesin di seluruh Indonesia.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter mb-space-xl items-stretch">
                    <div class="bg-primary p-space-xl rounded-[2rem] shadow-md flex flex-col justify-between text-left text-on-primary">
                        <div class="flex flex-col gap-space-md">
                            <div class="w-12 h-1 bg-secondary-fixed rounded-full"></div>
                            <h3 class="font-headline-md text-headline-md text-on-primary font-extrabold">Visi Kami</h3>
                            <blockquote class="font-body-lg text-body-lg text-secondary-fixed-dim leading-relaxed font-medium italic mt-space-sm">
                                “{{ $profile?->vision ?: 'Menjadi mitra tepercaya bagi industri manufaktur dan pemeliharaan mesin di Indonesia melalui solusi kimia permukaan logam yang inovatif, andal, dan berkelanjutan.' }}”
                            </blockquote>
                        </div>
                        <div class="mt-space-xl pt-space-md border-t border-primary-container flex items-center gap-space-sm text-secondary-fixed-dim font-label-spec text-label-spec uppercase tracking-wider font-semibold">
                            <span class="material-symbols-outlined text-[20px] text-secondary-fixed">visibility</span>
                            <span class="text-secondary-fixed">Fokus jangka panjang &amp; komitmen</span>
                        </div>
                    </div>

                    <div class="bg-surface-container-lowest p-space-xl rounded-[2rem] shadow-sm border border-outline-variant/30 flex flex-col justify-between">
                        <div class="flex flex-col gap-space-md">
                            <div>
                                <div class="w-12 h-1 bg-primary rounded-full mb-space-sm"></div>
                                <h3 class="font-headline-md text-headline-md text-primary font-extrabold">Misi Kami</h3>
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                @foreach ($missions as $mission)
                                    <div class="py-space-sm {{ $loop->last ? '' : 'border-b border-outline-variant/30' }} flex flex-row items-center gap-space-md group">
                                        <span class="font-headline-md text-headline-md font-black text-primary shrink-0 select-none">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                        <p class="font-body-sm text-body-sm text-on-surface font-medium leading-snug flex-1">{{ $mission }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-space-2xl">
                    <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-space-lg text-center md:text-left">Pilar Nilai Inti</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
                        @foreach ($pillars as $pillar)
                            <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm">
                                <div class="text-primary mb-space-sm">
                                    <span class="material-symbols-outlined text-[32px]">{{ $pillar['icon'] }}</span>
                                </div>
                                <h5 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-space-xs">{{ $pillar['title'] }}</h5>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $pillar['description'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- 7. CONTACT & RFQ --}}
        <section class="w-full py-space-2xl bg-surface" id="quote-inquiry">
            <span id="kontak" class="sr-only"></span>
            <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
                <div class="w-16 h-1 bg-primary rounded-full mx-auto mb-space-lg"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                    <div class="lg:col-span-5 flex flex-col justify-between bg-primary text-on-primary p-space-xl rounded-[2rem] shadow-md">
                        <div>
                            <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-primary font-extrabold tracking-tight">Dapatkan Penawaran Solusi Perawatan Logam</h2>
                            <p class="font-body-md text-body-md text-on-primary-container mt-space-sm">
                                Apakah Anda membutuhkan protective coating, corrosion inhibitor, atau formulasi surface treatment untuk fasilitas Anda, tim kami akan membantu menyusun spesifikasi dan estimasi yang sesuai.
                            </p>

                            <div class="mt-space-xl flex flex-col gap-space-lg">
                                <div class="flex items-start gap-space-md">
                                    <div class="text-secondary-fixed shrink-0 pt-0.5">
                                        <span class="material-symbols-outlined text-[24px]">location_on</span>
                                    </div>
                                    <div>
                                        <h4 class="font-label-lg text-label-lg text-on-primary font-bold">Kantor Pusat</h4>
                                        <p class="font-body-sm text-body-sm text-on-primary-container mt-0.5">
                                            {!! nl2br(e($profile?->alamat ?? 'Jl. Cigondewah Kaler No. 24, Bandung, Jawa Barat 40214')) !!}
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-space-md">
                                    <div class="text-secondary-fixed shrink-0 pt-0.5">
                                        <span class="material-symbols-outlined text-[24px]">call</span>
                                    </div>
                                    <div>
                                        <h4 class="font-label-lg text-label-lg text-on-primary font-bold">Hotline Teknis</h4>
                                        <p class="font-body-sm text-body-sm text-on-primary-container mt-0.5">
                                            @if ($profile?->phone)
                                                <a href="{{ $profile->phoneUrl() }}" class="hover:text-on-primary transition-colors">{{ $profile->phone }}</a>
                                            @else
                                                Hubungi kami melalui formulir di samping
                                            @endif
                                            <span class="text-on-primary-container/70">•</span>
                                            Senin–Sabtu
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-space-md">
                                    <div class="text-secondary-fixed shrink-0 pt-0.5">
                                        <span class="material-symbols-outlined text-[24px]">mail</span>
                                    </div>
                                    <div>
                                        <h4 class="font-label-lg text-label-lg text-on-primary font-bold">Email Penawaran</h4>
                                        <p class="font-body-sm text-body-sm text-on-primary-container mt-0.5">
                                            @if ($profile?->email)
                                                <a href="mailto:{{ $profile->email }}" class="hover:text-on-primary transition-colors">{{ $profile->email }}</a>
                                            @else
                                                Tim kami akan membalas melalui email
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-space-md">
                                    <div class="text-secondary-fixed shrink-0 pt-0.5">
                                        <span class="material-symbols-outlined text-[24px]">schedule</span>
                                    </div>
                                    <div>
                                        <h4 class="font-label-lg text-label-lg text-on-primary font-bold">Jam Operasional</h4>
                                        <p class="font-body-sm text-body-sm text-on-primary-container mt-0.5">
                                            Senin – Sabtu: 08.00 – 17.00 WIB<br>
                                            Konsultasi daring: sesuai jadwal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 bg-surface-container-lowest p-space-xl rounded-[2rem] shadow-md flex flex-col justify-between">
                        <form class="flex flex-col gap-space-md" id="rfq-form" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="hidden" aria-hidden="true">
                                <label for="website">Website</label>
                                <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="flex items-center justify-between pb-space-xs">
                                <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Minta Penawaran Resmi</h3>
                            </div>

                            @if ($errors->any())
                                <div class="rounded-2xl border border-rose-200 bg-rose-50 p-4 font-body-sm text-body-sm text-rose-700" role="alert">
                                    Ada beberapa kolom yang perlu diperiksa kembali.
                                </div>
                            @endif

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-sm text-label-sm text-on-surface font-semibold" for="contact-name">Nama Lengkap *</label>
                                    <input
                                        class="w-full px-space-md py-space-sm rounded-2xl bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#3949ab] transition-all @error('name') shadow-[0_0_0_2px_#e11d48] @enderror"
                                        id="contact-name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Contoh: Rani Kusuma"
                                        required
                                        autocomplete="name"
                                        type="text"
                                    >
                                    @error('name')
                                        <p class="font-label-spec text-label-spec text-rose-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-sm text-label-sm text-on-surface font-semibold" for="contact-email">Email Aktif *</label>
                                    <input
                                        class="w-full px-space-md py-space-sm rounded-2xl bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#3949ab] transition-all @error('email') shadow-[0_0_0_2px_#e11d48] @enderror"
                                        id="contact-email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Contoh: rani@perusahaan.id"
                                        required
                                        autocomplete="email"
                                        type="email"
                                    >
                                    @error('email')
                                        <p class="font-label-spec text-label-spec text-rose-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-sm text-label-sm text-on-surface font-semibold" for="contact-phone">Nomor Telepon / WhatsApp *</label>
                                    <input
                                        class="w-full px-space-md py-space-sm rounded-2xl bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#3949ab] transition-all @error('phone') shadow-[0_0_0_2px_#e11d48] @enderror"
                                        id="contact-phone"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        placeholder="Contoh: 0812 3456 7890"
                                        required
                                        autocomplete="tel"
                                        type="tel"
                                    >
                                    @error('phone')
                                        <p class="font-label-spec text-label-spec text-rose-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-sm text-label-sm text-on-surface font-semibold" for="contact-company">Nama Perusahaan / Instansi</label>
                                    <input
                                        class="w-full px-space-md py-space-sm rounded-2xl bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#3949ab] transition-all @error('company') shadow-[0_0_0_2px_#e11d48] @enderror"
                                        id="contact-company"
                                        name="company"
                                        value="{{ old('company') }}"
                                        placeholder="Contoh: PT Nusantara Manufacturing"
                                        autocomplete="organization"
                                        type="text"
                                    >
                                    @error('company')
                                        <p class="font-label-spec text-label-spec text-rose-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface font-semibold" for="contact-subject">Topik / Kebutuhan *</label>
                                <input
                                    class="w-full px-space-md py-space-sm rounded-2xl bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#3949ab] transition-all @error('subject') shadow-[0_0_0_2px_#e11d48] @enderror"
                                    id="contact-subject"
                                    name="subject"
                                    value="{{ old('subject') }}"
                                    placeholder="Contoh: Penawaran protective coating untuk lini produksi"
                                    required
                                    type="text"
                                >
                                @error('subject')
                                    <p class="font-label-spec text-label-spec text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface font-semibold" for="contact-message">Spesifikasi / Kebutuhan Fasilitas *</label>
                                <textarea
                                    class="w-full px-space-md py-space-sm rounded-2xl bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#3949ab] transition-all @error('message') shadow-[0_0_0_2px_#e11d48] @enderror"
                                    id="contact-message"
                                    name="message"
                                    placeholder="Ceritakan jenis logam, kondisi operasional, dan tantangan degradasi permukaan yang Anda hadapi."
                                    required
                                    rows="4"
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="font-label-spec text-label-spec text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pt-space-sm flex flex-col sm:flex-row items-center justify-between gap-space-md">
                                <span class="font-label-spec text-label-spec text-outline">Rata-rata respons: &lt; 120 menit pada jam kerja</span>
                                <button class="w-full sm:w-auto bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg px-space-xl py-space-sm rounded-full shadow-md transition-all flex items-center justify-center gap-space-xs" type="submit">
                                    <span>Kirim Pesan</span>
                                    <span class="material-symbols-outlined text-[18px]">send</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        {{-- 8. MARKETPLACE / CONNECT --}}
        <section class="w-full py-space-2xl bg-surface-container-lowest border-t border-outline-variant/30">
            <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
                <div class="w-16 h-1 bg-primary rounded-full mx-auto mb-space-lg"></div>

                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg mb-space-2xl">
                    <div class="flex flex-col gap-space-xs max-w-2xl">
                        <span class="font-label-spec text-label-spec text-primary tracking-widest uppercase font-bold">SALURAN RESMI &amp; E-COMMERCE</span>
                        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface font-extrabold tracking-tight">Terhubung Dengan Kami</h2>
                    </div>
                    <div class="flex items-center gap-space-md">
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-md hidden md:block">
                            Temukan produk resmi {{ $brandName }} dan ikuti pembaruan formulasi melalui kanal resmi kami.
                        </p>
                        <div class="flex items-center gap-space-xs shrink-0">
                            <button aria-label="Slide Sebelumnya" class="w-12 h-12 rounded-full border border-outline-variant/30 bg-surface-container-lowest text-primary hover:bg-primary hover:text-on-primary transition-all duration-300 flex items-center justify-center shadow-sm" id="slideLeftBtn" type="button" onclick="const el=document.getElementById('connect-cards-track'); if(el) el.scrollBy({left: -380, behavior: 'smooth'});">
                                <span class="material-symbols-outlined text-[20px]">arrow_back</span>
                            </button>
                            <button aria-label="Slide Berikutnya" class="w-12 h-12 rounded-full border border-outline-variant/30 bg-surface-container-lowest text-primary hover:bg-primary hover:text-on-primary transition-all duration-300 flex items-center justify-center shadow-sm" id="slideRightBtn" type="button" onclick="const el=document.getElementById('connect-cards-track'); if(el) el.scrollBy({left: 380, behavior: 'smooth'});">
                                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex gap-space-lg overflow-x-auto scroll-smooth py-space-xs snap-x snap-mandatory [scrollbar-width:none] scrollbar-hide" id="connect-cards-track">
                    @foreach ($marketplaces as $marketplace)
                        @php($activeDot = $loop->index % 3)
                        <div class="min-w-[320px] max-w-[340px] md:min-w-[350px] bg-surface-container-low rounded-[2rem] p-space-xl flex flex-col justify-between shadow-sm border border-outline-variant/30 min-h-[340px] snap-start shrink-0 group hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between">
                                <span class="font-label-spec text-label-spec text-primary tracking-widest uppercase font-bold">Platform</span>
                                <span class="material-symbols-outlined text-outline text-[20px]">{{ $marketplace['icon'] }}</span>
                            </div>
                            <div class="my-auto py-space-md text-left">
                                <h3 class="font-headline-lg text-headline-lg text-primary font-extrabold tracking-tight">{{ $marketplace['label'] }}</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">{{ $marketplace['description'] }}</p>
                            </div>
                            <div class="flex items-center justify-between pt-space-md border-t border-outline-variant/30">
                                <div class="flex items-center gap-space-xs">
                                    @foreach ([0, 1, 2] as $dot)
                                        <span class="w-2 h-2 rounded-full {{ $dot === $activeDot ? 'bg-primary' : 'bg-outline-variant/50' }}"></span>
                                    @endforeach
                                </div>
                                <a
                                    aria-label="Buka {{ $marketplace['label'] }}"
                                    class="w-12 h-12 rounded-2xl bg-primary text-on-primary flex items-center justify-center shadow-md transition-all duration-300 group-hover:scale-105 group-hover:bg-primary-container border-none"
                                    href="{{ $marketplace['url'] }}"
                                    @if (str_starts_with($marketplace['url'], 'http')) target="_blank" rel="noopener noreferrer" @endif
                                >
                                    <span class="material-symbols-outlined text-[22px]">south_east</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <script>
        (function () {
            document.addEventListener('DOMContentLoaded', function () {
                var sections = document.querySelectorAll('main section');
                sections.forEach(function (el, i) {
                    if (i === 0) { return; } // hero: no animation
                    el.classList.add('reveal');
                    el.classList.add(i % 2 === 0 ? 'reveal-left' : 'reveal-right');
                });
                if (!('IntersectionObserver' in window)) {
                    sections.forEach(function (el) { el.classList.add('is-visible'); });
                    return;
                }
                var io = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            io.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15 });
                sections.forEach(function (el) { io.observe(el); });
            });
        })();
    </script>
@endsection

@push('head')
    @if ($profile)
        @php($structuredData = array_filter([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => $profile->name,
            'url' => route('home'),
            'email' => $profile->email,
            'telephone' => $profile->phone,
            'address' => $profile->alamat,
        ]))

        <script type="application/ld+json">{!! json_encode($structuredData, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif
@endpush
