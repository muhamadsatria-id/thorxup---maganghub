<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_standard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-fixed-dim": "#bbc3ff", "on-secondary-fixed-variant": "#354187", "secondary-fixed": "#dee0ff", "on-error-container": "#93000a", "primary": "#1e3093", "primary-fixed-dim": "#bbc3ff", "surface-container": "#f0eded", "inverse-surface": "#303030", "primary-container": "#3949ab", "surface-container-low": "#f5f3f2", "on-primary-fixed-variant": "#2c3c9e", "on-secondary-fixed": "#01105b", "surface-container-lowest": "#ffffff", "secondary": "#4d59a0", "on-error": "#ffffff", "inverse-primary": "#bbc3ff", "outline": "#767684", "tertiary-fixed-dim": "#bdc7d4", "background": "#fbf9f8", "on-primary": "#ffffff", "on-secondary-container": "#354187", "surface-tint": "#4555b7", "secondary-container": "#a5b1ff", "on-tertiary": "#ffffff", "surface-bright": "#fbf9f8", "surface-variant": "#e4e2e1", "inverse-on-surface": "#f3f0f0", "on-surface": "#1b1c1c", "on-surface-variant": "#454652", "primary-fixed": "#dee0ff", "error-container": "#ffdad6", "on-primary-fixed": "#000e5e", "surface-dim": "#dcd9d9", "on-background": "#1b1c1c", "surface-container-highest": "#e4e2e1", "on-primary-container": "#bbc3ff", "surface": "#fbf9f8", "tertiary-fixed": "#d9e3f0", "surface-container-high": "#eae8e7", "tertiary": "#333d47", "on-secondary": "#ffffff", "error": "#ba1a1a", "outline-variant": "#c6c5d4", "tertiary-container": "#4a545e", "on-tertiary-container": "#bec8d4", "on-tertiary-fixed-variant": "#3e4852", "on-tertiary-fixed": "#131d26" }, "borderRadius": { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" }, "spacing": { "space-lg": "1.5rem", "gutter-sm": "1rem", "margin": "3rem", "space-md": "1rem", "space-xl": "2.5rem", "margin-mobile": "1.25rem", "space-2xl": "4rem", "gutter": "1.5rem", "space-sm": "0.5rem", "space-xs": "0.25rem" }, "fontFamily": { "body-lg": [ "Inter" ], "headline-lg-mobile": [ "Plus Jakarta Sans" ], "label-lg": [ "Inter" ], "display-hero": [ "Plus Jakarta Sans" ], "headline-md": [ "Plus Jakarta Sans" ], "headline-sm": [ "Plus Jakarta Sans" ], "display-hero-mobile": [ "Plus Jakarta Sans" ], "label-md": [ "Inter" ], "headline-lg": [ "Plus Jakarta Sans" ], "body-md": [ "Inter" ], "body-sm": [ "Inter" ], "label-spec": [ "Inter" ] }, "fontSize": { "body-lg": [ "18px", { "lineHeight": "28px", "fontWeight": "400" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "700" } ], "label-lg": [ "14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" } ], "display-hero": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "800" } ], "headline-md": [ "24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700" } ], "headline-sm": [ "18px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "600" } ], "display-hero-mobile": [ "36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "800" } ], "label-md": [ "12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "headline-lg": [ "36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "body-md": [ "15px", { "lineHeight": "24px", "fontWeight": "400" } ], "body-sm": [ "13px", { "lineHeight": "20px", "fontWeight": "400" } ], "label-spec": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ] } } } };</script></head><body class="font-body-md text-on-surface antialiased bg-surface-container-low">@include('components.header')<main class="w-full pt-20 min-h-screen bg-surface-container-low"><div class="flex flex-col w-full">
<!-- BREADCRUMB STRIP -->
<section class="w-full bg-surface-container-low pt-space-lg pb-space-md">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md overflow-x-auto whitespace-nowrap">
<a class="hover:text-primary transition-colors flex items-center gap-1" data-path="home" href="#">
<span class="material-symbols-outlined text-[16px]">home</span>
<span>Home</span>
</a>
<span class="material-symbols-outlined text-[14px] text-outline-variant">chevron_right</span>
<a class="hover:text-primary transition-colors" data-path="news" href="#">News &amp; Insights</a>
<span class="material-symbols-outlined text-[14px] text-outline-variant">chevron_right</span>
<span class="text-primary font-semibold truncate max-w-xs md:max-w-md">Next-Gen Hydraulic Systems Reducing Fuel Consumption</span>
</div>
</section>
<!-- MAIN EDITORIAL CONTENT GRID -->
<section class="w-full py-space-xl bg-surface-container-low">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
<!-- LEFT COLUMN: ARTICLE DETAIL (~70% width -> 8 cols) -->
<article class="lg:col-span-8 flex flex-col gap-space-lg">
<!-- ARTICLE HEADER -->
<header class="flex flex-col gap-space-md">

