@extends('layouts.app')

@section('title', $article->title.' — '.config('app.name', 'THORXup'))
@section('meta_description', $article->excerpt(155))

@php
    $imageUrl = $article->imageUrl();
@endphp

@section('content')
    <section class="hero-surface border-b border-line">
        <div class="container-page py-10 md:py-14">
            <nav aria-label="Breadcrumb" class="flex flex-wrap items-center gap-2 text-xs text-muted">
                <a href="{{ route('home') }}" class="hover:text-brand-700">Beranda</a>
                <span aria-hidden="true">/</span>
                <a href="{{ route('news') }}" class="hover:text-brand-700">Berita</a>
                <span aria-hidden="true">/</span>
                <span class="text-brand-950">{{ \Illuminate\Support\Str::limit($article->title, 48) }}</span>
            </nav>

            <div class="mt-8 max-w-3xl">
                <p class="eyebrow text-brand-700">
                    <span class="rule"></span>
                    {{ $article->published_at?->locale('id')->translatedFormat('d F Y') ?? 'Draf' }}
                </p>

                <h1 class="mt-5 text-4xl leading-[1.06] font-semibold tracking-[-0.03em] text-brand-950 sm:text-5xl">
                    {{ $article->title }}
                </h1>

                <div class="mt-5 flex flex-wrap items-center gap-3 text-sm text-muted">
                    @if ($article->author)
                        <span>Oleh {{ $article->author }}</span>
                        <span aria-hidden="true">·</span>
                    @endif
                    <span>{{ max(1, (int) ceil(str_word_count(strip_tags($article->content ?? '')) / 200)) }} menit baca</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16">
        <div class="container-page grid gap-10 lg:grid-cols-[1fr_19rem] lg:gap-14">
            <article>
                @if ($imageUrl)
                    <img src="{{ $imageUrl }}" alt="{{ $article->title }}" class="mb-8 aspect-[16/9] w-full rounded-panel object-cover shadow-card">
                @else
                    <div class="product-visual relative mb-8 flex aspect-[16/7] items-center justify-center overflow-hidden rounded-panel">
                        <span class="rhythm-lines absolute inset-0" aria-hidden="true"></span>
                        <x-brand-mark class="relative h-20 w-20 opacity-30" />
                    </div>
                @endif

                <div class="article-body">
                    {!! $article->content !!}
                </div>

                <div class="mt-10 flex flex-wrap items-center justify-between gap-4 border-t border-line pt-6">
                    <a href="{{ route('news') }}" class="link-arrow">
                        <svg class="h-4 w-4 rotate-180" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Semua berita
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-primary">Konsultasi kebutuhan</a>
                </div>
            </article>

            <aside class="space-y-6">
                <x-news-latest :articles="$related" title="Berita lainnya" />

                <div class="rounded-card border border-line bg-white p-5 shadow-card">
                    <p class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Dari workshop</p>
                    <p class="mt-2 text-sm leading-6 text-ink/80">Punya pertanyaan tentang bahan, ukuran, atau jadwal produksi? Tim kami siap membantu.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-4 w-full">Hubungi tim</a>
                </div>
            </aside>
        </div>
    </section>
@endsection

@push('head')
    @php
        $structuredData = array_filter([
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $article->title,
            'description' => $article->excerpt(155),
            'image' => $imageUrl,
            'datePublished' => $article->published_at?->toIso8601String(),
            'dateModified' => $article->updated_at?->toIso8601String(),
            'author' => $article->author ? ['@type' => 'Person', 'name' => $article->author] : null,
            'publisher' => ['@type' => 'Organization', 'name' => $profileBrand?->name ?? 'THORXup'],
            'mainEntityOfPage' => route('news.detail', $article),
        ]);
    @endphp
    <script type="application/ld+json">{!! json_encode($structuredData, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush
