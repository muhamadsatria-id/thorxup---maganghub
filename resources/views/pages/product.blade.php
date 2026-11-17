<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_standard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-fixed-dim": "#bbc3ff", "on-secondary-fixed-variant": "#354187", "secondary-fixed": "#dee0ff", "on-error-container": "#93000a", "primary": "#1e3093", "primary-fixed-dim": "#bbc3ff", "surface-container": "#f0eded", "inverse-surface": "#303030", "primary-container": "#3949ab", "surface-container-low": "#f5f3f2", "on-primary-fixed-variant": "#2c3c9e", "on-secondary-fixed": "#01105b", "surface-container-lowest": "#ffffff", "secondary": "#4d59a0", "on-error": "#ffffff", "inverse-primary": "#bbc3ff", "outline": "#767684", "tertiary-fixed-dim": "#bdc7d4", "background": "#fbf9f8", "on-primary": "#ffffff", "on-secondary-container": "#354187", "surface-tint": "#4555b7", "secondary-container": "#a5b1ff", "on-tertiary": "#ffffff", "surface-bright": "#fbf9f8", "surface-variant": "#e4e2e1", "inverse-on-surface": "#f3f0f0", "on-surface": "#1b1c1c", "on-surface-variant": "#454652", "primary-fixed": "#dee0ff", "error-container": "#ffdad6", "on-primary-fixed": "#000e5e", "surface-dim": "#dcd9d9", "on-background": "#1b1c1c", "surface-container-highest": "#e4e2e1", "on-primary-container": "#bbc3ff", "surface": "#fbf9f8", "tertiary-fixed": "#d9e3f0", "surface-container-high": "#eae8e7", "tertiary": "#333d47", "on-secondary": "#ffffff", "error": "#ba1a1a", "outline-variant": "#c6c5d4", "tertiary-container": "#4a545e", "on-tertiary-container": "#bec8d4", "on-tertiary-fixed-variant": "#3e4852", "on-tertiary-fixed": "#131d26" }, "borderRadius": { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" }, "spacing": { "space-lg": "1.5rem", "gutter-sm": "1rem", "margin": "3rem", "space-md": "1rem", "space-xl": "2.5rem", "margin-mobile": "1.25rem", "space-2xl": "4rem", "gutter": "1.5rem", "space-sm": "0.5rem", "space-xs": "0.25rem" }, "fontFamily": { "body-lg": [ "Inter" ], "headline-lg-mobile": [ "Plus Jakarta Sans" ], "label-lg": [ "Inter" ], "display-hero": [ "Plus Jakarta Sans" ], "headline-md": [ "Plus Jakarta Sans" ], "headline-sm": [ "Plus Jakarta Sans" ], "display-hero-mobile": [ "Plus Jakarta Sans" ], "label-md": [ "Inter" ], "headline-lg": [ "Plus Jakarta Sans" ], "body-md": [ "Inter" ], "body-sm": [ "Inter" ], "label-spec": [ "Inter" ] }, "fontSize": { "body-lg": [ "18px", { "lineHeight": "28px", "fontWeight": "400" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "700" } ], "label-lg": [ "14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" } ], "display-hero": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "800" } ], "headline-md": [ "24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700" } ], "headline-sm": [ "18px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "600" } ], "display-hero-mobile": [ "36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "800" } ], "label-md": [ "12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "headline-lg": [ "36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "body-md": [ "15px", { "lineHeight": "24px", "fontWeight": "400" } ], "body-sm": [ "13px", { "lineHeight": "20px", "fontWeight": "400" } ], "label-spec": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased">@include('components.header')<main class="w-full pt-20 bg-surface min-h-screen"><div class="flex flex-col w-full">
<!-- Header & Telemetry Section -->
<section class="w-full bg-surface-container-lowest shadow-sm">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin pt-space-lg pb-space-xl">
<!-- Breadcrumb Navigation -->
<nav aria-label="Breadcrumb" class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md mb-space-md">
<a class="hover:text-primary transition-colors" href="#">Home</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<a class="hover:text-primary transition-colors" href="#">Products Catalog</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-primary font-bold">Heavy Equipment &amp; Parts</span>
</nav>
<!-- Headline & Subtitle -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg pb-space-lg">
<div class="max-w-3xl">

