@extends('layouts.app')

@section('title', 'Berita — '.config('app.name', 'THORXup'))
@section('meta_description', 'Kabar workshop, tips perawatan, dan catatan produksi perlengkapan drumband dari tim THORXup.')

@section('content')
    <x-page-hero
        eyebrow="Berita"
        title="Catatan dari workshop dan lapangan."
        description="Tips memilih perlengkapan, proses di balik pesanan, dan hal-hal yang perlu diketahui sebelum mengunci jadwal produksi."
    />

    <section class="py-14 md:py-20">
        <div class="container-page grid gap-10 lg:grid-cols-[1fr_19rem] lg:gap-14">
            <div>
                @if ($news->isNotEmpty())
                    <div class="divide-y divide-line">
                        @foreach ($news as $article)
                            <x-news-card :article="$article" class="reveal" style="--reveal-delay: {{ min($loop->index, 5) * 50 }}ms" />
                        @endforeach
                    </div>

                    <div class="mt-10">
                        {{ $news->links() }}
                    </div>
                @else
                    <div class="rounded-panel border border-dashed border-brand-200 bg-white p-10 text-center">
                        <p class="text-lg font-semibold text-brand-950">Belum ada berita.</p>
                        <p class="mt-2 text-sm text-muted">Kabar terbaru dari workshop akan tampil di sini.</p>
                    </div>
                @endif
            </div>

            <aside class="space-y-6">
                <div class="rounded-card border border-line bg-white p-5 shadow-card">
                    <p class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Butuh informasi cepat?</p>
                    <p class="mt-2 text-sm leading-6 text-ink/80">Tanyakan jadwal produksi, stok, atau spesifikasi langsung ke tim kami.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-4 w-full">Hubungi tim</a>
                </div>

                <div class="rounded-card border border-line bg-white p-5 shadow-card">
                    <p class="text-[0.62rem] font-semibold tracking-[0.18em] text-muted uppercase">Kategori produk</p>
                    <p class="mt-2 text-sm leading-6 text-ink/80">Telusuri perlengkapan berdasarkan kebutuhan tim.</p>
                    <a href="{{ route('categories') }}" class="link-arrow mt-4">Lihat kategori</a>
                </div>
            </aside>
        </div>
    </section>
@endsection
