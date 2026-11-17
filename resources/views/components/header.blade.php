@php
    $brandName = trim($profileBrand?->name ?? config('app.name', 'THORXup'));
    $navCategories = $navCategories ?? collect();

    $logoBase = $brandName;
    $logoAccent = '';

    if (strlen($brandName) > 2 && str_ends_with(strtolower($brandName), 'up')) {
        $logoBase = substr($brandName, 0, -2);
        $logoAccent = substr($brandName, -2);
    }

    $navItems = [
        ['label' => 'Beranda', 'route' => 'home', 'pattern' => 'home'],
        ['label' => 'Tentang', 'route' => 'about', 'pattern' => 'about'],
        ['label' => 'Berita', 'route' => 'news', 'pattern' => 'news*'],
        ['label' => 'Produk', 'route' => 'products', 'pattern' => ['products*', 'categories*']],
        ['label' => 'Kontak', 'route' => 'contact', 'pattern' => 'contact'],
    ];

    $productsActive = request()->routeIs('products*') || request()->routeIs('categories*');
@endphp

<header class="fixed top-0 left-0 right-0 z-50 bg-surface-container-lowest border-b border-outline-variant/30 shadow-sm">
    <div class="h-20 w-full max-w-[1360px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between">
        <div class="flex items-center">
            <a
                href="{{ route('home') }}"
                class="flex items-baseline tracking-tight font-headline-md text-headline-md text-primary"
                aria-label="{{ $brandName }} — beranda"
            >
                <span class="font-extrabold">{{ $logoBase }}</span>
                @if ($logoAccent !== '')
                    <span class="text-label-md font-label-md uppercase tracking-wider text-secondary -translate-y-2 ml-0.5">
                        {{ $logoAccent }}
                    </span>
                @endif
            </a>
        </div>

        <div class="flex items-center gap-space-md">
            <div class="hidden md:flex items-center">
                <nav class="flex items-center gap-space-lg" aria-label="Navigasi utama">
                    @foreach ($navItems as $item)
                        @if ($item['route'] === 'products')
                            <div class="relative group py-space-xs">
                                <button
                                    type="button"
                                    class="flex items-center gap-space-xs font-label-lg text-label-lg transition-colors {{ $productsActive ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary' }}"
                                    aria-haspopup="true"
                                >
                                    <span class="font-label-lg text-label-lg">{{ $item['label'] }}</span>
                                    <span class="material-symbols-outlined text-[16px]">expand_more</span>
                                </button>

                                <div class="absolute left-0 top-full pt-space-xs hidden group-hover:block group-focus-within:block transition-all">
                                    <div class="bg-surface-container-lowest rounded-2xl shadow-[0_14px_32px_-4px_rgba(57,73,171,0.12)] p-space-sm w-56 flex flex-col gap-space-xs border border-outline-variant/30">
                                        @forelse ($navCategories as $category)
                                            @php
                                                $categoryActive = request()->routeIs('categories.detail')
                                                    && request()->route('category')?->is($category);
                                            @endphp

                                            <a
                                                href="{{ route('categories.detail', $category) }}"
                                                class="px-space-md py-space-xs font-label-md text-label-md rounded-2xl transition-colors {{ $categoryActive ? 'bg-surface-container text-on-surface font-bold' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}"
                                                @if ($categoryActive) aria-current="page" @endif
                                            >
                                                {{ $category->name }}
                                            </a>
                                        @empty
                                            <span class="px-space-md py-space-xs font-label-md text-label-md text-on-surface-variant">
                                                Kategori segera hadir
                                            </span>
                                        @endforelse

                                        <a
                                            href="{{ route('products') }}"
                                            class="px-space-md py-space-xs text-primary font-label-md text-label-md rounded-2xl hover:bg-surface-container hover:text-primary transition-colors font-bold"
                                        >
                                            Semua Produk
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            @php
                                $itemActive = request()->routeIs($item['pattern']);
                            @endphp

                            <a
                                class="{{ $itemActive ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary' }} font-label-lg text-label-lg transition-colors"
                                href="{{ route($item['route']) }}"
                                @if ($itemActive) aria-current="page" @endif
                            >
                                {{ $item['label'] }}
                            </a>
                        @endif
                    @endforeach
                </nav>
            </div>

            <div class="flex items-center gap-space-sm">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center" aria-hidden="true">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>

                <button
                    type="button"
                    data-nav-toggle
                    aria-expanded="false"
                    aria-controls="mobile-nav"
                    class="flex md:hidden w-8 h-8 rounded-full bg-primary items-center justify-center text-on-primary"
                >
                    <span class="sr-only">Buka menu navigasi</span>
                    <svg data-nav-icon="open" class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    </svg>
                    <svg data-nav-icon="close" class="hidden h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-nav" data-nav-panel class="hidden max-h-[calc(100dvh-5rem)] overflow-y-auto border-t border-outline-variant/30 bg-surface-container-lowest md:hidden">
        <nav class="mx-auto flex w-full max-w-[1360px] flex-col px-margin-mobile py-space-sm" aria-label="Navigasi seluler">
            @foreach ($navItems as $item)
                @php
                    $itemActive = request()->routeIs($item['pattern']);
                @endphp

                <a
                    class="flex items-center justify-between rounded-2xl px-space-md py-space-sm font-label-lg text-label-lg transition-colors {{ $itemActive ? 'bg-surface-container text-primary font-bold' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}"
                    href="{{ route($item['route']) }}"
                    @if ($itemActive) aria-current="page" @endif
                >
                    {{ $item['label'] }}
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            @endforeach

            @if ($navCategories->isNotEmpty())
                <div class="mt-space-sm border-t border-outline-variant/30 pt-space-sm">
                    <p class="px-space-md py-space-xs text-label-md font-label-md uppercase tracking-wider text-secondary">
                        Kategori
                    </p>
                    <div class="grid grid-cols-2">
                        @foreach ($navCategories as $category)
                            <a
                                href="{{ route('categories.detail', $category) }}"
                                class="rounded-2xl px-space-md py-space-xs font-label-md text-label-md text-on-surface-variant transition-colors hover:bg-surface-container hover:text-on-surface"
                            >
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($profileBrand?->phone)
                <a href="{{ $profileBrand->phoneUrl() }}" class="mt-space-sm text-center font-label-md text-label-md text-on-surface-variant transition-colors hover:text-primary">
                    {{ $profileBrand->phone }}
                </a>
            @endif
        </nav>
    </div>
</header>