<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Heavy Machinery &amp; Component Inventory</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
            Explore 15,000+ certified OEM spare parts, hydraulic assemblies, powertrain units, and ground engaging tools engineered for extreme operational uptime under severe site conditions.
          </p>
</div>
<!-- Telemetry Key Metrics Strip -->
<div class="flex flex-wrap sm:flex-nowrap items-center gap-space-md p-space-sm bg-surface-container-low rounded-DEFAULT">

<div class="hidden sm:block w-px h-8 bg-outline-variant/40"></div>

<div class="hidden sm:block w-px h-8 bg-outline-variant/40"></div>

</div>
</div>
</div>
</section>
<!-- Main Catalog Architecture: 2-Column Split -->
<section class="w-full max-w-[1360px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
<div class="flex flex-col lg:flex-row gap-gutter items-start">
<!-- LEFT SIDEBAR: Filters & Hierarchy -->
<aside class="w-full lg:w-[320px] shrink-0 flex flex-col gap-space-lg lg:sticky lg:top-28">
<!-- Search Card -->
<div class="bg-surface-container-lowest p-space-md rounded-DEFAULT shadow-sm flex flex-col gap-space-sm">
<label class="font-label-spec text-label-spec text-on-surface-variant uppercase" for="catalog-search">Technical Search</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px] pointer-events-none">search</span>
<input class="w-full pl-9 pr-8 py-2 bg-surface-container-low rounded-full font-body-sm text-body-sm text-on-surface placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary/40 transition-all" id="catalog-search" placeholder="Part no., SKU, OEM fitment..." type="text">
<button aria-label="Clear Search" class="absolute right-3 text-outline hover:text-on-surface text-[14px]" type="button">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
</div>
</div>
<!-- Master Categories Selection List -->
<div class="bg-surface-container-lowest p-space-md rounded-DEFAULT shadow-sm flex flex-col gap-space-sm">
<div class="flex items-center justify-between pb-space-xs">
<span class="font-label-spec text-label-spec text-on-surface-variant uppercase">Component Categories</span>

</div>
<nav class="flex flex-col gap-1" id="categoryNav"><a class="flex items-center justify-between px-3 py-2.5 rounded-[8px] bg-primary text-on-primary font-label-md text-label-md transition-all" href="#">
  <span>All Products</span>
  <span class="text-on-primary font-label-spec text-label-spec">15,420</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-[8px] text-on-surface-variant hover:bg-surface-container font-label-md text-label-md transition-all" href="#">
  <span>Heavy Excavators</span>
  <span class="text-on-surface-variant font-label-spec text-label-spec">342</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-[8px] text-on-surface-variant hover:bg-surface-container font-label-md text-label-md transition-all" href="#">
  <span>Hydraulic Assemblies</span>
  <span class="text-on-surface-variant font-label-spec text-label-spec">580</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-[8px] text-on-surface-variant hover:bg-surface-container font-label-md text-label-md transition-all" href="#">
  <span>Powertrain &amp; Engines</span>
  <span class="text-on-surface-variant font-label-spec text-label-spec">428</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-[8px] text-on-surface-variant hover:bg-surface-container font-label-md text-label-md transition-all" href="#">
  <span>Undercarriage &amp; Tracks</span>
  <span class="text-on-surface-variant font-label-spec text-label-spec">612</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-[8px] text-on-surface-variant hover:bg-surface-container font-label-md text-label-md transition-all" href="#">
  <span>Ground Engaging (GET)</span>
  <span class="text-on-surface-variant font-label-spec text-label-spec">275</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-[8px] text-on-surface-variant hover:bg-surface-container font-label-md text-label-md transition-all" href="#">
  <span>Filtration &amp; Fluids</span>
  <span class="text-on-surface-variant font-label-spec text-label-spec">190</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-[8px] text-on-surface-variant hover:bg-surface-container font-label-md text-label-md transition-all" href="#">
  <span>Sensors &amp; Telematics</span>
  <span class="text-on-surface-variant font-label-spec text-label-spec">145</span>
</a></nav>
</div>
<!-- Faceted Technical Filters -->