<h1 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight leading-tight">
              THORXup Unveils Next-Gen Hydraulic Systems Reducing Fuel Consumption by 18%
            </h1>
<!-- AUTHOR & TIMELINE META -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md py-space-sm bg-surface-container-low">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold shadow-sm">
<span class="material-symbols-outlined text-[24px]">person</span>
</div>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface font-semibold flex items-center gap-1">
                    by admin
                    <span class="material-symbols-outlined text-primary text-[16px]" title="Verified Lead Engineer">verified</span>
</span>
<div class="flex items-center gap-1.5 text-on-surface-variant font-label-md text-label-md">
<span class="material-symbols-outlined text-[15px]">schedule</span>
<span>March 12, 2026</span>
<span>•</span>
<span>5 min read</span>
</div>
</div>
</div>
<!-- TECHNICAL PART PILL -->

</div>
<!-- KEYWORD HASHTAGS -->
<div class="flex flex-wrap gap-2 pt-space-xs">
<span class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-spec text-label-spec font-semibold transition-all hover:bg-primary hover:text-on-primary cursor-pointer">#HydraulicSystems</span>
<span class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-spec text-label-spec font-semibold transition-all hover:bg-primary hover:text-on-primary cursor-pointer">#FuelEfficiency</span>
<span class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-spec text-label-spec font-semibold transition-all hover:bg-primary hover:text-on-primary cursor-pointer">#HeavyMachinery</span>
<span class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-spec text-label-spec font-semibold transition-all hover:bg-primary hover:text-on-primary cursor-pointer">#ExcavatorTechnology</span>
<span class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-spec text-label-spec font-semibold transition-all hover:bg-primary hover:text-on-primary cursor-pointer">#IndustrialEngineering</span>
<span class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-spec text-label-spec font-semibold transition-all hover:bg-primary hover:text-on-primary cursor-pointer">#OEMComponents</span>
</div>
</header>
<!-- PRIMARY FEATURED IMAGE & CAPTION -->
<figure class="flex flex-col gap-space-xs">
<div class="relative w-full aspect-[16/9] rounded-DEFAULT overflow-hidden bg-surface-container shadow-md">
<img class="w-full h-full object-cover" data-alt="High precision industrial hydraulic test bench featuring electro-proportional variable displacement pumps, manifold blocks, steel braided high pressure hoses rated for 3900 PSI, digital pressure transducers, and electric motor coupling inside an engineering assembly shop with warm technical overhead lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8lqoMdXSz0AgU3MgtwLZphNupWI1DBXZpvXj14o0qo3MsZ6E4z9I1lpQjVjYGSucL2uI-DBc53AT9l0SrCDpTlb3XWQjdwR711vJplin9gEWKoI6_9NxD9uFEUpCfNOr2m-TPbE-oUWaAkSizShbzZ4WW-FlbJb1Es52iVBlYb8kvWgT1_SY6cZWbhLhoNoXvN99cNRhzMs2vy295lBsQ7C_jBs3h6snUmnOVKL8k">

</div>
<figcaption class="font-body-sm text-body-sm text-on-surface-variant italic px-space-xs">
              Figure 1.0: Advanced electro-proportional variable displacement hydraulic bench test setup at Detroit R&amp;D facility.
            </figcaption>
</figure>
<!-- ARTICLE BODY PARAGRAPHS -->
<div class="flex flex-col gap-space-lg text-on-surface font-body-lg text-body-lg leading-relaxed">
<p>
              Rising diesel fuel expenditure and increasingly aggressive carbon mitigation mandates across global infrastructure operations have forced mining conglomerates and earthmoving contractors to scrutinize internal hydraulic dissipation. In response, THORXup Powertrain &amp; Fluid Division today confirmed the commercial release of the <strong>TX-8400 Electro-Proportional Hydraulic Architecture</strong>. Across intensive multi-week comparative benchmarking on 50-tonne class excavators, the architecture logged a verifiable <strong>18.2% reduction in net fuel consumption</strong> without compromising breakout torque or cycle speed.
            </p>
<!-- CALLOUT HIGHLIGHT METRIC -->

<h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight mt-space-sm">
              Electrochemical Proportional Fluid Dynamics
            </h2>
