@props(['class' => 'h-10 w-10'])

<svg {{ $attributes->merge(['class' => $class.' shrink-0', 'viewBox' => '0 0 40 40']) }} aria-hidden="true">
    <rect width="40" height="40" rx="12" fill="#101530"/>
    <circle cx="20" cy="20" r="9.5" fill="none" stroke="#b9832f" stroke-width="1.8"/>
    <circle cx="20" cy="20" r="6" fill="none" stroke="#f6f7fb" stroke-width="0.9" opacity="0.35"/>
    <path d="M20 10.5v19M10.5 20h19M13.3 13.3l13.4 13.4M26.7 13.3 13.3 26.7" stroke="#f6f7fb" stroke-width="0.9" opacity="0.45"/>
    <circle cx="20" cy="20" r="2.4" fill="#b9832f"/>
</svg>
