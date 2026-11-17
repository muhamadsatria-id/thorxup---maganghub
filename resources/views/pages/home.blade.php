@extends('layouts.app')

@section('title', config('app.name', 'THORXup').' — Perlengkapan Drumband yang Siap Panggung')
@section('meta_description', 'THORXup memproduksi snare, bass, tenor, cymbal, dan kostum drumband dengan bahan pilihan serta kontrol kualitas di setiap tahap. Konsultasikan kebutuhan tim Anda.')

@section('content')
    @if ($carousels->isNotEmpty())
        @include('components.hero-carousel', ['slides' => $carousels, 'profile' => $profile])
    @else
        @include('components.hero', ['profile' => $profile])
    @endif

    {{-- Kategori --}}
    @if ($categories->isNotEmpty())
        <section class="border-b border-line bg-white py-16 md:py-20">
            <div class="container-page">
                <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                    <x-section-heading
                        class="reveal"
                        eyebrow="Kategori"
                        title="Cari berdasarkan kebutuhan tim."
                        description="Mulai dari instrumen inti sampai detail visual. Setiap kategori dikelola sebagai bagian dari satu sistem performa."
                    />

                    <a href="{{ route('categories') }}" class="link-arrow reveal shrink-0">
                        Semua kategori
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($categories as $category)
                        <x-card-category
                            :category="$category"
                            class="reveal"
                            style="--reveal-delay: {{ min($loop->index, 5) * 60 }}ms"
                        />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- Katalog --}}
    <section id="produk" class="scroll-mt-24 py-20 md:py-28">
        <div class="container-page">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                <x-section-heading
                    class="reveal"
                    eyebrow="Katalog unggulan"
                    title="Perlengkapan inti untuk satu barisan yang utuh."
                    description="Dari fondasi ritme sampai detail visual, setiap lini dibuat untuk bekerja bersama — bukan sekadar terlihat bagus sendiri-sendiri."
                />

                <div class="reveal flex shrink-0 flex-wrap items-center gap-3">
                    <a href="{{ route('products') }}" class="link-arrow">
                        Semua produk
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>

                    <a
                        href="{{ $profile?->whatsappUrl('Halo, boleh minta katalog lengkap THORXup?') ?? route('contact').'#kontak' }}"
                        class="btn btn-outline"
                        @if ($profile?->whatsapp) target="_blank" rel="noopener" @endif
                    >
                        Minta katalog lengkap
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            @if ($products->isNotEmpty())
                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($products as $product)
                        <x-product-card
                            :product="$product"
                            :profile="$profile"
                            :index="$loop->iteration"
                            :featured="$loop->first"
                            class="reveal"
                            style="--reveal-delay: {{ min($loop->index, 5) * 60 }}ms"
                        />
                    @endforeach
                </div>
            @else
                <div class="reveal mt-12 rounded-panel border border-dashed border-brand-200 bg-white p-10 text-center">
                    <p class="text-lg font-semibold text-brand-950">Katalog sedang disiapkan.</p>
                    <p class="mt-2 text-sm text-muted">Hubungi kami untuk melihat stok dan opsi kustom yang tersedia.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-6">Hubungi tim</a>
                </div>
            @endif
        </div>
    </section>

    {{-- Tentang --}}
    <section id="tentang" class="about-surface scroll-mt-24 py-20 text-white md:py-28">
        <div class="container-page">
            <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:gap-16">
                <div class="reveal">
                    <x-section-heading
                        invert
                        eyebrow="Tentang {{ $profile?->name ?? config('app.name', 'THORXup') }}"
                        title="Bukan sekadar alat. Ini identitas tim."
                        :description="$profile?->vision"
                    />

                    <a href="{{ route('about') }}" class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-brass-soft transition-colors hover:text-white">
                        Profil lengkap
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

                <div class="reveal" style="--reveal-delay: 120ms">
                    <p class="eyebrow text-brass-soft">
                        <span class="rule"></span>
                        Misi kami
                    </p>

                    @php($missions = $profile?->missionList() ?? [])

                    @if ($missions !== [])
                        <ol class="mt-6 space-y-5">
                            @foreach ($missions as $mission)
                                <li class="flex gap-4 border-t border-white/10 pt-5 first:border-0 first:pt-0">
                                    <span class="text-xs font-semibold text-brass tabular-nums">
                                        {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                    <p class="text-sm leading-6 text-brand-100">{{ $mission }}</p>
                                </li>
                            @endforeach
                        </ol>
                    @else
                        <p class="mt-6 text-sm leading-6 text-brand-200">
                            Profil perusahaan akan tampil di sini setelah data diisi.
                        </p>
                    @endif
                </div>
            </div>

            @php($values = $profile?->coreValueList() ?? [])

            @if ($values !== [])
                <div class="reveal mt-16 border-t border-white/10 pt-10">
                    <p class="text-[0.65rem] font-semibold tracking-[0.22em] text-brand-300 uppercase">Nilai inti</p>

                    <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($values as $value)
                            <div class="flex items-center gap-3">
                                <span class="h-2 w-2 rounded-full bg-brass"></span>
                                <p class="text-base font-medium text-white">{{ $value }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- Alur kerja --}}
    <section class="py-20 md:py-28">
        <div class="container-page">
            <x-section-heading
                class="reveal"
                eyebrow="Cara kerja"
                title="Dari brief ke barisan, tanpa kejutan."
                description="Empat tahap yang jelas, dengan titik persetujuan di setiap langkah agar hasil akhir tidak meleset dari ekspektasi."
            />

            @php($steps = [
                ['title' => 'Konsultasi & brief', 'body' => 'Ceritakan formasi, jumlah personel, dan warna tim. Kami bantu tentukan prioritas anggaran.'],
                ['title' => 'Spesifikasi & penawaran', 'body' => 'Susunan instrumen, bahan, dan opsi kustom dirangkum dalam penawaran yang rinci.'],
                ['title' => 'Produksi & QC', 'body' => 'Perakitan, finishing, dan pemeriksaan sebelum unit masuk ke tahap pengemasan.'],
                ['title' => 'Kirim & pendampingan', 'body' => 'Pengiriman terjadwal, plus bantuan penyesuaian saat unit tiba di lokasi.'],
            ])

            <div class="mt-12 grid gap-px overflow-hidden rounded-panel border border-line bg-line sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($steps as $step)
                    <div class="reveal bg-white p-6 sm:p-7" style="--reveal-delay: {{ $loop->index * 70 }}ms">
                        <span class="text-xs font-semibold text-brass tabular-nums">
                            {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <h3 class="mt-6 text-base font-semibold text-brand-950">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-muted">{{ $step['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Berita --}}
    <section id="berita" class="scroll-mt-24 border-y border-line bg-white py-20 md:py-28">
        <div class="container-page">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                <x-section-heading
                    class="reveal"
                    eyebrow="Kabar workshop"
                    title="Catatan dari lantai produksi."
                    description="Tips memilih perlengkapan, proses di balik pesanan, dan hal-hal yang perlu diketahui sebelum mengunci jadwal."
                />

                <a href="{{ route('news') }}" class="link-arrow reveal shrink-0">
                    Semua berita
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <div class="mt-10">
                @if ($news->isNotEmpty())
                    @foreach ($news as $article)
                        <div class="reveal" style="--reveal-delay: {{ $loop->index * 70 }}ms">
                            <x-news-card :article="$article" />
                        </div>
                    @endforeach
                @else
                    <div class="rounded-panel border border-dashed border-brand-200 bg-paper p-10 text-center">
                        <p class="text-base font-semibold text-brand-950">Belum ada kabar baru.</p>
                        <p class="mt-2 text-sm text-muted">Ikuti update jadwal produksi lewat WhatsApp.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Kontak --}}
    <section id="kontak" class="scroll-mt-24 py-20 md:py-28">
        <div class="container-page grid gap-10 lg:grid-cols-[1fr_0.9fr] lg:gap-16">
            <div class="reveal">
                <x-section-heading
                    eyebrow="Kontak"
                    title="Siap tampil di panggung berikutnya?"
                    description="Ceritakan jumlah personel, formasi, dan warna tim. Kami bantu susun spesifikasi yang paling masuk akal untuk kebutuhan Anda."
                />

                @php($contactUrl = $profile?->whatsappUrl() ?? route('contact').'#kontak')

                <dl class="mt-10 grid gap-6 sm:grid-cols-2">
                    <div class="border-t border-line pt-4">
                        <dt class="text-[0.65rem] tracking-[0.18em] text-muted uppercase">WhatsApp</dt>
                        <dd class="mt-2 text-sm font-semibold text-brand-950">
                            <a href="{{ $contactUrl }}" @if ($profile?->whatsapp) target="_blank" rel="noopener" @endif class="transition-colors hover:text-brand-600">
                                {{ $profile?->phone ?? 'Belum tersedia' }}
                            </a>
                        </dd>
                    </div>

                    <div class="border-t border-line pt-4">
                        <dt class="text-[0.65rem] tracking-[0.18em] text-muted uppercase">Email</dt>
                        <dd class="mt-2 text-sm font-semibold text-brand-950">
                            @if ($profile?->email)
                                <a href="mailto:{{ $profile->email }}" class="transition-colors hover:text-brand-600">{{ $profile->email }}</a>
                            @else
                                Belum tersedia
                            @endif
                        </dd>
                    </div>

                    <div class="border-t border-line pt-4 sm:col-span-2">
                        <dt class="text-[0.65rem] tracking-[0.18em] text-muted uppercase">Workshop</dt>
                        <dd class="mt-2 max-w-md text-sm leading-6 text-brand-950">
                            {{ $profile?->alamat ?? 'Alamat workshop belum tersedia.' }}
                        </dd>
                    </div>

                    <div class="border-t border-line pt-4 sm:col-span-2">
                        <dt class="text-[0.65rem] tracking-[0.18em] text-muted uppercase">Jam layanan</dt>
                        <dd class="mt-2 text-sm text-brand-950">Senin–Sabtu, 08.00–17.00 WIB</dd>
                    </div>
                </dl>
            </div>

            <div class="reveal hero-surface self-start rounded-panel border border-line p-7 shadow-card sm:p-9">
                <p class="eyebrow text-brand-700">
                    <span class="rule"></span>
                    Konsultasi gratis
                </p>

                <h3 class="mt-5 text-2xl font-semibold tracking-tight text-brand-950">Mulai dari brief singkat.</h3>

                <p class="mt-3 text-sm leading-6 text-muted">
                    Tidak perlu menyiapkan dokumen panjang. Cukup beri tahu jumlah personel dan warna tim, sisanya kami bantu susun.
                </p>

                <a
                    href="{{ $contactUrl }}"
                    class="btn btn-dark mt-7 w-full"
                    @if ($profile?->whatsapp) target="_blank" rel="noopener" @endif
                >
                    Chat WhatsApp
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h12m0 0-4.5-4.5M16 10l-4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <a href="{{ route('contact') }}" class="btn btn-outline mt-3 w-full">Kirim brief lengkap</a>

                @if ($profile?->email)
                    <a href="mailto:{{ $profile->email }}" class="btn btn-outline mt-3 w-full">Kirim email</a>
                @endif

                <p class="mt-6 border-t border-line pt-4 text-xs leading-5 text-muted">
                    Dibalas pada jam kerja. Untuk kebutuhan mendesak, tulis “URGENT” di awal pesan.
                </p>
            </div>
        </div>
    </section>
@endsection

@push('head')
    @if ($profile)
        @php($structuredData = array_filter([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => $profile->name,
            'url' => route('home'),
            'email' => $profile->email,
            'telephone' => $profile->phone,
            'address' => $profile->alamat,
        ]))

        <script type="application/ld+json">{!! json_encode($structuredData, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif
@endpush