</aside>
<!-- RIGHT MAIN CONTENT AREA -->
<div class="flex-1 w-full flex flex-col gap-space-lg">
<!-- Filter Toolbar & View Selector -->
<div class="bg-surface-container-lowest p-space-sm sm:p-space-md rounded-DEFAULT shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
<div class="flex flex-wrap items-center gap-space-xs">
<span class="font-body-sm text-body-sm text-on-surface-variant mr-1">Showing 1–9 of 15,420 items</span>
<!-- Active Pills -->
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-spec text-label-spec uppercase">
              All Categories
              <span class="material-symbols-outlined text-[14px] cursor-pointer hover:opacity-70">close</span>
</span>

</div>
<!-- Controls: Sort & Grid View Switcher -->
<div class="flex items-center gap-space-sm self-end sm:self-center">
<div class="flex items-center gap-1 bg-surface-container-low px-3 py-1.5 rounded-full">
<span class="font-label-spec text-label-spec text-on-surface-variant uppercase">Sort:</span>
<select class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer">
<option value="featured">Featured Telemetry</option>
<option value="power">Highest Power Output</option>
<option value="pressure">Pressure Rating (High-Low)</option>
<option value="name">Model Number (A–Z)</option>
</select>
</div>
<!-- Layout View Selector Switch -->
<div class="flex items-center bg-surface-container-low p-1 rounded-full">

<button aria-label="List View" class="p-1 rounded-full text-outline hover:text-on-surface" type="button">

</button>
</div>
</div>
</div>
<!-- 3-Column Responsive Product Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-gutter"><!-- Card 1 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Heavy industrial yellow tracked excavator performing ground excavation work at a large civil construction site during dusk with dramatic contrast, raw metallic steel structure, hydraulic boom arm in action, high fidelity engineering photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVYgSmnyt0go4wCdqzgf2dsouqmYBOBcGlV1w-imjH1EGJ6EuDCtOW73bLEeONQS_hzfmZRI_GDL4SDSNka7aoHjOw-0bjPojmmedYEUVF825zgCqhbSJXDWx5s5L19jWJILCGQczjDqICW8Yw54whH3TZji8lfyI2bF9ivJJQk0yf_Nscu4J8h4AQ1zwxnsLEx8j74-p7PfHvrRqmTcblDmKOYJkBWM-qt1DFt3eg">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Heavy Excavators</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">THORX-X950 Heavy Excavator</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div>

<!-- Card 2 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Close up precision shot of an axial piston hydraulic pump and high pressure valve manifold in an industrial machine shop with steel braided hydraulic hoses, pressure gauge dials, machined metal surfaces and ambient workshop lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5Cxv5VRb1F0cEDpRvL87jSE2aQDxdHn7-6KMKtqk78bhO5YJS3py6sgZ1nX3sZKkI6hwDPcb5dwbIUpti2pm8umzIenCjJQSVT3Ty72taz6-cGtXRM3VhML-k--WlPxZzMvYvqrsUr_sxKdEfNyhcYwyeHZewX5h572nOrn2yRqt54sd5PnaTo7_L0Ya0QGjlZ2rJjw9X4nDrNZsDRLZ1NzzMbWctbo0nCNWOSXHy">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Hydraulic Assemblies</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">HP-4200 Axial Piston Pump</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div>

<!-- Card 3 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Heavy steel excavator crawler track and undercarriage on repair stands inside heavy machinery assembly facility, massive steel track links, rollers, drive sprockets, dark cast iron tones and industrial lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsyaE9NPDv_5qVbUhY9r5zgcIWHYKYK-ce0clowY3uSKCbfowKgv87TTmO02qtBBDBHW7sXZKF7MsAoVmLo1D9WGASUxHUgmT5j21T-6Ru5q36DROLCh-osdHur0Wsd5uYnFNGlJhlcgl7QA2pjFf2-_6nfKc_PjmGV_YcHkF5GR9hK2hMGpiqanyyPioxMrTp0ai2WEBUMBGzhKh6t7zhSG90ARwH5hHtsjFVVayW">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Undercarriage &amp; Tracks</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">DuraTrack Master Link Assembly</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div>

