@php
    $profile ??= null;
    $brandName = $profile?->name ?? config('app.name', 'THORXup');
    $whatsappUrl = $profile?->whatsappUrl('Halo '.$brandName.', saya ingin konsultasi perlengkapan drumband.') ?? '#kontak';
@endphp

<section class="hero-surface">
    <div class="container-page grid items-center gap-12 py-14 md:py-20 lg:grid-cols-[1.05fr_0.95fr] lg:gap-16">
        <div class="hero-copy max-w-xl">
            <p class="eyebrow text-brand-700">
                <span class="rule"></span>
                Perlengkapan drumband performa
            </p>

            <h1 class="mt-6 text-[2.6rem] leading-[1.02] font-semibold tracking-[-0.03em] text-brand-950 sm:text-6xl">
                Bunyi rapi.<br>
                Tampilan berani.<br>
                <span class="text-brand-600">Siap panggung.</span>
            </h1>

            <p class="mt-6 max-w-lg text-base leading-7 text-muted">
                {{ $brandName }} memproduksi snare, bass, tenor, cymbal, hingga kostum drumband. Dibuat dengan bahan pilihan dan kontrol kualitas di setiap tahap, untuk tim yang tidak mau tampil setengah-setengah.
            </p>

            <div class="mt-8 flex flex-wrap items-center gap-3">
                <a href="#produk" class="btn btn-primary">
                    Lihat katalog
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <a
                    href="{{ $whatsappUrl }}"
                    class="btn btn-outline"
                    @if ($whatsappUrl !== '#kontak') target="_blank" rel="noopener" @endif
                >
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10 2.5a7.4 7.4 0 0 0-6.4 11.1L2.5 17.5l4-1.1A7.4 7.4 0 1 0 10 2.5Zm4.3 10.4c-.2.5-1.1 1-1.6 1-.4 0-.9 0-1.7-.4a8 8 0 0 1-3.9-3.5c-.3-.5-.7-1.3-.7-1.9 0-.5.3-1 .5-1.2.2-.2.4-.3.6-.3h.4c.2 0 .3 0 .4.3l.6 1.4c0 .2 0 .3-.1.5l-.4.5c-.1.2-.2.3 0 .5.4.6 1 1.2 1.6 1.6.2.1.3.1.5-.1l.6-.7c.2-.2.3-.2.5-.1l1.4.7c.2.1.3.2.3.3 0 .1 0 .5-.1.8Z"/>
                    </svg>
                    Konsultasi via WhatsApp
                </a>
            </div>

            <ul class="mt-9 flex flex-wrap gap-x-6 gap-y-2 text-xs font-medium text-muted">
                <li class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-brass"></span>
                    Garansi produksi
                </li>
                <li class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-brass"></span>
                    Kirim seluruh Indonesia
                </li>
                <li class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-brass"></span>
                    Kustom warna &amp; emblem
                </li>
            </ul>
        </div>

        <div class="hero-visual relative">
            <div class="relative overflow-hidden rounded-panel border border-white bg-brand-950 shadow-panel">
                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Perlengkapan drumband {{ $brandName }}"
                    width="738"
                    height="414"
                    class="h-[20rem] w-full object-cover sm:h-[25rem]"
                    fetchpriority="high"
                >

                <div class="absolute inset-0 bg-linear-to-t from-brand-950/85 via-brand-950/15 to-transparent"></div>

                <span class="absolute top-5 left-5 inline-flex items-center gap-2 rounded-full border border-white/20 bg-brand-950/50 px-3 py-1.5 text-[0.65rem] font-semibold tracking-[0.18em] text-white uppercase backdrop-blur">
                    <span class="h-1.5 w-1.5 rounded-full bg-brass"></span>
                    Workshop Bandung
                </span>

                <div class="absolute inset-x-5 bottom-5 flex items-end justify-between gap-4 text-white">
                    <div>
                        <p class="text-[0.65rem] tracking-[0.2em] text-brand-200 uppercase">Produksi in-house</p>
                        <p class="mt-1 text-sm font-semibold">Diperiksa satu per satu sebelum kirim.</p>
                    </div>
                    <x-brand-mark class="hidden h-12 w-12 shrink-0 sm:block" />
                </div>
            </div>

            <div class="absolute -bottom-6 -left-4 hidden rounded-card border border-line bg-white px-5 py-4 shadow-card sm:block">
                <p class="text-[0.65rem] tracking-[0.18em] text-muted uppercase">Alur singkat</p>
                <p class="mt-1 text-sm font-semibold text-brand-950">Brief → spesifikasi → produksi</p>
            </div>
        </div>
    </div>

    <div class="border-t border-line/80 bg-white/70">
        <div class="container-page grid gap-6 py-7 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['Bahan pilihan', 'Maple, aluminium, dan kuningan B20.'],
                ['Kustom penuh', 'Warna, emblem, dan ukuran menyesuaikan tim.'],
                ['QC bertahap', 'Diperiksa dari rangka sampai finishing.'],
                ['Purna jual', 'Bantuan penyesuaian setelah pengiriman.'],
            ] as [$title, $body])
                <div class="flex items-start gap-3">
                    <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-brass"></span>
                    <div>
                        <p class="text-sm font-semibold text-brand-950">{{ $title }}</p>
                        <p class="mt-0.5 text-xs leading-5 text-muted">{{ $body }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