<p>
              Conventional heavy industrial excavators rely on mechanical load-sensing valves that introduce latency between operator joystick command and pump response. The new THORXup TX-8400 platform swaps analog orifice restrictors for micro-solenoid pulse-width modulated (PWM) proportional cartridges. Operating under continuous working pressures up to <strong>350 bar (5,076 PSI)</strong> with transient spike containment to 420 bar, the manifold automatically dampens pressure wave oscillation during rapid cyclic trenching.
            </p>
<p>
              Furthermore, integrated digital viscosity telemetry monitors synthetic hydraulic fluid shear in real-time. When ambient temperatures in sub-zero mining pits drop fluid velocity, the central control unit modifies pump displacement curves to preheat fluid via restricted recirculation channels, preventing cavitation and valve spool scoring during early morning shifts.
            </p>
<!-- SECONDARY IN-BODY IMAGE -->
<figure class="flex flex-col gap-space-xs my-space-sm">
<div class="relative w-full aspect-[16/9] rounded-DEFAULT overflow-hidden bg-surface-container shadow-md">
<img class="w-full h-full object-cover" data-alt="Heavy industrial turbo-diesel engine with exposed helical gear powertrain assembly, heavy flywheel, transmission casing, and precision machined gear teeth in an engineering manufacturing plant with an engineer working in the background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgPUWAbeTFpRE4aBdHF19eSzwgY9FlkCXEN_Ls_8gzQO3gxxNl4a-V_xAPjOIKchIFFRJeQQ-rftXKXSQjzfadSQQMBFmFyeiS3BvuHcb8Hq6SKLQ73BYzT1tp0OITOmLcfAfdTFLU3oJ9Xiiih_-aB59SeDR_fZlwotHTREd7cSpqbHlyrxamOzVxmxzVR9Qb-0AqVAgSwIcxMVhS5ass45qQ3xx_445jEFF5uPGA">

</div>
<figcaption class="font-body-sm text-body-sm text-on-surface-variant italic px-space-xs">
                Figure 2.0: Synchronized torque output matching across turbo-diesel powertrain interfaces.
              </figcaption>
</figure>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">
              Field Validation Across Mining Operations
            </h2>
<p>
              Over 2,400 hours of continuous telemetric data were captured at an iron ore extraction quarry in the Pilbara region of Western Australia. Equipped with high-frequency CAN-bus logging nodes, twin THORXup crawler excavators handled blasted basalt rock with high abrasive density. Test metrics proved that the electro-proportional variable system achieved higher bucket fill rates while dropping average hourly fuel burn from 38.4 liters down to 31.4 liters per operational hour.
            </p>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">
              Thermal Dissipation and Life Cycle Longevity
            </h2>
<p>
              Lowering hydraulic throttling losses results in immediate secondary benefits: operating oil reservoir temperatures fell by an average of 14°C throughout peak summer cycles. Because hydraulic fluid remains below its thermal degradation threshold, elastomer seal oxidation and cylinder packing degradation are extended by approximately 3,000 engine service hours, substantially reducing unscheduled field overhauls.
            </p>
</div>
<!-- SOURCE & PHOTO ATTRIBUTION -->
<div class="p-space-md rounded-DEFAULT bg-surface-container flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface-variant">
<div class="flex items-center gap-2">
<span class="font-label-spec text-label-spec text-primary font-bold uppercase tracking-wider">Source:</span>
<span class="text-on-surface">THORXup Global Engineering Whitepaper &amp; Mining Technology Journal Q1-2026</span>
</div>
<div class="flex items-center gap-2">
<span class="font-label-spec text-label-spec text-secondary font-bold uppercase tracking-wider">Photo by:</span>
<span class="text-on-surface">THORXup Heavy Industries Media Lab / Industrial Telemetry Archives</span>
</div>
</div>
<!-- SOCIAL SHARE BUTTONS BAR -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md py-space-md bg-surface-container-low px-space-lg rounded-DEFAULT">
<span class="font-label-lg text-label-lg text-on-surface font-bold uppercase tracking-wider">
              Share this article:
            </span>
<div class="flex flex-wrap items-center gap-2">
<!-- Facebook -->
<a aria-label="Share on Facebook" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center shadow-sm hover:bg-primary hover:text-on-primary transition-all" href="#">
<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
</a>
<!-- X (Twitter) -->
<a aria-label="Share on X" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center shadow-sm hover:bg-primary hover:text-on-primary transition-all" href="#">
<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
</a>
<!-- LinkedIn -->
<a aria-label="Share on LinkedIn" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center shadow-sm hover:bg-primary hover:text-on-primary transition-all" href="#">
<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
</a>
<!-- Telegram -->
<a aria-label="Share on Telegram" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center shadow-sm hover:bg-primary hover:text-on-primary transition-all" href="#">
<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.643-.204-.657-.643.136-.953l11.57-4.458c.538-.196 1.006.128.832.939z"></path></svg>
</a>
<!-- Pinterest -->
<a aria-label="Share on Pinterest" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center shadow-sm hover:bg-primary hover:text-on-primary transition-all" href="#">
<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345-.09.375-.291 1.199-.332 1.357-.053.211-.174.256-.402.155-1.499-.696-2.435-2.883-2.435-4.639 0-3.774 2.743-7.24 7.904-7.24 4.149 0 7.371 2.957 7.371 6.906 0 4.122-2.599 7.44-6.207 7.44-1.212 0-2.352-.63-2.743-1.377l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"></path></svg>
</a>
<!-- Email -->
<a aria-label="Share via Email" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center shadow-sm hover:bg-primary hover:text-on-primary transition-all" href="#">
<span class="material-symbols-outlined text-[18px]">mail</span>
</a>
<!-- Print -->
<button aria-label="Print Article" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center shadow-sm hover:bg-primary hover:text-on-primary transition-all" onclick="window.print()">
<span class="material-symbols-outlined text-[18px]">print</span>
</button>
</div>
</div>
<!-- PREVIOUS / NEXT ARTICLE SPLIT NAVIGATION -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-space-md pt-space-md">
<!-- Previous Article -->
<a class="p-space-md rounded-DEFAULT bg-surface-container-low hover:bg-surface-container transition-all flex flex-col gap-1 text-left group" href="#">
<span class="font-label-spec text-label-spec text-primary font-bold uppercase tracking-wider flex items-center gap-1 group-hover:-translate-x-1 transition-transform">
<span class="material-symbols-outlined text-[16px]">arrow_back</span>
                Previous Article
              </span>
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-2 mt-1">
                Heavy Machinery Maintenance Guide: Extending Undercarriage Lifespan in Harsh Quarry Sites
              </span>
</a>
<!-- Next Article -->
<a class="p-space-md rounded-DEFAULT bg-surface-container-low hover:bg-surface-container transition-all flex flex-col gap-1 text-right group" href="#">
<span class="font-label-spec text-label-spec text-primary font-bold uppercase tracking-wider flex items-center justify-end gap-1 group-hover:translate-x-1 transition-transform">
                Next Article
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-2 mt-1">
                High-Torque TurboDiesel vs Electric Heavy Powertrains: 2026 Mining Performance Analysis
              </span>
</a>
</div>
</article>
<!-- RIGHT COLUMN: SIDEBAR (~30% width -> 4 cols) -->
<aside class="lg:col-span-4 flex flex-col gap-space-xl"><!-- SEARCH WIDGET -->
<div class="flex flex-col w-full bg-white p-space-md shadow-sm border border-outline-variant/30">
  <!-- Header Tab + Accent Line -->
  <div class="relative flex flex-col w-full border-b-2 border-primary mb-space-md">
    <div class="self-start bg-primary text-white font-bold text-label-md px-4 py-1.5 tracking-wide">
      Search News &amp; Insights
    </div>
  </div>
  <div class="relative flex items-center">
    <span class="material-symbols-outlined absolute left-3 text-outline text-[18px] pointer-events-none">search</span>
    <input class="w-full pl-9 pr-20 py-2 rounded-full border border-outline-variant/30 bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-white transition-all" placeholder="Search articles, specs, part" type="text">
    <button class="absolute right-1 px-4 py-1 rounded-full bg-primary text-white font-label-md text-label-md hover:bg-primary-container transition-colors" type="button">
      Search
    </button>
  </div>
</div>

<!-- RECENT POSTS WIDGET -->
<div class="flex flex-col w-full bg-white p-space-md shadow-sm border border-outline-variant/30">
  <!-- Header Tab + Accent Line -->
  <div class="relative flex flex-col w-full border-b-2 border-primary mb-space-xs">
    <div class="self-start bg-primary text-white font-bold text-label-md px-4 py-1.5 tracking-wide">
      Recent Posts
    </div>
  </div>
  <ul class="flex flex-col w-full font-body-sm text-body-sm text-on-surface">
    <li class="py-2.5 border-b border-surface-container-high hover:text-primary transition-colors">
      <a class="block leading-snug font-medium" href="#">THORXup Unveils Next-Gen Hydraulic Systems Reducing Fuel Consumption</a>
    </li>
    <li class="py-2.5 border-b border-surface-container-high hover:text-primary transition-colors">
      <a class="block leading-snug font-medium" href="#">Heavy Machinery Maintenance Guide: Undercarriage Lifespan</a>
    </li>
    <li class="py-2.5 border-b border-surface-container-high hover:text-primary transition-colors">
      <a class="block leading-snug font-medium" href="#">High-Torque TurboDiesel vs Electric Heavy Powertrains</a>
    </li>
    <li class="py-2.5 border-b border-surface-container-high hover:text-primary transition-colors">
      <a class="block leading-snug font-medium" href="#">Predictive Failure Diagnostics via CAN-Bus Integration</a>
    </li>
    <li class="py-2.5 hover:text-primary transition-colors">
      <a class="block leading-snug font-medium" href="#">Precision Metallurgical Alloys in Heavy Excavator Links</a>
    </li>
  </ul>