<!-- Card 4 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Massive industrial diesel engine and heavy powertrain transmission assembly exposed with precision steel gears, drive shafts, turbocharger manifolds in an engineering rebuild workshop." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDq4Jc5j-641ejHH3YVIzJ0qStQwY07uUk3-UohWyWwfWa27sb7V2vU2amBgSQS3mJ3KqUS9O2yvAANNmNg7aZazYM1p6Xlyef5JYxDfnaGApkNQTtzznja6hD_50bB_nSaghKtbPxctZKKLxJR_K5ibWdQLO9t1ucq4uF8oy9-N1xVDY7YCnsJaIz21Pnc1nS7c7QrUOkXEJ3NOFuSofYSF-OSsFC5PejDWNg1bP_7">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Powertrain &amp; Engines</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">V8 TurboDiesel Heavy Block</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div>

<!-- Card 5 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Wide angle landscape shot of active earthmoving construction site at sunset with heavy excavators, dump trucks, cranes and infrastructure framing in industrial atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQnYVXXQvE7XKhIBx0JEgWcT1tHqjIe079BJghZluQbxjq7I6YJSbZcRjAxVlE3Euch2cz1qQ-ZyNg9piAXp_g69r86-VOr1YINLz0nbSTSyqsjb6myWdE79W5DpZHx7bPOdEHFfV9ps9xc0JvB8-7zQg3dQKsGsRUiOy2bdxzMAUMN4aWLOicy6h9d_Om_L3jk81yFVP1oeN4w76iAvWmOv12qU3au4h1Ft5tmgTn">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Compact Machinery</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">Vulcan-600 Compact Crawler</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div>

<!-- Card 6 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Intricate hydraulic manifold valve block with CNC machined aluminum channels, solenoid control switches, and high pressure steel couplings arranged on a clean industrial benchtop." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmkyEXx96JRKi0VkhC7t9z-lo09FJhRGqj--M7STPcjDnIJiWOFDY-b574Qobr7j_v-m9zeh7sk9zfHJLdoNSyLY7x7hpEwxKk1nmORJJyb7rpkCvPpy5GRB25MLggeqUTsfc3de0MZN_C1sa6kbO0N5N7S6cukLZVjE9MsZrfAxqaTOMRoIWZyoXbmmzL3MFP43Sz3X83iLm15Xs8l7uJL4At5pL-Uf-Xje1Eho4_">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Hydraulic Assemblies</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">ApexFlow Monoblock Valve Block</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div>

<!-- Card 7 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Heavy industrial transmission planetary gearbox cutaway displaying heavy steel helical gears, roller bearings, and forged alloy shaft in a technical laboratory setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaimviFOPCUNMlos-X62cyhLFUfMlgK770gsSO1fGaljkCjkPYjEwIT-LjvQRNdnFDZBBP2Uhn1U-goZqZJp1OiRrRfMLkUWC3uabKK6p-xDgMGmkz3I6nAvV6tXIdz1ATMAzEAPIiLgJCcu8_ngzGrMrWPwPc_5QygMxkigSMeFuC0WIGLNaF64ZcoKj54z-oX0aF7aC6gQlcrlgg_aNAViA7qF2U0pANsQY90V2e">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Powertrain &amp; Engines</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">TitanGear Planetary Reduction</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div>

<!-- Card 8 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Heavy steel drive sprockets and track rim wheels for 50-ton earthmoving equipment, precision machined tooth profiles with flame hardened induction edges sitting on heavy manufacturing factory floor." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1N0D3btHtxhDevj4uJZl7ZzS9YfTGTW9Ty7Hkzmz76TWiox4Er6K3mZadrYPyDCZf0RPX-0scqCkkX_Ko0q-p3FQt2ersusaWCIPchNpGLR6DJVn9qPo6gRoxKVLk4e4iUk2jDLyQflxHsXKVHGOcVaxKagTMDcTZg8iVWCo-Nk7tU_nWb__25CzEW7P4sycUExpTs2ymod_Mml_Y8ADe5y8CX0dZjGshkVjONXv8">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Undercarriage &amp; Tracks</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">ArmorSprocket Segmented Wheel</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div>

