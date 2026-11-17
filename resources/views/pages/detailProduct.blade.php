<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_standard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-fixed-dim": "#bbc3ff", "on-secondary-fixed-variant": "#354187", "secondary-fixed": "#dee0ff", "on-error-container": "#93000a", "primary": "#1e3093", "primary-fixed-dim": "#bbc3ff", "surface-container": "#f0eded", "inverse-surface": "#303030", "primary-container": "#3949ab", "surface-container-low": "#f5f3f2", "on-primary-fixed-variant": "#2c3c9e", "on-secondary-fixed": "#01105b", "surface-container-lowest": "#ffffff", "secondary": "#4d59a0", "on-error": "#ffffff", "inverse-primary": "#bbc3ff", "outline": "#767684", "tertiary-fixed-dim": "#bdc7d4", "background": "#fbf9f8", "on-primary": "#ffffff", "on-secondary-container": "#354187", "surface-tint": "#4555b7", "secondary-container": "#a5b1ff", "on-tertiary": "#ffffff", "surface-bright": "#fbf9f8", "surface-variant": "#e4e2e1", "inverse-on-surface": "#f3f0f0", "on-surface": "#1b1c1c", "on-surface-variant": "#454652", "primary-fixed": "#dee0ff", "error-container": "#ffdad6", "on-primary-fixed": "#000e5e", "surface-dim": "#dcd9d9", "on-background": "#1b1c1c", "surface-container-highest": "#e4e2e1", "on-primary-container": "#bbc3ff", "surface": "#fbf9f8", "tertiary-fixed": "#d9e3f0", "surface-container-high": "#eae8e7", "tertiary": "#333d47", "on-secondary": "#ffffff", "error": "#ba1a1a", "outline-variant": "#c6c5d4", "tertiary-container": "#4a545e", "on-tertiary-container": "#bec8d4", "on-tertiary-fixed-variant": "#3e4852", "on-tertiary-fixed": "#131d26" }, "borderRadius": { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" }, "spacing": { "space-lg": "1.5rem", "gutter-sm": "1rem", "margin": "3rem", "space-md": "1rem", "space-xl": "2.5rem", "margin-mobile": "1.25rem", "space-2xl": "4rem", "gutter": "1.5rem", "space-sm": "0.5rem", "space-xs": "0.25rem" }, "fontFamily": { "body-lg": [ "Inter" ], "headline-lg-mobile": [ "Plus Jakarta Sans" ], "label-lg": [ "Inter" ], "display-hero": [ "Plus Jakarta Sans" ], "headline-md": [ "Plus Jakarta Sans" ], "headline-sm": [ "Plus Jakarta Sans" ], "display-hero-mobile": [ "Plus Jakarta Sans" ], "label-md": [ "Inter" ], "headline-lg": [ "Plus Jakarta Sans" ], "body-md": [ "Inter" ], "body-sm": [ "Inter" ], "label-spec": [ "Inter" ] }, "fontSize": { "body-lg": [ "18px", { "lineHeight": "28px", "fontWeight": "400" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "700" } ], "label-lg": [ "14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" } ], "display-hero": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "800" } ], "headline-md": [ "24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700" } ], "headline-sm": [ "18px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "600" } ], "display-hero-mobile": [ "36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "800" } ], "label-md": [ "12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "headline-lg": [ "36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "body-md": [ "15px", { "lineHeight": "24px", "fontWeight": "400" } ], "body-sm": [ "13px", { "lineHeight": "20px", "fontWeight": "400" } ], "label-spec": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ] } } } };</script></head><body class="font-body-md text-on-surface antialiased bg-white">@include('components.header')<main class="w-full pt-20 min-h-screen bg-white"><div class="flex flex-col w-full">
<!-- Breadcrumb Navigation Bar -->
<section class="w-full py-space-sm bg-white pt-4">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
<nav class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="#">

