@props([
    'model' => null,
    'title' => null,
    'description' => null,
    'image' => null,
    'robots' => null,
])

@php
    $seo = is_object($model) ? $model->seo : null;

    $finalTitle = $seo?->title
        ?? ($title ?: config('app.name', 'THORXup').' — Perawatan Permukaan Logam Industri');

    $finalDesc = $seo?->description
        ?? $description
        ?? 'Throx Up menghadirkan produk perawatan, perlindungan, dan rekondisi permukaan logam untuk industri manufaktur dan pemeliharaan mesin.';

    $finalCanonical = $seo?->canonical_url ?? url()->current();

    // Prioritas robots: Props manual -> Query string (page/filter) -> Database SEO -> Default
    $finalRobots = $robots 
        ?? (request()->query() ? 'noindex, follow' : ($seo?->robots ?? 'index, follow'));

    if (!app()->isProduction()) {
        $finalRobots = 'noindex, nofollow';
    }

    $rawImage = $seo?->og_image ?? $image ?? 'images/hero.jpg';
    $finalImage = str_starts_with($rawImage, 'http') ? $rawImage : asset($rawImage);
@endphp

<title>{{ $finalTitle }}</title>
<meta name="description" content="{{ $finalDesc }}">
@if($seo?->keywords)
<meta name="keywords" content="{{ $seo->keywords }}">
@endif
<meta name="robots" content="{{ $finalRobots }}">
<link rel="canonical" href="{{ $finalCanonical }}">

<!-- Open Graph / Facebook / WhatsApp -->
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:type" content="{{ $model ? 'article' : 'website' }}">
<meta property="og:url" content="{{ $finalCanonical }}">
<meta property="og:title" content="{{ $finalTitle }}">
<meta property="og:description" content="{{ $finalDesc }}">
<meta property="og:image" content="{{ $finalImage }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $finalTitle }}">
<meta name="twitter:description" content="{{ $finalDesc }}">
<meta name="twitter:image" content="{{ $finalImage }}">

<!-- Schema.org JSON-LD -->
@if($seo?->schema_json)
<script type="application/ld+json">
    {!! json_encode($seo->schema_json, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif