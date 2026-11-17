<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_standard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-fixed-dim": "#bbc3ff", "on-secondary-fixed-variant": "#354187", "secondary-fixed": "#dee0ff", "on-error-container": "#93000a", "primary": "#1e3093", "primary-fixed-dim": "#bbc3ff", "surface-container": "#f0eded", "inverse-surface": "#303030", "primary-container": "#3949ab", "surface-container-low": "#f5f3f2", "on-primary-fixed-variant": "#2c3c9e", "on-secondary-fixed": "#01105b", "surface-container-lowest": "#ffffff", "secondary": "#4d59a0", "on-error": "#ffffff", "inverse-primary": "#bbc3ff", "outline": "#767684", "tertiary-fixed-dim": "#bdc7d4", "background": "#fbf9f8", "on-primary": "#ffffff", "on-secondary-container": "#354187", "surface-tint": "#4555b7", "secondary-container": "#a5b1ff", "on-tertiary": "#ffffff", "surface-bright": "#fbf9f8", "surface-variant": "#e4e2e1", "inverse-on-surface": "#f3f0f0", "on-surface": "#1b1c1c", "on-surface-variant": "#454652", "primary-fixed": "#dee0ff", "error-container": "#ffdad6", "on-primary-fixed": "#000e5e", "surface-dim": "#dcd9d9", "on-background": "#1b1c1c", "surface-container-highest": "#e4e2e1", "on-primary-container": "#bbc3ff", "surface": "#fbf9f8", "tertiary-fixed": "#d9e3f0", "surface-container-high": "#eae8e7", "tertiary": "#333d47", "on-secondary": "#ffffff", "error": "#ba1a1a", "outline-variant": "#c6c5d4", "tertiary-container": "#4a545e", "on-tertiary-container": "#bec8d4", "on-tertiary-fixed-variant": "#3e4852", "on-tertiary-fixed": "#131d26" }, "borderRadius": { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" }, "spacing": { "space-lg": "1.5rem", "gutter-sm": "1rem", "margin": "3rem", "space-md": "1rem", "space-xl": "2.5rem", "margin-mobile": "1.25rem", "space-2xl": "4rem", "gutter": "1.5rem", "space-sm": "0.5rem", "space-xs": "0.25rem" }, "fontFamily": { "body-lg": [ "Inter" ], "headline-lg-mobile": [ "Plus Jakarta Sans" ], "label-lg": [ "Inter" ], "display-hero": [ "Plus Jakarta Sans" ], "headline-md": [ "Plus Jakarta Sans" ], "headline-sm": [ "Plus Jakarta Sans" ], "display-hero-mobile": [ "Plus Jakarta Sans" ], "label-md": [ "Inter" ], "headline-lg": [ "Plus Jakarta Sans" ], "body-md": [ "Inter" ], "body-sm": [ "Inter" ], "label-spec": [ "Inter" ] }, "fontSize": { "body-lg": [ "18px", { "lineHeight": "28px", "fontWeight": "400" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "700" } ], "label-lg": [ "14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" } ], "display-hero": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "800" } ], "headline-md": [ "24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700" } ], "headline-sm": [ "18px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "600" } ], "display-hero-mobile": [ "36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "800" } ], "label-md": [ "12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "headline-lg": [ "36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "body-md": [ "15px", { "lineHeight": "24px", "fontWeight": "400" } ], "body-sm": [ "13px", { "lineHeight": "20px", "fontWeight": "400" } ], "label-spec": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ] } } } };</script></head><body class="font-body-md text-on-surface antialiased bg-white">@include('components.header')<main class="w-full pt-20 min-h-screen bg-white"><div class="flex flex-col w-full">
<!-- Top Utility Bar / Breadcrumb Header Area -->
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
<!-- Breadcrumb -->
<nav aria-label="Breadcrumb" class="flex items-center gap-space-xs mb-space-md">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1" data-path="home" href="#">
<span class="material-symbols-outlined text-[16px]">home</span>
          Home
        </a>