<span>Home</span>
</a>
<span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
<a class="hover:text-primary transition-colors" href="#">Products</a>
<span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
<a class="hover:text-primary transition-colors" href="#">Hydraulic Assemblies</a>
<span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
<span class="text-primary font-bold">HP-4200 Axial Piston Pump</span>
</nav>
</div>
</section>
<!-- Main Product Detail Showcase Section -->
<section class="w-full py-space-xl">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
<!-- LEFT COLUMN: Product Gallery (Extra Large Main + 4 Medium Thumbnails) -->
<div class="lg:col-span-7 flex flex-col gap-space-md">
<!-- Main Large Display Container -->
<div class="relative bg-surface-container-lowest rounded-DEFAULT p-space-md shadow-md overflow-hidden group">
<!-- Badges Bar -->

<!-- Zoom & Inspect Controls -->

<!-- Extra Size Main Product Viewport -->
<div class="relative w-full h-[440px] md:h-[520px] rounded-DEFAULT overflow-hidden bg-surface-container-high flex items-center justify-center cursor-crosshair">
<img alt="Heavy crawler excavator hydraulic undercarriage and main chassis during dynamometer load testing inside a heavy machinery plant." class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105" data-alt="Heavy crawler excavator hydraulic undercarriage and main chassis during dynamometer load testing inside a heavy machinery plant." id="mainProductImg" src="placeholder" style="opacity: 1;">

</div>
</div>
<!-- Secondary Medium Thumbnail Gallery -->
<div class="grid grid-cols-4 gap-space-sm" id="thumbGallery">
<!-- Thumb 1 -->
<button class="thumb-btn text-left p-1 rounded-DEFAULT bg-surface-container-lowest shadow-sm hover:shadow transition-all group overflow-hidden" data-img-alt="Detailed macro angle of hydraulic valve block manifold and precision port connectors on an industrial test bench with pressure readouts and steel tubing." data-img-src="placeholder" data-title="Control Valve Manifold">
<div class="relative w-full h-24 rounded-DEFAULT overflow-hidden bg-surface-container">
<img alt="Control Valve Port Array" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" data-alt="Detailed macro angle of hydraulic valve block manifold and precision port connectors on an industrial test bench with pressure readouts and steel tubing." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9vrH5tt2HqAviNzemESs4N4JM4087PwagcSKtHfKX8_eXAZ6e7BJLrfO0R3z81knOCfxpEJHkTO6Ib-bpi_BMB8fT9fekn6igDnzXn1ZFeYYoNrfffexlQyu6iwMkT6JnLqnqJSO7xRwhBmtZR5nUURMcvtKKkMVR8cyP5pbTqNxpDIb97OXVIm-5WPtbreQYNz4-YHPRnpIoAQseyeUJynnBOFg5gIS6nRDP19st">

</div>
</button>
<!-- Thumb 2 -->
<button class="thumb-btn text-left p-1 rounded-DEFAULT bg-surface-container-lowest shadow-sm hover:shadow transition-all group overflow-hidden" data-img-alt="Exploded technical CAD cross-section render of heavy machinery rotating swashplate and 9-piston axial barrel assembly with dimensional callouts and metallurgy labels." data-img-src="placeholder" data-title="Internal Swashplate CAD">
<div class="relative w-full h-24 rounded-DEFAULT overflow-hidden bg-surface-container">
<img alt="Exploded Internal CAD" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" data-alt="Exploded technical CAD cross-section render of heavy machinery rotating swashplate and 9-piston axial barrel assembly with dimensional callouts and metallurgy labels." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBA41c5y8JcnKxudHa_jO-ErCkb-zbvmcueajkUobasySiuM0gXwsjqNNcL8HnmDMisIuoHKW9VxHDNb87xIJLLiA16ns9ovb30866XS8zLxqp80ruB2-Gy3Sij3Z8KFI3Ablnlll7W65zcOFpiOQAIuPmT4-a2YtX8MDLtK3OLLIN19hJFk2DDLGXGrST-yXM25xLeCaIjsRlJJvnnXt6jnBTKbiGDvR7yemnBLhC8">

