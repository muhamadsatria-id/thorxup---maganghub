@props(['product', 'profile' => null, 'index' => 1, 'featured' => false])

@php
    $imageUrl = $product->imageUrl();
    $benefits = $product->benefitList();
    $inquiryUrl = $profile?->whatsappUrl('Halo '.$profile->name.', saya ingin menanyakan spesifikasi '.$product->name.'.') ?? route('contact').'#kontak';
    $detailUrl = route('products.detail', $product);
    $indexLabel = str_pad((string) $index, 2, '0', STR_PAD_LEFT);
    $categoryName = $product->category?->name;
@endphp

<article {{ $attributes->class([
    'group relative overflow-hidden rounded-card border border-line bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-panel',
    'lg:col-span-2' => $featured,
]) }}>
    <div @class(['flex h-full flex-col', 'lg:grid lg:grid-cols-[1.02fr_0.98fr]' => $featured])>
        <div @class([
            'product-visual relative overflow-hidden',
            'order-1 h-64 lg:order-2 lg:h-full lg:min-h-[23rem]' => $featured,
            'h-44' => ! $featured,
        ])>
            @if ($imageUrl)
                <img src="{{ $imageUrl }}" alt="{{ $product->name }}" class="h-full w-full object-cover" loading="lazy">
            @else
                <div class="rhythm-lines absolute inset-0" aria-hidden="true"></div>

                <span class="absolute bottom-4 left-5 text-[4rem] leading-none font-semibold tracking-tighter text-white/15">
                    {{ $indexLabel }}
                </span>

                <svg class="absolute top-1/2 right-6 h-24 w-24 -translate-y-1/2 text-brass/70" viewBox="0 0 96 96" fill="none" aria-hidden="true">
                    <circle cx="48" cy="48" r="30" stroke="currentColor" stroke-width="1.5" />
                    <circle cx="48" cy="48" r="22" stroke="currentColor" stroke-width="1" opacity="0.5" />
                    <path d="M48 18v60M18 48h60M27 27l42 42M69 27 27 69" stroke="currentColor" stroke-width="1" opacity="0.55" />
                    <circle cx="48" cy="48" r="5" fill="currentColor" />
                </svg>
            @endif

            <span class="absolute top-5 left-5 rounded-full border border-white/20 bg-brand-950/35 px-3 py-1 text-[0.6rem] font-semibold tracking-[0.18em] text-brand-100 uppercase backdrop-blur">
                {{ $categoryName ?? 'Custom order' }}
            </span>
        </div>

        <div class="flex flex-1 flex-col gap-4 p-6 sm:p-7">
            <div class="flex items-center justify-between gap-4">
                <span class="text-[0.65rem] font-semibold tracking-[0.2em] text-brand-600 uppercase">
                    {{ $categoryName ?? 'Lini '.$indexLabel }}
                </span>

                @if ($featured)
                    <span class="text-[0.65rem] tracking-[0.18em] text-muted uppercase">Unggulan</span>
                @endif
            </div>

            <h3 class="text-xl leading-snug font-semibold tracking-tight text-brand-950">
                <a href="{{ $detailUrl }}" class="transition-colors hover:text-brand-700">{{ $product->name }}</a>
            </h3>

            @if ($product->description)
                <p class="text-sm leading-6 text-muted">{{ $product->description }}</p>
            @endif

            @if ($benefits !== [])
                <ul class="spec-list text-ink/80">
                    @foreach (array_slice($benefits, 0, 3) as $benefit)
                        <li class="flex gap-2.5">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand-600" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                <path d="m4 10.5 3.5 3.5L16 5.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>{{ $benefit }}</span>
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="mt-auto flex flex-wrap items-center justify-between gap-3 border-t border-line pt-4">
                <a href="{{ $detailUrl }}" class="link-arrow">
                    Lihat detail
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>

                <a
                    href="{{ $inquiryUrl }}"
                    class="text-xs font-medium text-muted transition-colors hover:text-brand-700"
                    @if ($inquiryUrl !== route('contact').'#kontak') target="_blank" rel="noopener" @endif
                >
                    Tanya via WhatsApp
                </a>
            </div>
        </div>
    </div>
</article>