</div>

<!-- RECENT COMMENTS WIDGET -->
<div class="flex flex-col w-full bg-white p-space-md shadow-sm border border-outline-variant/30">
  <!-- Header Tab + Accent Line -->
  <div class="relative flex flex-col w-full border-b-2 border-primary mb-space-sm">
    <div class="self-start bg-primary text-white font-bold text-label-md px-4 py-1.5 tracking-wide">
      Recent Comments
    </div>
  </div>
  <div class="flex flex-col gap-space-sm">
    <!-- Comment 1 -->
    <div class="p-space-sm rounded-DEFAULT bg-surface-container-low flex flex-col gap-1">
      <div class="flex items-center gap-2 font-label-md text-label-md">
        <span class="w-6 h-6 rounded-full bg-primary text-white flex items-center justify-center font-bold text-[11px] shrink-0">MC</span>
        <span class="font-bold text-on-surface">Marcus Chen</span>
        <span class="text-on-surface-variant font-normal">on</span>
        <a class="text-primary font-semibold hover:underline truncate" href="#">Predictive Failure</a>
      </div>
      <p class="font-body-sm text-body-sm text-on-surface-variant italic leading-snug">
        “Great telemetry thresholds. The vibration harmonic frequency guide resolved our pump cavitation issues.”
      </p>
    </div>
    <!-- Comment 2 -->
    <div class="p-space-sm rounded-DEFAULT bg-surface-container-low flex flex-col gap-1">
      <div class="flex items-center gap-2 font-label-md text-label-md">
        <span class="w-6 h-6 rounded-full bg-secondary text-white flex items-center justify-center font-bold text-[11px] shrink-0">HV</span>
        <span class="font-bold text-on-surface">Hendrik V.</span>
        <span class="text-on-surface-variant font-normal">on</span>
        <a class="text-primary font-semibold hover:underline truncate" href="#">Hydraulic Systems</a>
      </div>
      <p class="font-body-sm text-body-sm text-on-surface-variant italic leading-snug">
        “Will this drop-in proportional valve fit the 336D series boom cylinder manifold without machining?”
      </p>
    </div>
    <!-- Comment 3 -->
    <div class="p-space-sm rounded-DEFAULT bg-surface-container-low flex flex-col gap-1">
      <div class="flex items-center gap-2 font-label-md text-label-md">
        <span class="w-6 h-6 rounded-full bg-primary text-white flex items-center justify-center font-bold text-[11px] shrink-0">PQ</span>
        <span class="font-bold text-on-surface">PT Quarry Tech</span>
        <span class="text-on-surface-variant font-normal">on</span>
        <a class="text-primary font-semibold hover:underline truncate" href="#">Maintenance Guide</a>
      </div>
      <p class="font-body-sm text-body-sm text-on-surface-variant italic leading-snug">
        “Very helpful undercarriage wear chart. We calibrated our daily track slack to 45mm based on this.”
      </p>
    </div>
  </div>
</div>

<!-- ARCHIVES WIDGET -->
<div class="flex flex-col w-full bg-white p-space-md shadow-sm border border-outline-variant/30">
  <!-- Header Tab + Accent Line -->
  <div class="relative flex flex-col w-full border-b-2 border-primary mb-space-xs">
    <div class="self-start bg-primary text-white font-bold text-label-md px-4 py-1.5 tracking-wide">
      Archives
    </div>
  </div>
  <ul class="flex flex-col w-full font-bold text-body-sm text-on-surface-variant">
    <li class="border-b border-surface-container-high py-2.5 transition-colors hover:text-primary">
      <a class="block w-full" href="#">2026</a>
    </li>
    <li class="border-b border-surface-container-high py-2.5 transition-colors hover:text-primary">
      <a class="block w-full" href="#">2025</a>
    </li>
    <li class="border-b border-surface-container-high py-2.5 transition-colors hover:text-primary">
      <a class="block w-full" href="#">2024</a>
    </li>
    <li class="py-2.5 transition-colors hover:text-primary">
      <a class="block w-full" href="#">2023</a>
    </li>
  </ul>