</div>
</button>
<!-- Thumb 3 -->
<button class="thumb-btn text-left p-1 rounded-DEFAULT bg-surface-container-lowest shadow-sm hover:shadow transition-all group overflow-hidden" data-img-alt="Heavy steel 14-tooth involute spline shaft and SAE 4-bolt D-pattern mounting flange face on industrial assembly table with machined bevels." data-img-src="placeholder" data-title="Spline Drive Shaft &amp; Flange">
<div class="relative w-full h-24 rounded-DEFAULT overflow-hidden bg-surface-container">
<img alt="Drive Shaft Spline View" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" data-alt="Heavy steel 14-tooth involute spline shaft and SAE 4-bolt D-pattern mounting flange face on industrial assembly table with machined bevels." src="https://lh3.googleusercontent.com/aida-public/AB6AXuABqbORmRur_18f3x4OIKy8B4Os7WeVEjcMSyJNyag2EEDy_R3Fo1x4AxlcJXpLgLiJSp8hSg93newpv8K5GZxjArIxbe8ELQ1brfMkkXdeu73-eaLvBhfDvYzX_0nBSiYPArK_-pV3g-GmrOGifIXL0tQ8MrjZmZxsmsfA5IjnSmhG8cKwhJa05E8VIDmwjFWT13JRlXuEwJm3kRgcyGfTGW09WG8WbnR6CWiRxPlZ">

</div>
</button>
<!-- Thumb 4 -->
<button class="thumb-btn text-left p-1 rounded-DEFAULT bg-surface-container-lowest shadow-sm hover:shadow transition-all group overflow-hidden ring-2 ring-primary bg-surface-container-high" data-img-alt="Heavy crawler excavator hydraulic undercarriage and main chassis during dynamometer load testing inside a heavy machinery plant." data-img-src="placeholder" data-title="Bench Load Test">
<div class="relative w-full h-24 rounded-DEFAULT overflow-hidden bg-surface-container">
<img alt="Testing Bench Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" data-alt="Heavy crawler excavator hydraulic undercarriage and main chassis during dynamometer load testing inside a heavy machinery plant." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzzgOcYOKCRLjzJUgEDb4SavYG9JtgAptsc78Nsu8J8yMW8d1oKHL4L_xNOzclcXouL2e4E2-mwpeJNQw7XBWFpSnfB3NcmjFAO721O48-mtZPKZF83V-g24ia9t8fdj5CGjeCyXYejU8O7DkQcIWzWnpu3ZLWyEzqtb-qCcjFpiDJEJD5TO-OfzhIYa7hKtzq_79evi-opayCZo6CcdUoeTdMDqnrmR42x0kKCvy4">

</div>
</button>
</div>
<!-- Direct Operational Assurance Metrics Strip -->

</div>
<!-- RIGHT COLUMN: Core Product Information & Commercial Ordering Desk -->
<div class="lg:col-span-5 flex flex-col gap-space-md">
<!-- Category & Metadata Header -->
<div class="flex flex-col gap-space-xs">

<h1 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight">
              HP-4200 Axial Piston High-Pressure Pump Unit
            </h1>

</div>
<!-- Commercial Pricing & RFQ Strip -->

<!-- Product Description (Deskripsi) -->
<div class="flex flex-col gap-space-xs">
<h2 class="font-label-lg text-label-lg font-bold uppercase tracking-wider text-on-surface">Description</h2>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Heavy-duty variable displacement axial piston pump engineered specifically for extreme hydraulic excavator operations, continuous high-pressure fluid transfer, and harsh mining environments with minimal thermal degradation. Built with high-grade spheroidal graphite iron casting and integrated charge relief manifolds.
            </p>
