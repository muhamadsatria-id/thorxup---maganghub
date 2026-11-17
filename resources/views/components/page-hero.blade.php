@props(['eyebrow', 'title', 'description' => null])

<section {{ $attributes->class(['hero-surface border-b border-line']) }}>
    <div class="container-page py-14 md:py-20">
        <p class="eyebrow text-brand-700">
            <span class="rule"></span>
            {{ $eyebrow }}
        </p>

        <h1 class="mt-5 max-w-3xl text-4xl leading-[1.06] font-semibold tracking-[-0.03em] text-brand-950 sm:text-5xl">
            {{ $title }}
        </h1>

        @if ($description)
            <p class="mt-5 max-w-2xl text-base leading-7 text-muted">
                {{ $description }}
            </p>
        @endif

        {{ $slot }}
    </div>
</section>
