@props(['eyebrow', 'title', 'description' => null, 'invert' => false])

<div {{ $attributes->merge(['class' => 'max-w-2xl']) }}>
    <p class="eyebrow {{ $invert ? 'text-brass-soft' : 'text-brand-700' }}">
        <span class="rule"></span>
        {{ $eyebrow }}
    </p>

    <h2 class="mt-5 text-3xl leading-[1.1] font-semibold tracking-tight sm:text-4xl {{ $invert ? 'text-white' : 'text-brand-950' }}">
        {{ $title }}
    </h2>

    @if ($description)
        <p class="mt-4 text-base leading-7 {{ $invert ? 'text-brand-200' : 'text-muted' }}">
            {{ $description }}
        </p>
    @endif
</div>