</div><div class="flex flex-col gap-space-xs"><h2 class="font-label-lg text-label-lg font-bold uppercase tracking-wider text-on-surface">Benefits</h2><p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">Engineered with dual high-pressure swashplate dynamics delivering up to 98.4% volumetric efficiency across continuous heavy-duty duty cycles. Features heat-treated spheroidal graphite iron casting with advanced cavitation resistance, integrated internal charge relief dampening, and high-temp Viton™ seals providing extended mean time between maintenance (MTBM) in abrasive mining and earthmoving conditions.</p></div><div class="flex flex-col gap-space-xs"><h2 class="font-label-lg text-label-lg font-bold uppercase tracking-wider text-on-surface">Detail Produk</h2><p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">High-performance 140 cc/rev displacement pump unit featuring SAE 4-bolt standard mounting flange, dual-port high-flow suction manifold, 14T involute spline drive shaft compliant with DIN 5480, and pre-calibrated proportional load-sensing regulator. Rated for 350 Bar continuous operating pressure with a 420 Bar intermittent peak limit at 1,800 RPM.</p></div>
<!-- Key Benefits & Value Propositions (Benefits & Isi) -->

<!-- Technical Specs & Dimensional Metrics (Detail Produk, Volume, Weight) -->

<!-- PRIMARY ACTION BUTTONS: Official WhatsApp Order + Spec Download -->
<div class="flex flex-col gap-space-sm pt-space-xs">
<!-- Main WhatsApp Callout Button -->
<a class="w-full bg-[#25D366] hover:bg-[#20bd5a] text-white py-3.5 px-6 rounded-full font-label-lg text-label-lg flex items-center justify-center gap-3 shadow-md hover:shadow-lg transition-all transform active:scale-[0.99] font-bold" href="https://wa.me/18008467987?text=Hello%20THORXup%20Machinery,%20I%20would%20like%20to%20order/inquire%20about%20the%20HP-4200%20Axial%20Piston%20Pump%20(TX-HYD-4200-AXP)" rel="noopener noreferrer" target="_blank">
<!-- WhatsApp Icon SVG -->
<svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
<path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path>
</svg>
<span>Order Now via WhatsApp</span>
</a>
<!-- Supporting Action Row -->

<!-- Guarantee Note -->
<div class="flex items-center justify-center gap-2 pt-1 text-on-surface-variant font-label-spec text-label-spec">

<span>Guaranteed 15-minute engineering reply on WhatsApp Business</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section: Technical Compatibility & Verification Matrix -->

<!-- Section: Related Products (Produk Lainnya) -->
<section class="w-full py-space-2xl bg-white">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-xl">
<div>

<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">Related Heavy Machinery &amp; Replacement Parts</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">
            Complementary hydraulic units and powertrain assemblies frequently paired with the HP-4200 pump.
          </p>
</div>
<a class="inline-flex items-center gap-2 text-primary font-label-lg text-label-lg font-semibold hover:underline shrink-0" href="#">
<span>View All 184 Components</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
<!-- 4 Product Cards Grid matching SCREEN_2 style -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Product Card 1: Heavy Excavator -->
<div class="bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
<div class="relative w-full h-52 bg-surface-container-high overflow-hidden">
<img alt="THORX-X950 Heavy Excavator" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Heavy crawler excavator THORX-X950 moving earth at an industrial open-pit quarry during dusk with safety beacons illuminated and heavy iron treads." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcv-idXmUqwPt-8rTVMljZTmxgxWZ1aN8FaVwAWpbynWABMM8CXNh2nLugSbENflAhqHkRz1HenfNMmSH6NXGE8puSJB8TBxo_WOMM2G7qVpf6mNFaEUMTBjuBbToCT0wZwC6pZOjkUPI89X9Z4OcLVDvTtR2Su7Ss8Vo0rOYDKQIKqtElf2Q52SeOKwJMsDBfbD1KvmufIzjY9SMUj6sXrYV8OHwYXwTAqfFNYe_y">

