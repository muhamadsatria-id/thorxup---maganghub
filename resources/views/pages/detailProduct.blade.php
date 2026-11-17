@extends('layouts.app')

@section('title', $product->name.' — '.config('app.name', 'THORXup'))
@section('meta_description', \Illuminate\Support\Str::limit(strip_tags($product->description ?? ''), 155))

@php
    $imageUrl = $product->imageUrl();
    $benefits = $product->benefitList();
    $details = $product->detailList();
    $inquiryUrl = $profileBrand?->whatsappUrl('Halo '.($profileBrand->name ?? 'THORXup').', saya ingin menanyakan spesifikasi '.$product->name.'.') ?? route('contact').'#kontak';
    $briefUrl = route('contact', ['product' => $product->id]).'#kontak';
@endphp

@section('content')
    <section class="hero-surface border-b border-line">
        <div class="container-page py-10 md:py-14">
            <nav aria-label="Breadcrumb" class="flex flex-wrap items-center gap-2 text-xs text-muted">
                <a href="{{ route('home') }}" class="hover:text-brand-700">Beranda</a>
                <span aria-hidden="true">/</span>
                <a href="{{ route('products') }}" class="hover:text-brand-700">Produk</a>
                @if ($product->category)
                    <span aria-hidden="true">/</span>
                    <a href="{{ route('categories.detail', $product->category) }}" class="hover:text-brand-700">{{ $product->category->name }}</a>
                @endif
                <span aria-hidden="true">/</span>
                <span class="text-brand-950">{{ $product->name }}</span>
            </nav>

            <div class="mt-8 grid gap-10 lg:grid-cols-[1.02fr_0.98fr] lg:items-center lg:gap-14">
                <div>
                    <p class="eyebrow text-brand-700">
                        <span class="rule"></span>
                        {{ $product->category?->name ?? 'Perlengkapan drumband' }}
                    </p>

                    <h1 class="mt-5 text-4xl leading-[1.05] font-semibold tracking-[-0.03em] text-brand-950 sm:text-5xl">
                        {{ $product->name }}
                    </h1>

                    @if ($product->description)
                        <p class="mt-5 max-w-xl text-base leading-7 text-muted">{{ $product->description }}</p>
                    @endif

                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="{{ $briefUrl }}" class="btn btn-primary">
                            Minta penawaran
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>

                        <a
                            href="{{ $inquiryUrl }}"
                            class="btn btn-outline"
                            @if ($profileBrand?->whatsapp) target="_blank" rel="noopener" @endif
                        >
                            Tanya via WhatsApp
                        </a>
                    </div>

                    <dl class="mt-9 grid gap-4 border-t border-line pt-6 sm:grid-cols-3">
                        <div>
                            <dt class="text-[0.62rem] font-semibold tracking-[0.16em] text-muted uppercase">Kategori</dt>
                            <dd class="mt-1 text-sm font-semibold text-brand-950">{{ $product->category?->name ?? 'Kustom' }}</dd>
                        </div>
                        <div>
                            <dt class="text-[0.62rem] font-semibold tracking-[0.16em] text-muted uppercase">Produksi</dt>
                            <dd class="mt-1 text-sm font-semibold text-brand-950">In-house Bandung</dd>
                        </div>
                        <div>
                            <dt class="text-[0.62rem] font-semibold tracking-[0.16em] text-muted uppercase">Kustom</dt>
                            <dd class="mt-1 text-sm font-semibold text-brand-950">Warna & emblem</dd>
                        </div>
                    </dl>
                </div>

                <div class="relative">
                    <div class="relative overflow-hidden rounded-panel border border-white bg-brand-950 shadow-panel">
                        @if ($imageUrl)
                            <img src="{{ $imageUrl }}" alt="{{ $product->name }}" class="h-[22rem] w-full object-cover sm:h-[28rem]">
                        @else
                            <div class="product-visual absolute inset-0" aria-hidden="true"></div>
                            <div class="rhythm-lines absolute inset-0" aria-hidden="true"></div>
                            <div class="relative flex h-[22rem] items-center justify-center sm:h-[28rem]">
                                <x-brand-mark class="h-32 w-32 opacity-25" />
                            </div>
                        @endif

                        <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-brand-950/80 via-transparent to-transparent" aria-hidden="true"></div>

                        <div class="absolute right-5 bottom-5 left-5 flex items-end justify-between gap-4">
                            <div>
                                <p class="text-[0.62rem] font-semibold tracking-[0.2em] text-brass-soft uppercase">THORXup</p>
                                <p class="mt-1 text-sm font-medium text-white">Diperiksa sebelum dikirim</p>
                            </div>
                            <span class="rounded-full border border-white/20 px-3 py-1 text-[0.62rem] tracking-[0.14em] text-brand-100 uppercase">QC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-14 md:py-20">
        <div class="container-page grid gap-10 lg:grid-cols-[1fr_21rem] lg:gap-14">
            <div class="space-y-10">
                @if ($benefits !== [])
                    <div>
                        <p class="eyebrow text-brand-700"><span class="rule"></span>Kenapa unit ini</p>
                        <h2 class="mt-4 text-2xl font-semibold tracking-tight text-brand-950">Dibuat untuk dipakai, bukan dipajang.</h2>

                        <ul class="mt-6 grid gap-4 sm:grid-cols-2">
                            @foreach ($benefits as $benefit)
                                <li class="flex gap-3 rounded-xl border border-line bg-white p-4 text-sm leading-6 text-ink/80">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand-600" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                        <path d="m4 10.5 3.5 3.5L16 5.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>{{ $benefit }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($details !== [])
                    <div>
                        <p class="eyebrow text-brand-700"><span class="rule"></span>Spesifikasi</p>
                        <h2 class="mt-4 text-2xl font-semibold tracking-tight text-brand-950">Detail teknis.</h2>

                        <dl class="mt-6 divide-y divide-line rounded-card border border-line bg-white">
                            @foreach ($details as $detail)
                                <div class="flex gap-4 px-5 py-4 text-sm">
                                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-brass"></span>
                                    <span class="leading-6 text-ink/80">{{ $detail }}</span>
                                </div>
                            @endforeach
                        </dl>
                    </div>
                @endif

                <div class="rounded-panel bg-brand-950 p-7 text-white sm:p-9">
                    <p class="text-lg font-semibold tracking-tight">Ingin melihat bahan dan warna langsung?</p>
                    <p class="mt-2 max-w-xl text-sm leading-6 text-brand-200">
                        Kirim brief singkat atau jadwalkan kunjungan workshop. Kami bisa menyiapkan sampel bahan dan opsi finishing yang sesuai dengan identitas tim.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ $briefUrl }}" class="btn btn-light">Kirim brief</a>
                        @if ($profileBrand?->maps_link)
                            <a href="{{ $profileBrand->maps_link }}" class="btn border border-white/20 text-white hover:bg-white/10" target="_blank" rel="noopener">Lihat lokasi</a>
                        @endif
                    </div>
                </div>
            </div>

            <aside class="space-y-6">
                <div class="rounded-card border border-line bg-white p-5 shadow-card">
                    <p class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Konsultasi cepat</p>
                    <p class="mt-2 text-sm leading-6 text-ink/80">Tanyakan stok, waktu produksi, atau opsi kustom untuk {{ $product->name }}.</p>
                    <a href="{{ $briefUrl }}" class="btn btn-primary mt-4 w-full">Minta penawaran</a>
                    @if ($profileBrand?->whatsapp)
                        <a href="{{ $inquiryUrl }}" class="btn btn-outline mt-2 w-full" target="_blank" rel="noopener">WhatsApp</a>
                    @endif
                </div>

                <div class="rounded-card border border-line bg-white p-5 shadow-card">
                    <p class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Butuh susunan tim?</p>
                    <p class="mt-2 text-sm leading-6 text-ink/80">Lihat kategori lain atau kirim daftar personel untuk rekomendasi menyeluruh.</p>
                    <a href="{{ route('categories') }}" class="link-arrow mt-4">Jelajahi kategori</a>
                </div>
            </aside>
        </div>
    </section>

    @if ($related->isNotEmpty())
        <section class="border-t border-line bg-white py-14 md:py-20">
            <div class="container-page">
                <div class="flex items-end justify-between gap-6">
                    <x-section-heading
                        eyebrow="Lengkapi barisan"
                        title="Produk yang sering dipilih bersama."
                    />
                    <a href="{{ route('products') }}" class="link-arrow shrink-0">Semua produk</a>
                </div>

                <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($related as $relatedProduct)
                        <x-product-card :product="$relatedProduct" :profile="$profileBrand" :index="$loop->iteration" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection

@push('head')
    @php
        $structuredData = array_filter([
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => $product->name,
            'description' => strip_tags($product->description ?? ''),
            'image' => $imageUrl,
            'category' => $product->category?->name,
            'brand' => ['@type' => 'Brand', 'name' => $profileBrand?->name ?? 'THORXup'],
            'url' => route('products.detail', $product),
        ]);
    @endphp
    <script type="application/ld+json">{!! json_encode($structuredData, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush
