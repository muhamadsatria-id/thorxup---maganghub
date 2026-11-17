<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'THORXup').' — Perlengkapan Drumband')</title>
    <meta name="description" content="@yield('meta_description', 'THORXup memproduksi perlengkapan drumband: snare, bass, tenor, cymbal, dan kostum performa dengan kontrol kualitas di setiap tahap.')">
    <meta name="theme-color" content="#1e3093">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name', 'THORXup') }}">
    <meta property="og:title" content="@yield('title', config('app.name', 'THORXup').' — Perlengkapan Drumband')">
    <meta property="og:description" content="@yield('meta_description', 'THORXup memproduksi perlengkapan drumband: snare, bass, tenor, cymbal, dan kostum performa dengan kontrol kualitas di setiap tahap.')">
    <meta property="og:image" content="{{ asset('images/hero.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">

    <script>document.documentElement.classList.add('js');</script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="flex min-h-screen flex-col bg-surface font-body-md text-on-surface antialiased">
    <a href="#main" class="skip-link">Lewati ke konten utama</a>

    @include('components.header')

    @if (session('status'))
        <div class="border-b border-emerald-200 bg-emerald-50 text-emerald-950" role="status">
            <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin flex items-start gap-3 py-3.5 text-sm font-medium">
                <svg class="mt-0.5 h-4 w-4 shrink-0" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="m4 10.5 3.5 3.5L16 5.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p>{{ session('status') }}</p>
            </div>
        </div>
    @endif

    <main id="main" class="w-full flex-1 bg-surface pt-20 min-h-screen">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