</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<span class="text-primary font-label-spec text-label-spec font-bold uppercase tracking-wider block mb-1">HEAVY EXCAVATORS</span><h3 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">
                THORX-X950 Heavy Excavator
              </h3>

</div>
<div class="pt-space-xs flex items-center justify-between">

<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
<span>View Details</span>
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</a>
</div>
</div>
</div>
<!-- Product Card 2: Undercarriage Master Link -->
<div class="bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
<div class="relative w-full h-52 bg-surface-container-high overflow-hidden">
<img alt="DuraTrack Master Link Assembly" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Heavy forged steel track chains and master link undercarriage track assemblies hoisted on steel frame inside heavy machinery overhaul warehouse." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtpA2XoqHJdA8J1s3LhDaxYoCq3vTka5SvC4g1SQg8oUuNh_CI52UEIUTzVzPP6g4dtqLn-IN-Jo7V0H3ZhZ46YWMhtx-MXRAdrgxyJnpteZHOfD7bj2bPjtMBbaySq-RkHlqrt4ZXzsu3d-JYmrhrFMVQe4kN27jOWHNnKY4BQrZfwO2IyKNiRh7eyuDzyzfi_VZRV-glplJfRrYq_2CsKb0IPXEZ8zYKX9CYePlA">

</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<span class="text-primary font-label-spec text-label-spec font-bold uppercase tracking-wider block mb-1">UNDERCARRIAGE &amp; TRACKS</span><h3 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">
                DuraTrack Master Link Assembly
              </h3>

</div>
<div class="pt-space-xs flex items-center justify-between">

<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
<span>View Details</span>
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</a>
</div>
</div>
</div>
<!-- Product Card 3: Monoblock Valve Block -->
<div class="bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
<div class="relative w-full h-52 bg-surface-container-high overflow-hidden">
<img alt="ApexFlow Monoblock Valve Block" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Monoblock hydraulic directional control valve block manifold machined from cast iron with multiple electronic proportional solenoid actuators." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-feSgUNZOfUsjmir9rb5zpQ4Crq9zME6eLBJQqG2dDaLyzRslzxX2Owk92oBXFhxU6N5MKHrNxs_St93mU6YNxHEseaz0eMYcv18fUMneei41SKLGh85CjVngU1gO2V1SQSK2VEp8WI5iWz-GT34gfmp4QSw1I2eVhgYn4nCeG03cGrUoZzcaDV0fs1vmZpuF7IDhlr6EWzgkGVYnDBX3bo_g3qQw8RbvqIVP3W98">

</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<span class="text-primary font-label-spec text-label-spec font-bold uppercase tracking-wider block mb-1">HYDRAULIC ASSEMBLIES</span><h3 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">
                ApexFlow Monoblock Valve Block
              </h3>

</div>
<div class="pt-space-xs flex items-center justify-between">

<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
<span>View Details</span>
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</a>
</div>
</div>
</div>
<!-- Product Card 4: V8 TurboDiesel Engine Block -->
<div class="bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
<div class="relative w-full h-52 bg-surface-container-high overflow-hidden">
<img alt="V8 TurboDiesel Heavy Block" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Massive industrial V8 turbodiesel heavy powertrain block on an engine dyno stand in a clean engineering development facility." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkMPMMfk_jVMss4O7JYTiNVVnCNHDoQSevk36hgPY8nQtJcYMldSyRcCHWx69t3_IieDhmPeAAdycpMBya_D5yktDTICx6ieAfUOV2Y99D_auABf4znbvJT3TIPqwvJsNkJvCBGd5QgcfT1a5bEsKefS_h98Iz9HC-uGZnIUHGj8mgiJ3lQsYCXxuFTQMUErKwW7uN6zt3lcUZ3ZFTNO8IaTaQpoHM77I91GkjIeIZ">

</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<span class="text-primary font-label-spec text-label-spec font-bold uppercase tracking-wider block mb-1">POWERTRAIN &amp; ENGINES</span><h3 class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">
                V8 TurboDiesel Heavy Block
              </h3>

</div>
<div class="pt-space-xs flex items-center justify-between">

<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary group-hover:translate-x-1 transition-transform" href="#">
<span>View Details</span>
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section: Bottom Support Callout Banner (Matching SCREEN_2 Style) -->
<section class="w-full py-space-xl bg-white">
<div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
<div class="bg-surface-container-lowest p-space-xl rounded-DEFAULT shadow-md flex flex-col md:flex-row items-center justify-between gap-space-lg relative overflow-hidden">
<div class="flex flex-col gap-space-xs z-10 max-w-2xl">

<h2 class="font-headline-md text-headline-md text-on-surface font-bold">
            Need Custom Hydraulic or OEM Fitment Verification?
          </h2>
<p class="font-body-md text-body-md text-on-surface-variant">
            Our certified hydraulic engineers will verify your pump spline dimensions, rotation direction, and operating circuit pressures before dispatch.
          </p>
</div>
<div class="flex flex-wrap items-center gap-space-sm z-10 shrink-0">
<a class="bg-primary hover:bg-primary-container text-on-primary py-3.5 px-7 rounded-full font-label-lg text-label-lg font-bold transition-all shadow-md hover:shadow-lg flex items-center gap-2" href="https://wa.me/18008467987" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[20px]">support_agent</span>
<span>Contact Me</span>
</a>
<a class="bg-surface-container-high hover:bg-surface-container text-on-surface py-3.5 px-6 rounded-full font-label-lg text-label-lg font-semibold transition-all" href="#">
            Schedule Field Call
          </a>
</div>
</div>
</div>
</section>
</div>
<script>
  // Interactive thumbnail swapping & zoom preview behavior
  (function initProductGallery() {
    const mainImg = document.getElementById('mainProductImg');
    const thumbButtons = document.querySelectorAll('.thumb-btn');
    const zoomBtn = document.getElementById('zoomBtn');

    if (!mainImg || !thumbButtons.length) return;

    thumbButtons.forEach((btn, index) => {
      btn.addEventListener('click', function() {
        // Remove active state from siblings
        thumbButtons.forEach(b => {
          b.classList.remove('ring-2', 'ring-primary', 'bg-surface-container-high');
        });
        
        // Add active style to selected thumb
        this.classList.add('ring-2', 'ring-primary', 'bg-surface-container-high');

        // Swap main image attributes with smooth transition
        const newSrc = this.getAttribute('data-img-src') || 'placeholder';
        const newAlt = this.getAttribute('data-img-alt') || 'High resolution heavy machinery engineering component view';
        
        mainImg.style.opacity = '0.4';
        setTimeout(() => {
          mainImg.setAttribute('src', newSrc);
          mainImg.setAttribute('data-alt', newAlt);
          mainImg.setAttribute('alt', newAlt);
          mainImg.style.opacity = '1';
        }, 150);
      });
    });

    if (zoomBtn) {
      let isZoomed = false;
      zoomBtn.addEventListener('click', () => {
        isZoomed = !isZoomed;
        if (isZoomed) {
          mainImg.style.transform = 'scale(1.4)';
          zoomBtn.classList.add('bg-primary', 'text-on-primary');
        } else {
          mainImg.style.transform = 'scale(1)';
          zoomBtn.classList.remove('bg-primary', 'text-on-primary');
        }
      });
    }
  })();
