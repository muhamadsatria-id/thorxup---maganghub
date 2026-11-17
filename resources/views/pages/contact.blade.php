@extends('layouts.app')

@section('title', 'Kontak — '.config('app.name', 'THORXup'))
@section('meta_description', 'Hubungi Throx Up untuk konsultasi perawatan permukaan logam, penawaran produk, dan dukungan teknis aplikasi.')

@php
    $brandName = $profile?->name ?? 'THORXup';
    $whatsappUrl = $profile?->whatsappUrl('Halo '.$brandName.', saya ingin konsultasi perawatan permukaan logam industri.');
    $socials = $profile?->socialLinks() ?? [];
@endphp

@section('content')
    <x-page-hero
        eyebrow="Kontak"
        title="Ceritakan kebutuhan tim Anda."
        description="Isi brief singkat di bawah atau hubungi kami langsung. Tim akan membantu menyusun spesifikasi, estimasi, dan jadwal produksi."
    />

    <section id="kontak" class="scroll-mt-24 py-14 md:py-20">
        <div class="container-page grid gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:gap-16">
            <div class="space-y-8">
                <div>
                    <p class="eyebrow text-brand-700"><span class="rule"></span>Hubungi langsung</p>
                    <h2 class="mt-4 text-2xl font-semibold tracking-tight text-brand-950">Kami membalas pada jam kerja.</h2>
                    <p class="mt-3 text-sm leading-6 text-muted">
                        Untuk kebutuhan mendesak, tulis “URGENT” di awal pesan agar tim bisa memprioritaskan.
                    </p>
                </div>

                <dl class="grid gap-5 sm:grid-cols-2">
                    @if ($whatsappUrl)
                        <div class="border-t border-line pt-4 sm:col-span-2">
                            <dt class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">WhatsApp</dt>
                            <dd class="mt-2 text-sm font-semibold text-brand-950">
                                <a href="{{ $whatsappUrl }}" class="hover:text-brand-600" target="_blank" rel="noopener">{{ $profile?->phone ?? 'Chat WhatsApp' }}</a>
                            </dd>
                        </div>
                    @endif

                    @if ($profile?->email)
                        <div class="border-t border-line pt-4">
                            <dt class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Email</dt>
                            <dd class="mt-2 text-sm font-semibold text-brand-950">
                                <a href="mailto:{{ $profile->email }}" class="hover:text-brand-600">{{ $profile->email }}</a>
                            </dd>
                        </div>
                    @endif

                    @if ($profile?->phone)
                        <div class="border-t border-line pt-4">
                            <dt class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Telepon</dt>
                            <dd class="mt-2 text-sm font-semibold text-brand-950">
                                <a href="{{ $profile->phoneUrl() }}" class="hover:text-brand-600">{{ $profile->phone }}</a>
                            </dd>
                        </div>
                    @endif

                    <div class="border-t border-line pt-4 sm:col-span-2">
                        <dt class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Workshop</dt>
                        <dd class="mt-2 text-sm leading-6 text-brand-950">{{ $profile?->alamat ?? 'Alamat workshop belum tersedia.' }}</dd>
                        @if ($profile?->maps_link)
                            <a href="{{ $profile->maps_link }}" class="link-arrow mt-2" target="_blank" rel="noopener">Buka di peta</a>
                        @endif
                    </div>

                    <div class="border-t border-line pt-4 sm:col-span-2">
                        <dt class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Jam layanan</dt>
                        <dd class="mt-2 text-sm text-brand-950">Senin–Sabtu, 08.00–17.00 WIB</dd>
                    </div>
                </dl>

                @if ($socials !== [])
                    <div class="border-t border-line pt-6">
                        <p class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Ikuti workshop</p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            @foreach ($socials as $social)
                                <a href="{{ $social['url'] }}" class="rounded-full border border-line bg-white px-3 py-1.5 text-xs font-medium text-muted transition hover:border-brand-300 hover:text-brand-700" target="_blank" rel="noopener">
                                    {{ $social['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <div class="rounded-panel border border-line bg-white p-6 shadow-card sm:p-8">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="text-lg font-semibold tracking-tight text-brand-950">Kirim brief</p>
                        <p class="mt-1 text-sm text-muted">Semua pesan masuk ke panel admin THORXup.</p>
                    </div>
                    <span class="rounded-full bg-brand-50 px-3 py-1 text-[0.62rem] font-semibold tracking-[0.14em] text-brand-700 uppercase">Gratis</span>
                </div>

                @if ($errors->any())
                    <div class="mt-5 rounded-xl border border-rose-200 bg-rose-50 p-4 text-sm text-rose-700" role="alert">
                        Ada beberapa kolom yang perlu diperiksa kembali.
                    </div>
                @endif

                <div class="mt-6">
                    <x-contact-form :products="$products" :profile="$profile" />
                </div>
            </div>
        </div>
    </section>
@endsection
