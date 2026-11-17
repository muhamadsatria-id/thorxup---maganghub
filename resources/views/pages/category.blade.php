@extends('layouts.app')

@section('title', 'Kategori Produk — '.config('app.name', 'THORXup'))
@section('meta_description', 'Jelajahi kategori perawatan logam Throx Up: protective coating, surface treatment, corrosion inhibitor, industrial cleaner, metal reconditioning, dan maintenance support.')

@section('content')
    <x-page-hero
        eyebrow="Kategori"
        title="Mulai dari kebutuhan, bukan dari daftar harga."
        description="Setiap kategori disusun untuk peran tertentu dalam barisan. Pilih kategori untuk melihat produk, spesifikasi, dan opsi kustom yang tersedia."
    />

    <section class="py-14 md:py-20">
        <div class="container-page">
            @if ($categories->isNotEmpty())
                <div class="grid gap-5 lg:grid-cols-2 xl:grid-cols-3">
                    @foreach ($categories as $category)
                        <x-card-category
                            :category="$category"
                            class="reveal"
                            style="--reveal-delay: {{ min($loop->index, 5) * 60 }}ms"
                        />
                    @endforeach
                </div>
            @else
                <div class="rounded-panel border border-dashed border-brand-200 bg-white p-10 text-center">
                    <p class="text-lg font-semibold text-brand-950">Kategori belum tersedia.</p>
                    <p class="mt-2 text-sm text-muted">Hubungi tim untuk melihat pilihan produk yang sedang tersedia.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-6">Hubungi tim</a>
                </div>
            @endif

            <div class="mt-14 flex flex-col items-start justify-between gap-5 rounded-panel bg-brand-950 p-8 text-white sm:flex-row sm:items-center">
                <div>
                    <p class="text-lg font-semibold tracking-tight">Belum yakin harus mulai dari mana?</p>
                    <p class="mt-1 text-sm text-brand-200">Kirim daftar personel dan formasi. Kami bantu susun kombinasi yang paling efisien.</p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-light shrink-0">Konsultasi gratis</a>
            </div>
        </div>
    </section>
@endsection
