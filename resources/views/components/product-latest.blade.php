@props(['products', 'title' => 'Produk lainnya'])

@if ($products->isNotEmpty())
    <section {{ $attributes->class(['rounded-card border border-line bg-white p-5 shadow-card']) }}>
        <div class="flex items-center justify-between gap-4">
            <h2 class="text-sm font-semibold tracking-tight text-brand-950">{{ $title }}</h2>
            <a href="{{ route('products') }}" class="text-xs font-semibold text-brand-700 hover:text-brand-950">Semua</a>
        </div>

        <div class="mt-4 space-y-3">
            @foreach ($products as $product)
                <x-card-product :product="$product" />
            @endforeach
        </div>
    </section>
@endif