</div>

<!-- DIRECT TELEMETRY / INDUSTRIAL BULLETIN NEWSLETTER BOX -->
<div class="p-space-lg rounded-DEFAULT bg-primary text-white flex flex-col gap-space-sm shadow-md">
  <div class="flex items-center gap-1.5 text-primary-fixed uppercase tracking-wider font-label-spec text-label-spec font-bold">
    <span class="material-symbols-outlined text-[16px]">mail</span>
    <span>Direct Telemetry</span>
  </div>
  <h4 class="font-headline-sm text-headline-sm font-bold text-white">
    Industrial Bulletin
  </h4>
  <p class="font-body-sm text-body-sm text-primary-fixed leading-relaxed">
    Receive monthly metallurgical test reports and hydraulic service advisories directly in your inbox.
  </p>
  <div class="flex flex-col gap-2 pt-space-xs">
    <input class="w-full px-4 py-2 rounded-full bg-white text-on-surface font-body-sm text-body-sm placeholder:text-outline focus:outline-none shadow-sm" placeholder="fleet.engineer@company.com" type="email">
    <button class="w-full py-2.5 px-4 rounded-full bg-secondary-fixed text-primary font-bold font-label-md text-label-md hover:bg-white transition-colors shadow-sm" type="button">
      Subscribe Bulletin
    </button>
  </div>
  <p class="text-[10px] text-primary-fixed/80 text-center pt-0.5">
    Zero marketing spam. Only audited technical digests.
  </p>
</div></aside>
</div>
</div>
</section>
<!-- RELATED POSTS SECTION (FULL WIDTH CARDS WITH IMAGE BACKGROUNDS & WHITE OVERLAY TEXT) -->
<section class="w-full bg-surface-container-low py-space-2xl">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-xl">
<div class="flex items-center justify-between">
<div>
<span class="font-label-spec text-label-spec uppercase tracking-wider text-primary font-bold">Discover More</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight">
            Related Posts
          </h2>
</div>
<a class="hidden sm:flex items-center gap-1 font-label-lg text-label-lg text-primary hover:underline" data-path="news" href="#">
<span>View All News</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
<!-- 3 FULL IMAGE OVERLAY CARDS -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- CARD 1 -->
<a class="group relative aspect-[4/3] rounded-DEFAULT overflow-hidden shadow-md flex flex-col justify-end p-space-lg transition-transform duration-300 hover:-translate-y-1" href="#">
<img alt="Undercarriage steel excavator tracks, rollers, heavy machinery track chains and steel sprockets" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/ALJJyrDbzQqNtyqjbTrA2m_XbLklVB8l_Ucy0_riJZTbCoQkhm6IUMvwwefm2huXXG4zp0Y7a0kwLKWEGYGOcU6ruGBrxK1reB5NftSJJ4Ivq82HCPYgjMgF5oSMMZaAKkmWDgGu7grdp-n68ME0d6WOj4D7v-gVRK0qszz9oyfOn144taUstVRWTYFsR1xcGzS42M7WwzF-p9YqdHv7hDYim0ey3cMpfZUBQ-TqlXCJQPojgg">
<div class="absolute inset-0 bg-gradient-to-t from-inverse-surface via-inverse-surface/60 to-transparent"></div>
<div class="relative z-10 flex flex-col gap-1 text-white">
<span class="font-label-spec text-label-spec text-primary-fixed uppercase tracking-wider">
              March 04, 2026
            </span>
<h3 class="font-headline-sm text-headline-sm font-bold leading-tight group-hover:text-primary-fixed transition-colors">
              DuraTrack Track Tension Calibration and Bushing Integrity...
            </h3>
</div>
</a>
<!-- CARD 2 -->
<a class="group relative aspect-[4/3] rounded-DEFAULT overflow-hidden shadow-md flex flex-col justify-end p-space-lg transition-transform duration-300 hover:-translate-y-1" href="#">
<div class="absolute inset-0 w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Industrial active quarry earthmoving site at sunset with heavy tracked excavators, articulated dump trucks digging red dirt, dynamic industrial dust, and dramatic cloudy sky." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBhjr1INvazOH53giU3_AalAeE9XR4sI13piFORZafxyRoFRoNXWCM-6Audaxr_tKMrzsPF8NQIaKcKX_lVdGoZC6oFPhVMeUZKBF-j969cbLQ3ThGWuO8IYpQHZhs-dUdr8OwvKoCxOZBfAfXXqy8zt8OO5UJgEyRb-JOQvt7poOrtdy0jQAeOILAJX_ekX5aI0QZtAhxYsFIBzg6X6QA_j82s0w7BJIQPSS6AikKX')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-inverse-surface via-inverse-surface/60 to-transparent"></div>
<div class="relative z-10 flex flex-col gap-1 text-white">
<span class="font-label-spec text-label-spec text-primary-fixed uppercase tracking-wider">
              February 26, 2026
            </span>
