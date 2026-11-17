@props(['article'])

<article {{ $attributes->class(['group grid gap-5 border-t border-line py-7 sm:grid-cols-[9rem_1fr] sm:gap-8']) }}>
    <div class="flex flex-col gap-1 text-xs tracking-[0.16em] text-muted uppercase">
        <time datetime="{{ $article->published_at?->toDateString() }}">
            {{ $article->published_at?->locale('id')->translatedFormat('d M Y') ?? '—' }}
        </time>
        @if ($article->author)
            <span class="text-[0.7rem] tracking-normal normal-case text-muted/80">{{ $article->author }}</span>
        @endif
    </div>

    <div>
        <h3 class="text-lg font-semibold tracking-tight text-brand-950 transition-colors group-hover:text-brand-700">
            <a href="{{ route('news.detail', $article) }}">{{ $article->title }}</a>
        </h3>
        <p class="mt-2 max-w-2xl text-sm leading-6 text-muted">
            {{ $article->excerpt(180) }}
        </p>
        <a href="{{ route('news.detail', $article) }}" class="link-arrow mt-3">
            Baca artikel
            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</article>