<span class="material-symbols-outlined text-outline text-[14px]">chevron_right</span>
<span class="font-label-md text-label-md text-primary font-semibold">News &amp; Insights</span>
</nav>
<!-- Section Title & Meta -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg">
<div class="max-w-3xl">

<h1 class="font-display-hero text-headline-lg lg:text-display-hero text-on-surface font-extrabold tracking-tight">
            Industry Insights &amp; Heavy Machinery News
          </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-space-sm leading-relaxed">
            Engineering reports, field maintenance telemetry, hydraulic system innovations, and global heavy equipment supply chain updates directly from the manufacturing line.
          </p>
</div>
<!-- Quick Telemetry Counters -->

</div>
</div>
</section>
<!-- Main Content 2-Column Grid -->
<section class="w-full py-space-2xl bg-surface-container-low">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Left Column: Article Stream (8 Columns) -->
<div class="lg:col-span-8 flex flex-col gap-space-lg">
<!-- Article 1: Hydraulic Systems -->
<article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row">
<div class="md:w-5/12 relative overflow-hidden bg-surface-container-high shrink-0 aspect-[16/10] md:aspect-auto">
<img alt="Hydraulic pumps, heavy duty hydraulic cylinders, pressure valves and steel piping industrial components closeup engineering" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" src="https://lh3.googleusercontent.com/aida/ALJJyrBFtABTNdyL-Wl16c2wVTxZJ6AjoLebwoJDqm3jpDdurL2JOAYcUL7v98ePicVPz0GRIHpyeuogp3o-LYLZVc5v0zWkkp8nIzH4i_DBgSnC3KYFHcC1znBV97oLvJ-LqU0BuT2BglBo3kfQ7VHJwYWzGDSFZcPLiMTI2QfTURb6o3QboK7fiKN59hZNDtT0Ha-pezUlbzC1ezTIu94x4BXMVFTqV5q4WPHh845twH-xXg">
<div class="absolute top-space-sm left-space-sm">

</div>
</div>
<div class="md:w-7/12 p-space-lg flex flex-col justify-between">
<div>
<div class="flex items-center gap-space-sm text-on-surface-variant font-label-md text-label-md mb-space-xs">
<span class="flex items-center gap-1 font-semibold text-primary">
<span class="material-symbols-outlined text-[16px]">admin_panel_settings</span>
                    Admin
                  </span>
<span>•</span>
<span>March 12, 2026</span>
<span>•</span>
<span>6 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors leading-snug">
<a href="#">THORXup Unveils Next-Gen Hydraulic Systems Reducing Fuel Consumption by 18%</a>
</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs leading-relaxed">
                  Our advanced electro-proportional variable flow controllers reduce thermal losses while maximizing boom cycle responsiveness in severe mining operations....
                </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<span class="font-label-spec text-label-spec text-on-surface-variant uppercase tracking-wider">
                  Doc Ref: HYD-2026-X8
                </span>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
                  Read Full Article
                  <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 2: Undercarriage Maintenance -->
<article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row">
<div class="md:w-5/12 relative overflow-hidden bg-surface-container-high shrink-0 aspect-[16/10] md:aspect-auto">
<img alt="Undercarriage steel excavator tracks, rollers, heavy machinery track chains and steel sprockets workshop photography" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" src="https://lh3.googleusercontent.com/aida/ALJJyrDbzQqNtyqjbTrA2m_XbLklVB8l_Ucy0_riJZTbCoQkhm6IUMvwwefm2huXXG4zp0Y7a0kwLKWEGYGOcU6ruGBrxK1reB5NftSJJ4Ivq82HCPYgjMgF5oSMMZaAKkmWDgGu7grdp-n68ME0d6WOj4D7v-gVRK0qszz9oyfOn144taUstVRWTYFsR1xcGzS42M7WwzF-p9YqdHv7hDYim0ey3cMpfZUBQ-TqlXCJQPojgg">
<div class="absolute top-space-sm left-space-sm">

</div>
</div>
<div class="md:w-7/12 p-space-lg flex flex-col justify-between">
<div>
<div class="flex items-center gap-space-sm text-on-surface-variant font-label-md text-label-md mb-space-xs">
<span class="flex items-center gap-1 font-semibold text-primary">
<span class="material-symbols-outlined text-[16px]">admin_panel_settings</span>
                    Admin
                  </span>
<span>•</span>
<span>March 04, 2026</span>
<span>•</span>
<span>8 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors leading-snug">
<a href="#">Heavy Machinery Maintenance Guide: Extending Undercarriage Lifespan in Harsh Quarry Sites</a>
</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs leading-relaxed">
                  Key telemetry checkpoints, track tension calibration metrics, and advanced lubricant thermal degradation thresholds for continuous 24/7 earthmoving uptime....
                </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<span class="font-label-spec text-label-spec text-on-surface-variant uppercase tracking-wider">
                  Telemetry Standard 14.3
                </span>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
                  Read Full Article
                  <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 3: Powertrain Analysis -->
<article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row">
<div class="md:w-5/12 relative overflow-hidden bg-surface-container-high shrink-0 aspect-[16/10] md:aspect-auto">
<img alt="Industrial diesel engine, heavy powertrain transmission gear system, machinery motor close-up cinematic engineering photography" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" src="https://lh3.googleusercontent.com/aida/ALJJyrDpSQAKXI0XoPAeRuJbtnfR8wKozLkOqSsH1Uo3eLTy7PJ_gubsLYCUxik_mayxiv3weEOfUuemW0Y_P90vzBaGnQv_BPIqyYGx5Bbvf2Cp4lKRYZeIi-YFzBtocs7rjnH4hFSqF5Ptv4RMFX4HvKTZVVYILKeMLxvFtygE3uyrJZY9Pv_-pB-Rh1pZbWNgxScPs6sS-l58pqhuyfeLikx4KLSfLRhSzwJGxhYms1rH">
<div class="absolute top-space-sm left-space-sm">

</div>
</div>
<div class="md:w-7/12 p-space-lg flex flex-col justify-between">
<div>
<div class="flex items-center gap-space-sm text-on-surface-variant font-label-md text-label-md mb-space-xs">
<span class="flex items-center gap-1 font-semibold text-primary">
<span class="material-symbols-outlined text-[16px]">admin_panel_settings</span>
                    Admin
                  </span>
<span>•</span>
<span>February 26, 2026</span>
<span>•</span>
<span>5 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors leading-snug">
<a href="#">High-Torque TurboDiesel vs Electric Heavy Powertrains: 2026 Mining Performance Analysis</a>
</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs leading-relaxed">
                  Comparative dynamometer trials measuring continuous torque delivery, cooling efficiency under high ambient dust load, and total lifecycle operating expenditure....
                </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<span class="font-label-spec text-label-spec text-on-surface-variant uppercase tracking-wider">
                  Test Benchmark: DYN-72
                </span>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
                  Read Full Article
                  <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 4: CAN-Bus Sensor Integration -->
<article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row">
<div class="md:w-5/12 relative overflow-hidden bg-surface-container-high shrink-0 aspect-[16/10] md:aspect-auto">
<img alt="Heavy construction machinery excavators, earthmovers and crawler diggers on industrial site, dramatic lighting, cinematic photography" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" src="https://lh3.googleusercontent.com/aida/ALJJyrB9aXKxywQyyoKioR-qW2rmUnux1IrqLAQx9ezAzngSzA7HFk3K_vO9cq2QqoIN2BlkVDNyPB1u5hDAelOb6wGiD6M_47BPqHvs5_rtpYcjkHBxxgym3SjABcwJJcVXsqgTThts9xgo2bhrQy6-okXrS_lgYFGT9_xfwR9XBVvdVw5fHuyDAInqYmZVFJC64ne6HiPcDpqqPTFKYijyoG0SqjH8oP_ffgrYPW918ZKRWA">
<div class="absolute top-space-sm left-space-sm">

</div>
</div>
<div class="md:w-7/12 p-space-lg flex flex-col justify-between">
<div>
<div class="flex items-center gap-space-sm text-on-surface-variant font-label-md text-label-md mb-space-xs">
<span class="flex items-center gap-1 font-semibold text-primary">
<span class="material-symbols-outlined text-[16px]">admin_panel_settings</span>
                    Admin
                  </span>
<span>•</span>
<span>February 18, 2026</span>
<span>•</span>
<span>7 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors leading-snug">
<a href="#">Predictive Failure Diagnostics: CAN-Bus Sensor Integration Prevents Catastrophic Downtime</a>
</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs leading-relaxed">
                  Continuous thermal monitoring and high-frequency vibration harmonic analytics allow mining fleet operators to schedule interventions before component fatigue occurs....
                </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<span class="font-label-spec text-label-spec text-on-surface-variant uppercase tracking-wider">
                  Protocol: J1939 Architecture
                </span>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
                  Read Full Article
                  <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 5: Precision Metallurgical Alloys -->
<article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row">
<div class="md:w-5/12 relative overflow-hidden bg-surface-container-high shrink-0 aspect-[16/10] md:aspect-auto">
<img alt="Close-up of heavy machinery hydraulic components, steel excavator tracks and precision machinery gear parts, industrial workshop engineering, dramatic lighting" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" src="https://lh3.googleusercontent.com/aida/ALJJyrB064NHegQTZ_OusufEsjMuYt5S5iRwH7kCWbjItMwoJKml3GMnOmm-EZrlnR3CykDoTF82RpZ-RInJgza4m_uq7CPOpmoUcoWB3TEC4lvwu3-VceBtAZFRCpM56WDrrO2KkdTJEVUipjZKnLwDOeYAnYUd5_dXzn9mS7vcg8s1BFkJXvsDb3BOTiO4QLeqq2EVT5DTKy4PndndsH03BC71MAyaXboNeIj7Mvh43JbDGw">
<div class="absolute top-space-sm left-space-sm">

</div>
</div>
<div class="md:w-7/12 p-space-lg flex flex-col justify-between">
<div>
<div class="flex items-center gap-space-sm text-on-surface-variant font-label-md text-label-md mb-space-xs">
<span class="flex items-center gap-1 font-semibold text-primary">
<span class="material-symbols-outlined text-[16px]">admin_panel_settings</span>
                    Admin
                  </span>
<span>•</span>
<span>February 10, 2026</span>
<span>•</span>
<span>4 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors leading-snug">
<a href="#">Precision Metallurgical Alloys: Why Forged Master Links Outperform Standard Castings</a>
</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs leading-relaxed">
                  Induction hardening depth, boron alloy grain boundary integrity, and impact resistance tests demonstrate a 34% reduction in pitch elongation during abrasive excavation....
                </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<span class="font-label-spec text-label-spec text-on-surface-variant uppercase tracking-wider">
                  Spec: ISO 6507 Hardness
                </span>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
                  Read Full Article
                  <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 6: OEM Supply Chain Trends -->
<article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col md:flex-row">
<div class="md:w-5/12 relative overflow-hidden bg-surface-container-high shrink-0 aspect-[16/10] md:aspect-auto">
<img alt="Heavy duty construction equipment in action at an industrial job site, modern yellow excavator digging earth, rugged hydraulic machinery, professional cinematic industrial photography, golden hour lighting, sharp focus" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" src="https://lh3.googleusercontent.com/aida/ALJJyrCAdZs3H4mgIYNae31J4jQeSpeJNimuz-DejNPJwAZo2AAiusoXoctmet_WmiVsw743-S3B-wMpOswycLzHm1ds6-2i0iaWVOvfayaHgMxUQEvxte_Vs8Qaj2CqpZpe_4d2j5VN0iblfqWnTSfZe8VjEpl2Pf-N53dY50U1BG2xJN08Xz06TVD0PRlJimuxbIhloYucaC3U02eF-Law0-l8zogZLHZ6CDBJbYkM0kmA">
<div class="absolute top-space-sm left-space-sm">

</div>
</div>
<div class="md:w-7/12 p-space-lg flex flex-col justify-between">
<div>
<div class="flex items-center gap-space-sm text-on-surface-variant font-label-md text-label-md mb-space-xs">
<span class="flex items-center gap-1 font-semibold text-primary">
<span class="material-symbols-outlined text-[16px]">admin_panel_settings</span>
                    Admin
                  </span>
<span>•</span>
<span>January 29, 2026</span>
<span>•</span>
<span>9 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors leading-snug">
<a href="#">Global Heavy Equipment Supply Chain Trends: Navigating OEM Component Lead Times</a>
</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs leading-relaxed">
                  Strategic warehouse buffer stocking and expedited air-sea multi-modal freight routes ensure mining contractors maintain critical spares for uninterrupted field productivity....
                </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<span class="font-label-spec text-label-spec text-on-surface-variant uppercase tracking-wider">
                  Logistics Analysis Q1
                </span>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
                  Read Full Article
                  <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Pagination Bar -->
<div class="mt-space-md flex flex-wrap items-center justify-between gap-space-sm bg-surface-container-lowest p-space-md rounded-DEFAULT shadow-sm">
<button class="inline-flex items-center gap-1 px-space-md py-space-xs rounded-full bg-surface-container text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-variant transition-colors disabled:opacity-40" disabled="">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
              Previous
            </button>
<div class="flex items-center gap-1">
<span class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-lg text-label-lg font-bold shadow-sm">1</span>
<a class="w-9 h-9 rounded-full text-on-surface-variant hover:bg-surface-container flex items-center justify-center font-label-lg text-label-lg transition-colors" href="#">2</a>
<a class="w-9 h-9 rounded-full text-on-surface-variant hover:bg-surface-container flex items-center justify-center font-label-lg text-label-lg transition-colors" href="#">3</a>
<span class="px-2 text-outline">...</span>
<a class="w-9 h-9 rounded-full text-on-surface-variant hover:bg-surface-container flex items-center justify-center font-label-lg text-label-lg transition-colors" href="#">8</a>
</div>
<a class="inline-flex items-center gap-1 px-space-md py-space-xs rounded-full bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-colors shadow-sm" href="#">
              Next
              <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Right Column: Sidebar (4 Columns, Sticky) -->
<aside class="lg:col-span-4 flex flex-col gap-space-lg">
<div class="sticky top-24 flex flex-col gap-space-lg">
<!-- 1. Search Bar News Widget -->
<div class="bg-surface-container-lowest p-space-lg rounded-DEFAULT shadow-sm">
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface mb-space-sm flex items-center gap-2">

                Search News &amp; Insights
              </h3>
<form class="relative flex items-center mt-space-xs" onsubmit="event.preventDefault();">
<input class="w-full bg-surface-container-low text-on-surface placeholder:text-outline text-body-md font-body-md pl-10 pr-24 py-2.5 rounded-full focus:outline-none focus:ring-2 focus:ring-primary shadow-inner" placeholder="Search articles, specs, parts..." type="text">
<span class="material-symbols-outlined text-outline absolute left-3.5 text-[20px] pointer-events-none">search</span>
<button class="absolute right-1 px-space-md py-1.5 rounded-full bg-primary text-on-primary font-label-md text-label-md font-semibold hover:bg-primary-container transition-colors shadow-sm" type="submit">
                  Search
                </button>
</form>

</div>
<!-- 2. Recent Posts Widget (Hanya List Judul) -->
<div class="bg-surface-container-lowest p-space-lg rounded-DEFAULT shadow-sm">
<div class="relative mb-space-md border-b-2 border-primary flex items-end"><div class="bg-primary text-white font-headline-sm text-headline-sm font-bold px-space-md py-2 rounded-t-DEFAULT inline-block leading-tight select-none">Recent Posts</div></div>
<ul class="flex flex-col gap-space-sm"><li class="group border-b border-surface-container pb-space-sm last:border-b-0">
<a class="block" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary transition-colors leading-snug">
THORXup Unveils Next-Gen Hydraulic Systems Reducing Fuel Consumption
</span>
</a>
</li>
<li class="group border-b border-surface-container pb-space-sm last:border-b-0">
<a class="block" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary transition-colors leading-snug">
Heavy Machinery Maintenance Guide: Undercarriage Lifespan
</span>
</a>
</li>
<li class="group border-b border-surface-container pb-space-sm last:border-b-0">
<a class="block" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary transition-colors leading-snug">
High-Torque TurboDiesel vs Electric Heavy Powertrains
</span>
</a>
</li>
<li class="group border-b border-surface-container pb-space-sm last:border-b-0">
<a class="block" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary transition-colors leading-snug">
Predictive Failure Diagnostics via CAN-Bus Integration
</span>
</a>
</li>
<li class="group pb-1">
<a class="block" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary transition-colors leading-snug">
Precision Metallurgical Alloys in Heavy Excavator Links
</span>
</a>
</li></ul>
</div>
<!-- 3. Recent Comments Widget -->
<div class="bg-surface-container-lowest p-space-lg rounded-DEFAULT shadow-sm">
<div class="flex items-center justify-between mb-space-md pb-space-xs border-b border-surface-container">
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface flex items-center gap-2">

                  Recent Comments
                </h3>
<span class="font-label-spec text-label-spec text-secondary uppercase font-semibold">Community</span>
</div>
<div class="flex flex-col gap-space-md">
<div class="p-space-sm bg-surface-container-low rounded-DEFAULT">
<div class="flex items-center gap-2 mb-1">
<span class="w-6 h-6 rounded-full bg-primary text-on-primary font-label-spec text-label-spec flex items-center justify-center font-bold">MC</span>
<span class="font-label-md text-label-md font-bold text-on-surface">Marcus Chen</span>
<span class="text-on-surface-variant text-xs">on</span>
<span class="font-label-spec text-label-spec text-primary truncate max-w-[120px]">Predictive Failure</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic pl-8">
                    "Great telemetry thresholds. The vibration harmonic frequency guide resolved our pump cavitation issues."
                  </p>
</div>
<div class="p-space-sm bg-surface-container-low rounded-DEFAULT">
<div class="flex items-center gap-2 mb-1">
<span class="w-6 h-6 rounded-full bg-secondary text-on-secondary font-label-spec text-label-spec flex items-center justify-center font-bold">HV</span>
<span class="font-label-md text-label-md font-bold text-on-surface">Hendrik V.</span>
<span class="text-on-surface-variant text-xs">on</span>
<span class="font-label-spec text-label-spec text-primary truncate max-w-[120px]">Hydraulic Systems</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic pl-8">
                    "Will this drop-in proportional valve fit the 336D series boom cylinder manifold without machining?"
                  </p>
</div>
<div class="p-space-sm bg-surface-container-low rounded-DEFAULT">
<div class="flex items-center gap-2 mb-1">
<span class="w-6 h-6 rounded-full bg-primary-container text-on-primary font-label-spec text-label-spec flex items-center justify-center font-bold">PQ</span>
<span class="font-label-md text-label-md font-bold text-on-surface">PT Quarry Tech</span>
<span class="text-on-surface-variant text-xs">on</span>
<span class="font-label-spec text-label-spec text-primary truncate max-w-[120px]">Maintenance Guide</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic pl-8">
                    "Very helpful undercarriage wear chart. We calibrated our daily track slack to 45mm based on this."
                  </p>
</div>
</div>
</div>
<!-- 4. Archives Widget (Strictly List of Years) -->
<div class="bg-surface-container-lowest p-space-lg rounded-DEFAULT shadow-sm">
<div class="flex items-center justify-between mb-space-md pb-space-xs border-b border-surface-container">
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]">calendar_month</span>
                  Archives
                </h3>
<span class="font-label-spec text-label-spec text-secondary uppercase font-semibold">By Year</span>
</div>
<ul class="flex flex-col gap-2">
<li>
<a class="flex items-center justify-between px-space-md py-space-xs rounded-DEFAULT hover:bg-surface-container transition-colors group" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline group-hover:text-primary">folder_open</span>
                      2026
                    </span>

</a>
</li>
<li>
<a class="flex items-center justify-between px-space-md py-space-xs rounded-DEFAULT hover:bg-surface-container transition-colors group" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline group-hover:text-primary">folder_open</span>
                      2025
                    </span>

</a>
</li>
<li>
<a class="flex items-center justify-between px-space-md py-space-xs rounded-DEFAULT hover:bg-surface-container transition-colors group" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline group-hover:text-primary">folder_open</span>
                      2024
                    </span>

</a>
</li>
<li>
<a class="flex items-center justify-between px-space-md py-space-xs rounded-DEFAULT hover:bg-surface-container transition-colors group" href="#">
<span class="font-body-md text-body-md font-semibold text-on-surface group-hover:text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline group-hover:text-primary">folder_open</span>
                      2023
                    </span>

</a>
</li>
</ul>
</div>
<!-- 5. Newsletter / Engineering Bulletin Box -->
<div class="bg-primary text-on-primary p-space-lg rounded-DEFAULT shadow-md relative overflow-hidden">
<div class="absolute -right-6 -bottom-6 w-32 h-32 bg-primary-container rounded-full opacity-50 blur-xl pointer-events-none"></div>
<div class="relative z-10">
<div class="inline-flex items-center gap-1 text-on-primary-container font-label-spec text-label-spec uppercase tracking-wider mb-2">
<span class="material-symbols-outlined text-[16px]">mail</span>
                  Direct Telemetry
                </div>
<h4 class="font-headline-sm text-headline-sm font-bold text-on-primary">Industrial Bulletin</h4>
<p class="font-body-sm text-body-sm text-on-primary-container mt-1 mb-space-md leading-relaxed">
                  Receive monthly metallurgical test reports and hydraulic service advisories directly in your inbox.
                </p>
<form class="flex flex-col gap-2" onsubmit="event.preventDefault(); alert('Subscribed to Engineering Bulletin.');">
<input class="w-full bg-surface-container-lowest text-on-surface px- space-sm px-space-md py-2.5 rounded-full text-body-sm font-body-sm focus:outline-none shadow-sm" placeholder="fleet.engineer@company.com" required="" type="email">
<button class="w-full py-2.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-lg text-label-lg font-bold hover:bg-white transition-colors shadow-sm text-center" type="submit">
                    Subscribe Bulletin
                  </button>