<!-- Card 9 -->
<div class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col border border-outline-variant/30">
  <div class="relative w-full h-52 overflow-hidden bg-surface-container shrink-0">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Heavy hydraulic cylinder testing bench with high pressure steel cylinder piston rod extended, showing high polish mirror chrome finish and industrial hydraulic pressure lines in engineering facility." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJ77aBnpUsGXrcNiUZrjWsTDorhCU_NxnXNpshGrf53F17huhQbrp1bEdYg0LNMkCztHsqtrD3pOnmGu8CtzGsN6PnUL7PsS47IaIo3KHVTdkALBXZzUmrj_WBoqFYKaXednF33sn0k10zn6DZnoJRH8cD_5zT-6ZgM_8A69_IrffggdO1fL4e_XXQmx3z-WnuRQ0in2uy1ROde9LTCmDyAT66Q1rw9HljEga7sDWb">
  </div>
  <div class="p-space-md flex-1 flex flex-col justify-between">
    <div class="flex flex-col gap-space-xs">
      <span class="font-label-spec text-label-spec text-secondary uppercase font-bold tracking-wider">Hydraulic Assemblies</span>
      <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">HydroCyl Heavy Boom Cylinder</h3>
    </div>
    <div class="mt-space-md pt-space-xs">
      <a href="#" class="inline-flex items-center gap-1 text-primary font-semibold text-label-md hover:underline">
        View Details
        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
      </a>
    </div>
  </div>
</div></div>
<!-- Catalog Pagination Bar -->
<div class="bg-surface-container-lowest p-space-md rounded-DEFAULT shadow-sm flex flex-col sm:flex-row items-center justify-between gap-space-md mt-space-xs">
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Page <span class="font-bold text-on-surface">1</span> of <span class="font-bold text-on-surface">128</span> (Showing 9 of 15,420 components)
          </p>
<div class="flex items-center gap-1">
<button class="px-3 py-1.5 rounded-full bg-surface-container text-outline hover:text-on-surface font-label-md text-label-md flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
              Previous
            </button>
<button class="w-8 h-8 rounded-full bg-primary text-on-primary font-label-md text-label-md font-bold" type="button">1</button>
<button class="w-8 h-8 rounded-full hover:bg-surface-container text-on-surface font-label-md text-label-md" type="button">2</button>
<button class="w-8 h-8 rounded-full hover:bg-surface-container text-on-surface font-label-md text-label-md" type="button">3</button>
<span class="px-1 text-outline font-label-md text-label-md">...</span>
<button class="w-8 h-8 rounded-full hover:bg-surface-container text-on-surface font-label-md text-label-md" type="button">128</button>
<button class="px-3 py-1.5 rounded-full bg-surface-container hover:bg-surface-variant text-on-surface font-label-md text-label-md flex items-center gap-1" type="button">
              Next
              <span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Bottom Technical Engineering Advisory CTA Card -->
<section class="w-full max-w-[1360px] mx-auto px-margin-mobile lg:px-margin pb-space-2xl">
<div class="relative overflow-hidden bg-primary text-on-primary rounded-xl p-space-lg lg:p-space-xl shadow-xl flex flex-col lg:flex-row items-start lg:items-center justify-between gap-space-lg">
<div class="absolute -right-16 -top-16 w-80 h-80 rounded-full bg-secondary-container/20 blur-3xl pointer-events-none"></div>
<div class="max-w-2xl relative z-10">

<h2 class="font-headline-lg text-headline-lg font-bold tracking-tight">Need Custom Hydraulic or OEM Fitment Verification?</h2>
<p class="font-body-md text-body-md text-on-primary-container mt-space-xs">
          Our senior heavy mechanical applications team can analyze your machinery serial numbers, calculate flow-pressure curves, or specify certified replacement parts for obsolete equipment.
        </p>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-md shrink-0 w-full lg:w-auto relative z-10">
<a class="px-space-lg py-3 rounded-full bg-surface-container-lowest text-primary hover:bg-secondary-fixed text-center font-label-lg text-label-lg font-bold transition-all shadow-md" href="#">Contact Me<br></a>

