@extends('layouts.app')

@section('title', 'Tentang — '.config('app.name', 'THORXup'))
@section('meta_description', 'Kenali THORXup: workshop perlengkapan drumband di Bandung yang menggabungkan presisi produksi, kontrol kualitas, dan identitas tim.')

@php
    $brandName = $profile?->name ?? 'THORXup';
    $missions = $profile?->missionList() ?? [];
    $values = $profile?->coreValueList() ?? [];
@endphp

@section('content')
    <x-page-hero
        eyebrow="Tentang {{ $brandName }}"
        title="Bukan sekadar alat. Ini identitas tim."
        :description="$profile?->vision"
    >
        <div class="mt-8 flex flex-wrap items-center gap-3">
            <a href="{{ route('products') }}" class="btn btn-primary">Lihat katalog</a>
            <a href="{{ route('contact') }}" class="btn btn-outline">Konsultasi</a>
        </div>
    </x-page-hero>

    <section class="py-16 md:py-24">
        <div class="container-page grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16">
            <div class="reveal">
                <p class="eyebrow text-brand-700"><span class="rule"></span>Workshop</p>
                <h2 class="mt-5 text-3xl leading-[1.1] font-semibold tracking-tight text-brand-950 sm:text-4xl">
                    Dibangun dari kebiasaan memeriksa hal kecil.
                </h2>
            </div>

            <div class="reveal space-y-5 text-base leading-7 text-muted" style="--reveal-delay: 100ms">
                <p>
                    {{ $brandName }} berawal dari satu keyakinan sederhana: penampilan tim tidak bisa dipisahkan dari kualitas perlengkapan yang dipakai setiap hari. Bunyi yang rapi, kostum yang nyaman, dan detail visual yang konsisten adalah satu paket.
                </p>
                <p>
                    Kami bekerja bersama sekolah, komunitas, dan tim performa untuk menyusun perlengkapan yang sesuai dengan formasi, anggaran, dan identitas mereka. Setiap unit dirakit dan diperiksa di workshop Bandung sebelum dikirim.
                </p>
                <p>
                    Bagi kami, kontrol kualitas bukan tahap terakhir. Ia hadir sejak pemilihan bahan, proses perakitan, hingga pendampingan setelah unit tiba di lokasi latihan.
                </p>
            </div>
        </div>
    </section>

    <section class="about-surface py-16 text-white md:py-24">
        <div class="container-page">
            <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16">
                <div class="reveal">
                    <x-section-heading
                        invert
                        eyebrow="Misi kami"
                        title="Membuat perlengkapan yang bisa diandalkan."
                        description="Tiga komitmen yang menjadi dasar setiap pesanan."
                    />
                </div>

                <div class="reveal" style="--reveal-delay: 100ms">
                    @if ($missions !== [])
                        <ol class="space-y-5">
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
                        <p class="text-sm leading-6 text-brand-200">Misi perusahaan akan tampil setelah profil brand diisi melalui panel admin.</p>
                    @endif
                </div>
            </div>

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

    <section class="py-16 md:py-24">
        <div class="container-page">
            <div class="grid gap-5 sm:grid-cols-3">
                <div class="rounded-card border border-line bg-white p-6 shadow-card">
                    <p class="text-4xl font-semibold tracking-tight text-brand-950">{{ $productCount }}</p>
                    <p class="mt-2 text-sm text-muted">Produk aktif dalam katalog</p>
                </div>
                <div class="rounded-card border border-line bg-white p-6 shadow-card">
                    <p class="text-4xl font-semibold tracking-tight text-brand-950">{{ $categoryCount }}</p>
                    <p class="mt-2 text-sm text-muted">Kategori perlengkapan</p>
                </div>
                <div class="rounded-card border border-line bg-white p-6 shadow-card">
                    <p class="text-4xl font-semibold tracking-tight text-brand-950">{{ $newsCount }}</p>
                    <p class="mt-2 text-sm text-muted">Catatan dan artikel terbit</p>
                </div>
            </div>
        </div>
    </section>

    <section class="border-t border-line bg-white py-16 md:py-20">
        <div class="container-page flex flex-col items-start justify-between gap-6 rounded-panel bg-brand-950 p-8 text-white sm:flex-row sm:items-center sm:p-10">
            <div>
                <p class="text-xl font-semibold tracking-tight">Siap menyusun identitas tim Anda?</p>
                <p class="mt-2 max-w-xl text-sm leading-6 text-brand-200">
                    Ceritakan formasi, jumlah personel, dan warna tim. Kami bantu menerjemahkannya menjadi spesifikasi yang jelas.
                </p>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-light shrink-0">Mulai konsultasi</a>
        </div>
    </section>
@endsection