</form>
<span class="block text-[11px] text-on-primary-container/80 mt-2 text-center">Zero marketing spam. Only audited technical digests.</span>
</div>
</div>
</div>
</aside>
</div>
</div>
</section>
</div></main><footer class="w-full bg-primary text-on-primary mt-space-2xl pt-space-2xl pb-space-xl relative overflow-hidden"><div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div><div class="relative z-10 max-w-[1360px] mx-auto px-margin-mobile lg:px-margin"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-gutter"><div class="lg:col-span-4 flex flex-col gap-space-md"><div class="flex flex-col gap-space-sm"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Follow us</h4><div class="flex items-center gap-space-md"><a aria-label="Instagram" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a><a aria-label="Facebook" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg></a><a aria-label="TikTok" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31 0 2.6.43 3.65 1.22.09.07.18.15.26.23.02.02.04.05.07.07 1.09.97 1.75 2.37 1.78 3.86v.44c1.17-.38 2.41-.45 3.64-.2v3.31c-.96.08-1.91-.07-2.81-.44-.39-.16-.76-.36-1.1-.6v8.83c0 4.01-3.26 7.26-7.27 7.26-4.02 0-7.27-3.25-7.27-7.26 0-3.9 3.08-7.07 6.94-7.24.36-.02.73 0 1.09.07v3.42c-.36-.08-.73-.09-1.09-.04-2.1.25-3.66 2.04-3.61 4.15.05 2.08 1.76 3.75 3.84 3.75 2.12 0 3.84-1.72 3.84-3.84V0h-3.13z"></path></svg></a><a aria-label="LinkedIn" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg></a></div></div><p class="font-body-md text-body-md text-on-primary-container max-w-sm mt-space-xs">Heavy industrial machinery, advanced powertrain architectures, and precision hydraulic systems engineered for global infrastructure operations.</p></div><div class="lg:col-span-2 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Quick Links</h4><ul class="flex flex-col gap-space-sm"><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="home" href="#">Home</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="products" href="#">Product Catalog</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="about-us" href="#">About Us</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="news" href="#">News &amp; Insights</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="contact" href="#">Technical Support</a></li></ul></div><div class="lg:col-span-3 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Products</h4><ul class="flex flex-col gap-space-sm"><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="heavy-machinery" href="#">Heavy Machinery Units</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="hydraulic-systems" href="#">High-Pressure Hydraulics</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="spare-parts" href="#">OEM Spare Parts</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="powertrain" href="#">Powertrain Assemblies</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="products" href="#">All Catalogs</a></li></ul></div><div class="lg:col-span-3 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Global Headquarters</h4><p class="font-body-sm text-body-sm text-on-primary-container">4800 Industrial Parkway, Sector 9<br>Heavy Engineering Corridor<br>Detroit, MI 48202</p><div class="flex flex-col gap-space-xs pt-space-xs"><span class="font-label-spec text-label-spec text-secondary-fixed uppercase tracking-wider font-semibold">Direct Contact</span><p class="font-body-sm text-body-sm text-on-primary-container">+1 (800) 846-7987 • rfq-desk@thorxup-machinery.com</p></div></div></div><div class="pt-space-2xl pb-space-md select-none pointer-events-none overflow-hidden flex items-center justify-between gap-space-lg tracking-tighter leading-none opacity-20 hover:opacity-30 transition-opacity"><div class="flex items-baseline shrink-0"><span class="font-display-hero text-[64px] sm:text-[96px] md:text-[120px] lg:text-[148px] font-black text-on-primary uppercase tracking-tighter">THORX</span><span class="font-display-hero text-[32px] sm:text-[48px] md:text-[60px] lg:text-[76px] font-black text-secondary-fixed uppercase tracking-wider -translate-y-4 md:-translate-y-8 ml-1">up</span></div><div class="flex-1 h-1 bg-secondary-fixed/40 rounded-full"></div></div><div class="mt-space-2xl pt-space-lg border-t border-primary-container flex flex-col sm:flex-row items-center justify-between gap-space-md"><p class="font-body-sm text-body-sm text-on-primary-container">© 2026 THORXup Heavy Machinery Ltd. All rights reserved.</p><div class="flex items-center gap-space-lg"><a class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors" data-path="privacy-policy" href="#">Privacy Policy</a><a class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors" data-path="terms-of-service" href="#">Terms of Service</a></div></div></div></footer>


</body></html>