<h3 class="font-headline-sm text-headline-sm font-bold leading-tight group-hover:text-primary-fixed transition-colors">
              Continuous Fleet Telemetry Under High Dust Mining Operations...
            </h3>
</div>
</a>
<!-- CARD 3 -->
<a class="group relative aspect-[4/3] rounded-DEFAULT overflow-hidden shadow-md flex flex-col justify-end p-space-lg transition-transform duration-300 hover:-translate-y-1" href="#">
<div class="absolute inset-0 w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Close up engineering view of heavy planetary gear assembly, reduction drives, industrial transmission gear teeth, polished hardened steel alloy components inside an industrial mechanical workshop." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAIJCoZJ2DOM8MIFG0SHR1RslTNC8s98ska9y3Dsy04jIDhgP4funYiP1QhJSHegV8j129wnKg_bxYljsUjj_bvFRRlNO6XfjREkS-7velBYOkZjlWBTTM4IJQu-baSw2nZtwbkwJ91iX4ScrSQ_INJwZR39eGr8Pd3Xrr7jNcREphps-2HNyiKpwwExEA5YQtEONvGI2ZeIGbFBuUb585o9Go1WOaoU9ET7QKss3KZ')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-inverse-surface via-inverse-surface/60 to-transparent"></div>
<div class="relative z-10 flex flex-col gap-1 text-white">
<span class="font-label-spec text-label-spec text-primary-fixed uppercase tracking-wider">
              February 18, 2026
            </span>
<h3 class="font-headline-sm text-headline-sm font-bold leading-tight group-hover:text-primary-fixed transition-colors">
              Torque-Matched Planetary Reduction Drives for Extreme Load...
            </h3>
</div>
</a>
</div>
</div>
</section>
<!-- LEAVE A REPLY (COMMENT FORM) SECTION -->
<section class="w-full py-space-2xl bg-surface-container-low">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
<div class="max-w-4xl p-space-xl rounded-DEFAULT bg-surface-container-low shadow-sm flex flex-col gap-space-lg">
<!-- HEADER -->
<div class="flex flex-col gap-space-xs">
<h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">
            Leave a reply
          </h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Your email address will not be published. Required fields are marked <span class="text-error font-bold">*</span>
</p>
</div>
<!-- FORM -->
<form class="flex flex-col gap-space-md" onsubmit="event.preventDefault(); alert('Your comment has been submitted for peer review.');">
<!-- COMMENT TEXTAREA -->
<div class="flex flex-col gap-1.5">
<label class="font-label-lg text-label-lg text-on-surface font-semibold" for="comment-text">
              Comment <span class="text-error">*</span>
</label>
<textarea class="w-full p-space-md rounded-DEFAULT bg-white text-on-surface font-body-md text-body-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary transition-all" id="comment-text" placeholder="Write your technical analysis, questions, or field experiences..." required="" rows="5"></textarea>
</div>
<!-- 3-FIELD ROW: NAME, EMAIL, WEBSITE -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-space-md">
<div class="flex flex-col gap-1.5">
<label class="font-label-lg text-label-lg text-on-surface font-semibold" for="comment-name">
                Name <span class="text-error">*</span>
</label>
<input class="w-full px-space-md py-3 rounded-full bg-white text-on-surface font-body-md text-body-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary transition-all" id="comment-name" placeholder="John Doe" required="" type="text">
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-lg text-label-lg text-on-surface font-semibold" for="comment-email">
                Email <span class="text-error">*</span>
</label>
<input class="w-full px-space-md py-3 rounded-full bg-white text-on-surface font-body-md text-body-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary transition-all" id="comment-email" placeholder="john.doe@miningcorp.com" required="" type="email">
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-lg text-label-lg text-on-surface font-semibold" for="comment-website">
                Website
              </label>
<input class="w-full px-space-md py-3 rounded-full bg-white text-on-surface font-body-md text-body-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary transition-all" id="comment-website" placeholder="https://company.com" type="url">
</div>
</div>
<!-- REMEMBER CHECKBOX -->
<div class="flex items-center gap-3 pt-space-xs">
<input class="w-5 h-5 rounded accent-primary cursor-pointer" id="save-info" type="checkbox">
<label class="font-body-sm text-body-sm text-on-surface-variant cursor-pointer select-none" for="save-info">
              Save my name, email, and website in this browser for the next time I comment.
            </label>
