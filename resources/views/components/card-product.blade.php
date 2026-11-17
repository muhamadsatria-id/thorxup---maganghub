@props(['product'])

@php
    $imageUrl = $product->imageUrl();
@endphp

<a
    href="{{ route('products.detail', $product) }}"
    {{ $attributes->class(['group flex items-center gap-4 rounded-xl border border-line bg-white p-3 transition hover:border-brand-300 hover:bg-brand-50/40']) }}
>
    <span class="product-visual relative flex h-16 w-16 shrink-0 items-center justify-center overflow-hidden rounded-lg">
        @if ($imageUrl)
            <img src="{{ $imageUrl }}" alt="" class="h-full w-full object-cover" loading="lazy">
        @else
            <span class="rhythm-lines absolute inset-0" aria-hidden="true"></span>
            <x-brand-mark class="relative h-7 w-7 opacity-50" />
        @endif
    </span>

    <span class="min-w-0 flex-1">
        @if ($product->category)
            <span class="block text-[0.6rem] font-semibold tracking-[0.16em] text-brand-600 uppercase">
                {{ $product->category->name }}
            </span>
        @endif
        <span class="mt-1 block text-sm font-semibold leading-5 text-brand-950 group-hover:text-brand-700">
            {{ $product->name }}
        </span>
    </span>

    <svg class="h-4 w-4 shrink-0 text-muted transition-transform group-hover:translate-x-0.5 group-hover:text-brand-700" viewBox="0 0 20 20" fill="none" aria-hidden="true">
        <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</a>
