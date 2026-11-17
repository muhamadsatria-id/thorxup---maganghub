@props(['articles', 'title' => 'Berita terbaru'])

@if ($articles->isNotEmpty())
    <section {{ $attributes->class(['rounded-card border border-line bg-white p-5 shadow-card']) }}>
        <div class="flex items-center justify-between gap-4">
            <h2 class="text-sm font-semibold tracking-tight text-brand-950">{{ $title }}</h2>
            <a href="{{ route('news') }}" class="text-xs font-semibold text-brand-700 hover:text-brand-950">Semua</a>
        </div>

        <div class="mt-4 divide-y divide-line">
            @foreach ($articles as $article)
                <a href="{{ route('news.detail', $article) }}" class="group block py-4 first:pt-0 last:pb-0">
                    <time class="text-[0.62rem] font-semibold tracking-[0.16em] text-muted uppercase" datetime="{{ $article->published_at?->toDateString() }}">
                        {{ $article->published_at?->locale('id')->translatedFormat('d M Y') ?? '—' }}
                    </time>
                    <p class="mt-1.5 text-sm font-semibold leading-5 text-brand-950 transition-colors group-hover:text-brand-700">
                        {{ $article->title }}
                    </p>
                </a>
            @endforeach
        </div>
    </section>
@endif
