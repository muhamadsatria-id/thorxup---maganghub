@props(['category'])

@php
    $productCount = $category->products_count ?? $category->products()->where('is_active', true)->count();
@endphp

<a
    href="{{ route('categories.detail', $category) }}"
    {{ $attributes->class(['group relative flex h-full flex-col justify-between overflow-hidden rounded-card border border-line bg-white p-6 shadow-card transition duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-panel']) }}
>
    <div>
        <div class="flex items-center justify-between gap-4">
            <span class="text-[0.62rem] font-semibold tracking-[0.18em] text-brand-600 uppercase">
                Kategori
            </span>
            <span class="rounded-full bg-brand-50 px-2.5 py-1 text-[0.65rem] font-semibold text-brand-700">
                {{ $productCount }} produk
            </span>
        </div>

        <h3 class="mt-4 text-lg font-semibold tracking-tight text-brand-950 transition-colors group-hover:text-brand-700">
            {{ $category->name }}
        </h3>

        @if ($category->description)
            <p class="mt-2 text-sm leading-6 text-muted">
                {{ $category->description }}
            </p>
        @endif
    </div>

    <span class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand-700">
        Lihat kategori
        <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="none" aria-hidden="true">
            <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </span>
</a>