</div>
<!-- SUBMIT BUTTON -->
<div class="pt-space-sm">
<button class="px-8 py-3.5 rounded-full bg-primary text-on-primary font-label-lg text-label-lg font-semibold hover:bg-primary-container shadow-sm hover:shadow-md transition-all" type="submit">
              Post Comment
            </button>
</div>
</form>
</div>
</div>
</section>
</div></main><footer class="w-full bg-primary text-on-primary mt-space-2xl pt-space-2xl pb-space-xl relative overflow-hidden"><div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div><div class="relative z-10 max-w-[1360px] mx-auto px-margin-mobile lg:px-margin"><div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter"><div class="lg:col-span-4 flex flex-col gap-space-md"><div class="flex flex-col gap-space-sm"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Follow us</h4><div class="flex items-center gap-space-md"><a aria-label="Instagram" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a><a aria-label="Facebook" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg></a><a aria-label="TikTok" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31 0 2.6.43 3.65 1.22.09.07.18.15.26.23.02.02.04.05.07.07 1.09.97 1.75 2.37 1.78 3.86v.44c1.17-.38 2.41-.45 3.64-.2v3.31c-.96.08-1.91-.07-2.81-.44-.39-.16-.76-.36-1.1-.6v8.83c0 4.01-3.26 7.26-7.27 7.26-4.02 0-7.27-3.25-7.27-7.26 0-3.9 3.08-7.07 6.94-7.24.36-.02.73 0 1.09.07v3.42c-.36-.08-.73-.09-1.09-.04-2.1.25-3.66 2.04-3.61 4.15.05 2.08 1.76 3.75 3.84 3.75 2.12 0 3.84-1.72 3.84-3.84V0h-3.13z"></path></svg></a><a aria-label="LinkedIn" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg></a></div></div><p class="font-body-md text-body-md text-on-primary-container max-w-sm mt-space-xs">Heavy industrial machinery, advanced powertrain architectures, and precision hydraulic systems engineered for global infrastructure operations.</p></div><div class="lg:col-span-2 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Quick Links</h4><ul class="flex flex-col gap-space-sm"><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="home" href="#">Home</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="products" href="#">Product Catalog</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="about-us" href="#">About Us</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="news" href="#">News &amp; Insights</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="contact" href="#">Technical Support</a></li></ul></div><div class="lg:col-span-3 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Products</h4><ul class="flex flex-col gap-space-sm"><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="heavy-machinery" href="#">Heavy Machinery Units</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="hydraulic-systems" href="#">High-Pressure Hydraulics</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="spare-parts" href="#">OEM Spare Parts</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="powertrain" href="#">Powertrain Assemblies</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="products" href="#">All Catalogs</a></li></ul></div><div class="lg:col-span-3 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Global Headquarters</h4><p class="font-body-sm text-body-sm text-on-primary-container">4800 Industrial Parkway, Sector 9<br>Heavy Engineering Corridor<br>Detroit, MI 48202</p><div class="flex flex-col gap-space-xs pt-space-xs"><span class="font-label-spec text-label-spec text-secondary-fixed uppercase tracking-wider font-semibold">Direct Contact</span><p class="font-body-sm text-body-sm text-on-primary-container">+1 (800) 846-7987 • rfq-desk@thorxup-machinery.com</p></div></div></div><div class="pt-space-2xl pb-space-md select-none pointer-events-none overflow-hidden flex items-center justify-between gap-space-lg tracking-tighter leading-none opacity-20 hover:opacity-30 transition-opacity"><div class="flex items-baseline shrink-0"><span class="font-display-hero text-[64px] sm:text-[96px] md:text-[120px] lg:text-[148px] font-black text-on-primary uppercase tracking-tighter">THORX</span><span class="font-display-hero text-[32px] sm:text-[48px] md:text-[60px] lg:text-[76px] font-black text-secondary-fixed uppercase tracking-wider -translate-y-4 md:-translate-y-8 ml-1">up</span></div><div class="flex-1 h-1 bg-secondary-fixed/40 rounded-full"></div></div><div class="mt-space-2xl pt-space-lg border-t border-primary-container flex flex-col sm:flex-row items-center justify-between gap-space-md"><p class="font-body-sm text-body-sm text-on-primary-container">© 2026 THORXup Heavy Machinery Ltd. All rights reserved.</p><div class="flex items-center gap-space-lg"><a class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors" data-path="privacy-policy" href="#">Privacy Policy</a><a class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors" data-path="terms-of-service" href="#">Terms of Service</a></div></div></div></footer>


</body></html>