</script></main><footer class="w-full bg-primary text-on-primary mt-space-2xl pt-space-2xl pb-space-xl relative overflow-hidden"><div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div><div class="relative z-10 max-w-[1360px] mx-auto px-margin-mobile lg:px-margin"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-gutter"><div class="lg:col-span-4 flex flex-col gap-space-md"><div class="flex flex-col gap-space-sm"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Follow us</h4><div class="flex items-center gap-space-md"><a aria-label="Instagram" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a><a aria-label="Facebook" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg></a><a aria-label="TikTok" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31 0 2.6.43 3.65 1.22.09.07.18.15.26.23.02.02.04.05.07.07 1.09.97 1.75 2.37 1.78 3.86v.44c1.17-.38 2.41-.45 3.64-.2v3.31c-.96.08-1.91-.07-2.81-.44-.39-.16-.76-.36-1.1-.6v8.83c0 4.01-3.26 7.26-7.27 7.26-4.02 0-7.27-3.25-7.27-7.26 0-3.9 3.08-7.07 6.94-7.24.36-.02.73 0 1.09.07v3.42c-.36-.08-.73-.09-1.09-.04-2.1.25-3.66 2.04-3.61 4.15.05 2.08 1.76 3.75 3.84 3.75 2.12 0 3.84-1.72 3.84-3.84V0h-3.13z"></path></svg></a><a aria-label="LinkedIn" class="w-9 h-9 rounded-full border border-white flex items-center justify-center text-on-primary hover:bg-white hover:text-primary transition-all" href="#"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg></a></div></div><p class="font-body-md text-body-md text-on-primary-container max-w-sm mt-space-xs">Heavy industrial machinery, advanced powertrain architectures, and precision hydraulic systems engineered for global infrastructure operations.</p></div><div class="lg:col-span-2 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Quick Links</h4><ul class="flex flex-col gap-space-sm"><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="home" href="#">Home</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="products" href="#">Product Catalog</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="about-us" href="#">About Us</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="news" href="#">News &amp; Insights</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="contact" href="#">Technical Support</a></li></ul></div><div class="lg:col-span-3 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Products</h4><ul class="flex flex-col gap-space-sm"><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="heavy-machinery" href="#">Heavy Machinery Units</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="hydraulic-systems" href="#">High-Pressure Hydraulics</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="spare-parts" href="#">OEM Spare Parts</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="powertrain" href="#">Powertrain Assemblies</a></li><li class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors"><a data-path="products" href="#">All Catalogs</a></li></ul></div><div class="lg:col-span-3 flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg text-on-primary uppercase tracking-wider font-bold">Global Headquarters</h4><p class="font-body-sm text-body-sm text-on-primary-container">4800 Industrial Parkway, Sector 9<br>Heavy Engineering Corridor<br>Detroit, MI 48202</p><div class="flex flex-col gap-space-xs pt-space-xs"><span class="font-label-spec text-label-spec text-secondary-fixed uppercase tracking-wider font-semibold">Direct Contact</span><p class="font-body-sm text-body-sm text-on-primary-container">+1 (800) 846-7987 • rfq-desk@thorxup-machinery.com</p></div></div></div><div class="pt-space-2xl pb-space-md select-none pointer-events-none overflow-hidden flex items-center justify-between gap-space-lg tracking-tighter leading-none opacity-20 hover:opacity-30 transition-opacity"><div class="flex items-baseline shrink-0"><span class="font-display-hero text-[64px] sm:text-[96px] md:text-[120px] lg:text-[148px] font-black text-on-primary uppercase tracking-tighter">THORX</span><span class="font-display-hero text-[32px] sm:text-[48px] md:text-[60px] lg:text-[76px] font-black text-secondary-fixed uppercase tracking-wider -translate-y-4 md:-translate-y-8 ml-1">up</span></div><div class="flex-1 h-1 bg-secondary-fixed/40 rounded-full"></div></div><div class="mt-space-2xl pt-space-lg border-t border-primary-container flex flex-col sm:flex-row items-center justify-between gap-space-md"><p class="font-body-sm text-body-sm text-on-primary-container">© 2026 THORXup Heavy Machinery Ltd. All rights reserved.</p><div class="flex items-center gap-space-lg"><a class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors" data-path="privacy-policy" href="#">Privacy Policy</a><a class="font-body-sm text-body-sm text-on-primary-container hover:text-on-primary transition-colors" data-path="terms-of-service" href="#">Terms of Service</a></div></div></div></footer>


</body></html>