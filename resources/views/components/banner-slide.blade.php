@props(['slide', 'profile' => null, 'index' => 1, 'total' => 1])

@php
    $brandName = $profile?->name ?? config('app.name', 'THORXup');
    $imageUrl = $slide->imageUrl();
    $ctaHref = $slide->ctaHref() ?? route('products');
    $whatsappUrl = $profile?->whatsappUrl('Halo '.$brandName.', saya ingin konsultasi perawatan permukaan logam industri.') ?? route('contact').'#kontak';
    $indexLabel = str_pad((string) $index, 2, '0', STR_PAD_LEFT);
@endphp

<div
    data-slide
    class="{{ $index > 1 ? 'hidden' : '' }}"
    role="group"
    aria-roledescription="slide"
    aria-label="{{ $index }} dari {{ $total }}"
>
    <div class="container-page grid items-center gap-12 py-12 md:py-16 lg:grid-cols-[1.03fr_0.97fr] lg:gap-16">
        <div class="hero-copy max-w-xl">
            <p class="eyebrow text-brand-700">
                <span class="rule"></span>
                {{ $slide->subtitle ?? 'Perawatan logam industri' }}
            </p>

            <h1 class="mt-6 text-[2.45rem] leading-[1.04] font-semibold tracking-[-0.035em] text-brand-950 sm:text-5xl lg:text-[3.35rem]">
                {{ $slide->title }}
            </h1>

            @if ($slide->description)
                <p class="mt-6 max-w-lg text-base leading-7 text-muted">
                    {{ $slide->description }}
                </p>
            @endif

            <div class="mt-8 flex flex-wrap items-center gap-3">
                <a href="{{ $ctaHref }}" class="btn btn-primary">
                    {{ $slide->cta_label ?? 'Lihat katalog' }}
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <a
                    href="{{ $whatsappUrl }}"
                    class="btn btn-outline"
                    @if ($whatsappUrl !== route('contact').'#kontak') target="_blank" rel="noopener" @endif
                >
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10 2.5a7.4 7.4 0 0 0-6.4 11.1L2.5 17.5l4-1.1A7.5 7.5 0 1 0 10 2.5Zm0 1.5a6 6 0 0 1 5.1 9.1l-.2.3.6 2.1-2.2-.6-.3.2A6 6 0 1 1 10 4Zm-2.7 3c-.2 0-.5.1-.7.4-.2.3-.8.8-.8 1.9 0 1.1.8 2.2.9 2.4.1.2 1.6 2.5 3.9 3.4 1.9.8 2.3.6 2.7.6.4 0 1.3-.5 1.5-1.1.2-.5.2-1 .1-1.1l-.3-.2-1.4-.7c-.2-.1-.4-.2-.6.1l-.8 1c-.1.2-.3.2-.5.1-.2-.1-1-.4-1.9-1.2-.7-.6-1.1-1.3-1.3-1.5-.1-.2 0-.3.1-.4l.4-.5c.1-.2.2-.3.3-.5.1-.2 0-.3 0-.5l-.6-1.5c-.2-.4-.4-.4-.6-.4h-.5Z"/>
                    </svg>
                    Konsultasi
                </a>
            </div>

            <dl class="mt-10 grid grid-cols-3 gap-4 border-t border-line pt-6">
                <div>
                    <dt class="text-[0.65rem] font-semibold tracking-[0.16em] text-muted uppercase">Produksi</dt>
                    <dd class="mt-1 text-sm font-semibold text-brand-950">In-house</dd>
                </div>
                <div>
                    <dt class="text-[0.65rem] font-semibold tracking-[0.16em] text-muted uppercase">Warna</dt>
                    <dd class="mt-1 text-sm font-semibold text-brand-950">Kustom</dd>
                </div>
                <div>
                    <dt class="text-[0.65rem] font-semibold tracking-[0.16em] text-muted uppercase">Layanan</dt>
                    <dd class="mt-1 text-sm font-semibold text-brand-950">Purna jual</dd>
                </div>
            </dl>
        </div>

        <div class="hero-visual relative">
            <div class="relative overflow-hidden rounded-panel border border-white bg-brand-950 shadow-panel">
                @if ($imageUrl)
                    <img
                        src="{{ $imageUrl }}"
                        alt="{{ $slide->title }}"
                        class="h-[20rem] w-full object-cover sm:h-[25rem] lg:h-[28rem]"
                        loading="{{ $index === 1 ? 'eager' : 'lazy' }}"
                    >
                @else
                    <div class="product-visual absolute inset-0" aria-hidden="true"></div>
                    <div class="rhythm-lines absolute inset-0" aria-hidden="true"></div>

                    <div class="relative flex h-[20rem] items-center justify-center sm:h-[25rem] lg:h-[28rem]">
                        <x-brand-mark class="h-28 w-28 opacity-25" />
                    </div>
                @endif

                <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-brand-950/90 via-brand-950/15 to-transparent" aria-hidden="true"></div>

                <div class="absolute top-5 left-5 rounded-full border border-white/20 bg-brand-950/35 px-3 py-1 text-[0.6rem] font-semibold tracking-[0.18em] text-brand-100 uppercase backdrop-blur">
                    THORXup / {{ $indexLabel }}
                </div>

                <div class="absolute right-5 bottom-5 left-5 flex items-end justify-between gap-4">
                    <div>
                        <p class="text-[0.62rem] font-semibold tracking-[0.2em] text-brass-soft uppercase">
                            {{ $slide->subtitle ?? 'Perawatan logam industri' }}
                        </p>
                        <p class="mt-1 max-w-[14rem] text-sm font-medium text-white">
                            {{ $slide->cta_label ?? 'Siap dipesan untuk tim Anda' }}
                        </p>
                    </div>

                    <span class="rounded-full border border-white/20 px-3 py-1 text-[0.62rem] tracking-[0.14em] text-brand-100 uppercase">
                        {{ $indexLabel }} / {{ str_pad((string) $total, 2, '0', STR_PAD_LEFT) }}
                    </span>
                </div>
            </div>

            <div class="absolute -bottom-5 -left-4 hidden rounded-card border border-line bg-white px-5 py-4 shadow-card sm:block">
                <p class="text-[0.6rem] font-semibold tracking-[0.18em] text-muted uppercase">Kontrol kualitas</p>
                <p class="mt-1 text-sm font-semibold text-brand-950">Diperiksa sebelum kirim</p>
            </div>
        </div>
    </div>
</div>
