@props(['slides', 'profile' => null])

@php
    $count = $slides->count();
@endphp

<section
    class="hero-surface relative overflow-hidden"
    data-carousel
    aria-roledescription="carousel"
    aria-label="Sorotan {{ $profile?->name ?? config('app.name', 'THORXup') }}"
>
    <div data-carousel-track>
        @foreach ($slides as $slide)
            <x-banner-slide
                :slide="$slide"
                :profile="$profile"
                :index="$loop->iteration"
                :total="$count"
            />
        @endforeach
    </div>

    @if ($count > 1)
        <div class="container-page flex flex-wrap items-center justify-between gap-5 pb-8">
            <div class="flex items-center gap-2" role="group" aria-label="Pilih slide">
                @foreach ($slides as $slide)
                    <button
                        type="button"
                        data-carousel-dot
                        data-index="{{ $loop->index }}"
                        data-active="{{ $loop->first ? 'true' : 'false' }}"
                        aria-label="Tampilkan slide {{ $loop->iteration }}: {{ $slide->title }}"
                        aria-current="{{ $loop->first ? 'true' : 'false' }}"
                        class="h-2.5 w-2.5 rounded-full bg-brand-200 transition-all duration-300 hover:bg-brand-400 data-[active=true]:w-7 data-[active=true]:bg-brand-600"
                    ></button>
                @endforeach
            </div>

            <div class="flex items-center gap-2">
                <button
                    type="button"
                    data-carousel-prev
                    class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-line bg-white text-brand-900 transition-colors hover:border-brand-400 hover:bg-brand-50"
                    aria-label="Slide sebelumnya"
                >
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M16 10H4m0 0 4.5-4.5M4 10l4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button
                    type="button"
                    data-carousel-next
                    class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-line bg-white text-brand-900 transition-colors hover:border-brand-400 hover:bg-brand-50"
                    aria-label="Slide berikutnya"
                >
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div class="border-t border-line/80 bg-white/55">
        <div class="container-page grid gap-4 py-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach (['Produksi in-house', 'Kontrol kualitas', 'Warna kustom', 'Layanan purna jual'] as $capability)
                <div class="flex items-center gap-2.5 text-sm text-ink/80">
                    <svg class="h-4 w-4 shrink-0 text-brand-600" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="m4 10.5 3.5 3.5L16 5.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>{{ $capability }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <p class="sr-only" data-carousel-status aria-live="polite">Slide 1 dari {{ $count }}</p>
</section>
