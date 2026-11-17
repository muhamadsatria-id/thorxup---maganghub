@php
    $brandName = $profileBrand?->name ?? config('app.name', 'THORXup');
    $whatsappUrl = $profileBrand?->whatsappUrl('Halo '.$brandName.', saya ingin konsultasi perlengkapan drumband.') ?? route('contact').'#kontak';

    $navItems = [
        ['label' => 'Beranda', 'route' => 'home', 'pattern' => 'home'],
        ['label' => 'Tentang', 'route' => 'about', 'pattern' => 'about'],
        ['label' => 'Produk', 'route' => 'products', 'pattern' => 'products*'],
        ['label' => 'Berita', 'route' => 'news', 'pattern' => 'news*'],
        ['label' => 'Kontak', 'route' => 'contact', 'pattern' => 'contact'],
    ];
@endphp

<header data-header class="site-header">
    <div class="container-page flex h-[4.75rem] items-center justify-between gap-6">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-3" aria-label="{{ $brandName }} — beranda">
            <x-brand-mark />
            <span class="text-[1.05rem] font-semibold tracking-tight text-brand-950">
                {{ $brandName }}<span class="text-brass">.</span>
            </span>
        </a>

        <nav class="hidden items-center gap-8 lg:flex" aria-label="Navigasi utama">
            @foreach ($navItems as $item)
                <a
                    class="nav-link {{ request()->routeIs($item['pattern']) ? 'font-semibold text-brand-950' : '' }}"
                    href="{{ route($item['route']) }}"
                    @if (request()->routeIs($item['pattern'])) aria-current="page" @endif
                >
                    {{ $item['label'] }}
                </a>
            @endforeach

            <a class="nav-link" href="{{ route('categories') }}">Kategori</a>
        </nav>

        <div class="hidden items-center gap-4 lg:flex">
            @if ($profileBrand?->phone)
                <a href="{{ $profileBrand->phoneUrl() }}" class="text-sm font-medium text-muted transition-colors hover:text-brand-900">
                    {{ $profileBrand->phone }}
                </a>
            @endif

            <a href="{{ $whatsappUrl }}" class="btn btn-primary" target="_blank" rel="noopener">
                Konsultasi
                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

        <button
            type="button"
            data-nav-toggle
            aria-expanded="false"
            aria-controls="mobile-nav"
            class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-line text-brand-950 lg:hidden"
        >
            <span class="sr-only">Buka menu navigasi</span>
            <svg data-nav-icon="open" class="h-5 w-5" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <path d="M3 6h14M3 10h14M3 14h14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <svg data-nav-icon="close" class="hidden h-5 w-5" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <path d="m5 5 10 10M15 5 5 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </button>
    </div>

    <div id="mobile-nav" data-nav-panel class="hidden border-t border-line bg-white lg:hidden">
        <nav class="container-page flex flex-col py-3" aria-label="Navigasi seluler">
            @foreach ($navItems as $item)
                <a
                    class="border-b border-line/70 py-3.5 text-base font-medium {{ request()->routeIs($item['pattern']) ? 'text-brand-700' : 'text-ink' }}"
                    href="{{ route($item['route']) }}"
                    @if (request()->routeIs($item['pattern'])) aria-current="page" @endif
                >
                    {{ $item['label'] }}
                </a>
            @endforeach

            <a class="border-b border-line/70 py-3.5 text-base font-medium text-ink" href="{{ route('categories') }}">Kategori</a>

            <a href="{{ $whatsappUrl }}" class="btn btn-primary mt-3" target="_blank" rel="noopener">
                Konsultasi via WhatsApp
            </a>
        </nav>
    </div>
</header>
