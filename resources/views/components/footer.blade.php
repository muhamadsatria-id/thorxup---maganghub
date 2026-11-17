@php
    $brandName = $profileBrand?->name ?? config('app.name', 'THORXup');
    $whatsappUrl = $profileBrand?->whatsappUrl('Halo '.$brandName.', saya ingin konsultasi perlengkapan drumband.');
    $socials = $profileBrand?->socialLinks() ?? [];
@endphp

<footer class="about-surface text-white">
    <div class="container-page py-16 md:py-20">
        <div class="grid gap-12 lg:grid-cols-[1.4fr_1fr_1fr]">
            <div>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3" aria-label="{{ $brandName }} — beranda">
                    <x-brand-mark class="h-10 w-10" />
                    <span class="text-[1.05rem] font-semibold tracking-tight text-white">
                        {{ $brandName }}<span class="text-brass">.</span>
                    </span>
                </a>

                <p class="mt-5 max-w-sm text-sm leading-6 text-brand-200">
                    Perlengkapan drumband yang dirancang untuk bunyi yang rapi, tampilan yang berani, dan performa yang bertahan.
                </p>

                @if ($profileBrand?->alamat)
                    <p class="mt-5 max-w-sm text-sm leading-6 text-brand-300">
                        {{ $profileBrand->alamat }}
                    </p>
                @endif

                @if ($socials !== [])
                    <div class="mt-6 flex flex-wrap gap-2">
                        @foreach ($socials as $social)
                            <a
                                href="{{ $social['url'] }}"
                                target="_blank"
                                rel="noopener"
                                class="rounded-full border border-white/15 px-3 py-1.5 text-xs font-medium text-brand-100 transition-colors hover:border-brass/60 hover:text-white"
                            >
                                {{ $social['label'] }}
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

            <div>
                <p class="eyebrow text-brass-soft"><span class="rule"></span>Navigasi</p>
                <ul class="mt-5 space-y-3 text-sm text-brand-100">
                    <li><a class="transition-colors hover:text-white" href="{{ route('home') }}">Beranda</a></li>
                    <li><a class="transition-colors hover:text-white" href="{{ route('about') }}">Tentang</a></li>
                    <li><a class="transition-colors hover:text-white" href="{{ route('products') }}">Produk</a></li>
                    <li><a class="transition-colors hover:text-white" href="{{ route('categories') }}">Kategori</a></li>
                    <li><a class="transition-colors hover:text-white" href="{{ route('news') }}">Berita</a></li>
                    <li><a class="transition-colors hover:text-white" href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>

            <div>
                <p class="eyebrow text-brass-soft"><span class="rule"></span>Kontak</p>
                <ul class="mt-5 space-y-3 text-sm text-brand-100">
                    @if ($whatsappUrl)
                        <li><a class="transition-colors hover:text-white" href="{{ $whatsappUrl }}" target="_blank" rel="noopener">WhatsApp</a></li>
                    @endif
                    @if ($profileBrand?->phone)
                        <li><a class="transition-colors hover:text-white" href="{{ $profileBrand->phoneUrl() }}">{{ $profileBrand->phone }}</a></li>
                    @endif
                    @if ($profileBrand?->email)
                        <li><a class="transition-colors hover:text-white" href="mailto:{{ $profileBrand->email }}">{{ $profileBrand->email }}</a></li>
                    @endif
                    @if ($profileBrand?->maps_link)
                        <li><a class="transition-colors hover:text-white" href="{{ $profileBrand->maps_link }}" target="_blank" rel="noopener">Lihat lokasi workshop</a></li>
                    @endif
                    <li class="text-brand-300">Senin–Sabtu, 08.00–17.00 WIB</li>
                </ul>
            </div>
        </div>

        <div class="mt-14 flex flex-col gap-3 border-t border-white/10 pt-6 text-xs text-brand-300 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} {{ $brandName }}. Seluruh hak cipta.</p>
            <p>Dirancang dan dirakit di Bandung.</p>
        </div>
    </div>
</footer>