</div>
</div>
</section>
</div></main><footer class="w-full bg-primary text-on-primary mt-space-2xl pt-space-2xl pb-space-xl relative overflow-hidden"><div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div><div class="relative z-10 max-w-[1360px] mx-auto px-margin-mobile lg:px-margin"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-gutter"><div class="lg:col-span-4 flex flex-col gap-space-md"><div class="flex flex-col gap-space-sm"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Follow us</h4><div class="flex items-center gap-space-md"><a aria-label="Instagram" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a><a aria-label="Facebook" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg></a><a aria-label="TikTok" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31 0 2.6.43 3.65 1.22.09.07.18.15.26.23.02.02.04.05.07.07 1.09.97 1.75 2.37 1.78 3.86v.44c1.17-.38 2.41-.45 3.64-.2v3.31c-.96.08-1.91-.07-2.81-.44-.39-.16-.76-.36-1.1-.6v8.83c0 4.01-3.26 7.26-7.27 7.26-4.02 0-7.27-3.25-7.27-7.26 0-3.9 3.08-7.07 6.94-7.24.36-.02.73 0 1.09.07v3.42c-.36-.08-.73-.09-1.09-.04-2.1.25-3.66 2.04-3.61 4.15.05 2.08 1.76 3.75 3.84 3.75 2.12 0 3.84-1.72 3.84-3.84V0h-3.13z"></path></svg></a><a aria-label="LinkedIn" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg></a></div></div><p class="font-body-md text-body-md text-on-primary-container max-w-sm mt-space-xs">Heavy industrial machinery, advanced powertrain architectures, and precision hydraulic systems engineered for global infrastructure operations.</p></div><div class="lg:col-span-2 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Quick Links</h4><ul class="flex flex-col gap-space-sm"><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="home" href="#">Home</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="products" href="#">Product Catalog</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="about-us" href="#">About Us</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="news" href="#">News &amp; Insights</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="contact" href="#">Technical Support</a></li></ul></div><div class="lg:col-span-3 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Products</h4><ul class="flex flex-col gap-space-sm"><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="heavy-machinery" href="#">Heavy Machinery Units</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="hydraulic-systems" href="#">High-Pressure Hydraulics</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="spare-parts" href="#">OEM Spare Parts</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="powertrain" href="#">Powertrain Assemblies</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="products" href="#">All Catalogs</a></li></ul></div><div class="lg:col-span-3 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Global Headquarters</h4><p class="font-body-sm text-body-sm text-on-primary-container">4800 Industrial Parkway, Sector 9<br>Heavy Engineering Corridor<br>Detroit, MI 48202</p><div class="flex flex-col gap-space-xs pt-space-xs"><span class="font-label-spec text-label-spec text-secondary-fixed uppercase tracking-wider font-semibold">Direct Contact</span><p class="font-body-sm text-body-sm text-on-primary-container">+1 (800) 846-7987 • rfq-desk@thorxup-machinery.com</p></div></div></div><div class="pt-space-2xl pb-space-md select-none pointer-events-none overflow-hidden flex items-center justify-between gap-space-lg tracking-tighter leading-none opacity-20 hover:opacity-30 transition-opacity"><div class="flex items-baseline shrink-0"><span class="font-display-hero text-[64px] sm:text-[96px] md:text-[120px] lg:text-[148px] font-black text-on-primary uppercase tracking-tighter">THORX</span><span class="font-display-hero text-[32px] sm:text-[48px] md:text-[60px] lg:text-[76px] font-black text-secondary-fixed uppercase tracking-wider -translate-y-4 md:-translate-y-8 ml-1">up</span></div><div class="flex-1 h-1 bg-secondary-fixed/40 rounded-full"></div></div><div class="mt-space-2xl pt-space-lg border-t border-primary-container flex flex-col sm:flex-row items-center justify-between gap-space-md"><p class="font-body-sm text-body-sm text-on-primary-container">© 2026 THORXup Heavy Machinery Ltd. All rights reserved.</p><div class="flex items-center gap-space-lg"><a class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors" data-path="privacy-policy" href="#">Privacy Policy</a><a class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors" data-path="terms-of-service" href="#">Terms of Service</a></div></div></div></footer>


</body></html>