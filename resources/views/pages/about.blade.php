<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-fixed-dim": "#bbc3ff", "on-secondary-fixed-variant": "#354187", "secondary-fixed": "#dee0ff", "on-error-container": "#93000a", "primary": "#1e3093", "primary-fixed-dim": "#bbc3ff", "surface-container": "#f0eded", "inverse-surface": "#303030", "primary-container": "#3949ab", "surface-container-low": "#f5f3f2", "on-primary-fixed-variant": "#2c3c9e", "on-secondary-fixed": "#01105b", "surface-container-lowest": "#ffffff", "secondary": "#4d59a0", "on-error": "#ffffff", "inverse-primary": "#bbc3ff", "outline": "#767684", "tertiary-fixed-dim": "#bdc7d4", "background": "#fbf9f8", "on-primary": "#ffffff", "on-secondary-container": "#354187", "surface-tint": "#4555b7", "secondary-container": "#a5b1ff", "on-tertiary": "#ffffff", "surface-bright": "#fbf9f8", "surface-variant": "#e4e2e1", "inverse-on-surface": "#f3f0f0", "on-surface": "#1b1c1c", "on-surface-variant": "#454652", "primary-fixed": "#dee0ff", "error-container": "#ffdad6", "on-primary-fixed": "#000e5e", "surface-dim": "#dcd9d9", "on-background": "#1b1c1c", "surface-container-highest": "#e4e2e1", "on-primary-container": "#bbc3ff", "surface": "#fbf9f8", "tertiary-fixed": "#d9e3f0", "surface-container-high": "#eae8e7", "tertiary": "#333d47", "on-secondary": "#ffffff", "error": "#ba1a1a", "outline-variant": "#c6c5d4", "tertiary-container": "#4a545e", "on-tertiary-container": "#bec8d4", "on-tertiary-fixed-variant": "#3e4852", "on-tertiary-fixed": "#131d26" }, "borderRadius": { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" }, "spacing": { "space-lg": "1.5rem", "gutter-sm": "1rem", "margin": "3rem", "space-md": "1rem", "space-xl": "2.5rem", "margin-mobile": "1.25rem", "space-2xl": "4rem", "gutter": "1.5rem", "space-sm": "0.5rem", "space-xs": "0.25rem" }, "fontFamily": { "body-lg": ["Inter"], "headline-lg-mobile": ["Plus Jakarta Sans"], "label-lg": ["Inter"], "display-hero": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"], "display-hero-mobile": ["Plus Jakarta Sans"], "label-md": ["Inter"], "headline-lg": ["Plus Jakarta Sans"], "body-md": ["Inter"], "body-sm": ["Inter"], "label-spec": ["Inter"] }, "fontSize": { "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }], "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "700" }], "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }], "display-hero": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700" }], "headline-sm": ["18px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "600" }], "display-hero-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "800" }], "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }], "headline-lg": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }], "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }], "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }], "label-spec": ["11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" }] } } } };</script>
</head>

<body class="font-body-md text-on-surface antialiased bg-surface-container-low">
    @include('components.header')
    <main class="w-full pt-20 min-h-screen bg-surface-container-low">
        <div class="flex flex-col w-full">
            <!-- BREADCRUMB HEADER -->
            <section class="w-full bg-surface-container-low py-space-sm pt-space-lg pb-2">
                <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between">
                    <x-breadcrumb :items="[['label' => 'Home', 'url' => url('/')], ['label' => 'About Us']]" />
                </div>
            </section>
            <!-- MAIN NARRATIVE & MEDIA SECTION -->
            <section class="w-full bg-surface-container-low pt-4 pb-space-xl">
                <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
                        <div class="lg:col-span-7 flex flex-col gap-space-lg">
                            <div class="flex flex-col gap-space-sm">
                                <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
                                    Ringkasan &amp; Profil Perusahaan
                                </h2>
                            </div>
                            <div class="flex flex-col gap-space-md">
                                <div class="flex items-baseline gap-space-md pb-space-sm border-b border-outline-variant/30">
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        <b>Throx Up</b> menghadirkan rangkaian produk perawatan, perlindungan, dan rekondisi permukaan logam yang dirancang untuk kebutuhan industri manufaktur dan pemeliharaan mesin. Produk-produk Throx Up diformulasikan khusus untuk memberikan ketahanan jangka panjang terhadap korosi, gesekan, dan degradasi permukaan pada berbagai jenis logam dan paduan.
                                    </p>
                                </div>
                                <div class="flex items-baseline gap-space-md py-space-sm border-b border-outline-variant/30">
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Portofolio Throx Up mencakup protective coating, surface treatment, corrosion inhibitor, dan produk pembersih permukaan industri yang dapat diaplikasikan pada baja karbon, stainless steel, aluminium, dan logam non-ferrous lainnya. Formulasi inovatif Throx Up memastikan adhesi optimal dan perlindungan yang tahan lama bahkan pada kondisi operasional yang paling menuntut.
                                    </p>
                                </div>
                                <div class="flex items-baseline gap-space-md py-space-sm border-b border-outline-variant/30">
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Melalui kemitraan dengan PT Trit Indonesia, produk Throx Up tersedia untuk mendukung program perawatan preventif dan perlindungan aset mesin industri di seluruh Indonesia dengan standar kualitas yang terjamin.
                                    </p>
                                </div>
                            </div>
                            <div class="p-space-lg rounded-DEFAULT bg-surface-container-low shadow-sm flex flex-col gap-space-sm relative overflow-hidden">
                                <div class="flex items-center gap-space-xs text-primary font-headline-sm text-headline-sm font-bold">
                                    <h3>Inovasi Perlindungan Permukaan untuk Industri Modern</h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Throx Up berkomitmen menghadirkan solusi kimia permukaan yang efektif dan mudah diaplikasikan oleh tim maintenance industri. Dengan formulasi yang terus disempurnakan berdasarkan masukan dari pengguna industri, Throx Up memastikan setiap produk memberikan nilai nyata dalam memperpanjang umur aset dan mengurangi biaya perawatan. Di Indonesia, Throx Up menjadi pilihan tim maintenance yang mengutamakan perlindungan mesin jangka panjang.
                                </p>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex flex-col gap-space-lg">
                            <div class="rounded-DEFAULT bg-surface-container-lowest overflow-hidden shadow-md flex flex-col group">
                                <div class="relative w-full h-64 bg-surface-container">
                                    <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBqSUcRpj0STlfbpJ73LaJeX0HwWx84SxecFyKsNShncOipNPEA8FJDH3eec2W0vIWQsyxZuMmPjZ_XAQEHEqhPtcZGBdYjr4rcd9q_SoI2xVctIX8WOrTgCRNAnz8i4p9MnhFp2-GPUdS1d6Gys1kHrry5t1O_2LvHDSmNy_sof73PK3V0IqcwUrF_TuO5ncVzyfXMl9Ju2sm3FA-W3UkSr3P6qkqIaYmPdp5WrKHJ')">
                                    </div>
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent flex items-center justify-center p-space-md">
                                        <button aria-label="Play facility video" class="w-16 h-16 rounded-full bg-surface-container-lowest text-primary shadow-xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all" type="button">
                                            <span class="material-symbols-outlined text-[36px] ml-1">play_arrow</span>
                                        </button>
                                    </div>
                                    <div class="absolute top-space-sm right-space-sm px-2.5 py-1 rounded-full bg-inverse-surface/80 text-inverse-on-surface font-label-spec text-label-spec uppercase tracking-wider backdrop-blur-sm">
                                        03:45 HD
                                    </div>
                                </div>
                                <div class="p-space-md flex flex-col gap-space-xs">
                                    <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">
                                        Tonton Video Profil Fasilitas &amp; Aplikasi Lapangan
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Pengujian laboratorium dinamis atas aplikasi protective coating pada rakitan transmisi berat dan sistem pompa hidrolik bertekanan tinggi.
                                    </p>
                                </div>
                            </div>
                            <div class="rounded-DEFAULT bg-surface-container-lowest overflow-hidden shadow-md flex flex-col">
                                <div class="relative w-full h-56 bg-surface-container">
                                    <img alt="Heavy machinery tracks, steel sprockets and rollers workshop application" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/ALJJyrDbzQqNtyqjbTrA2m_XbLklVB8l_Ucy0_riJZTbCoQkhm6IUMvwwefm2huXXG4zp0Y7a0kwLKWEGYGOcU6ruGBrxK1reB5NftSJJ4Ivq82HCPYgjMgF5oSMMZaAKkmWDgGu7grdp-n68ME0d6WOj4D7v-gVRK0qszz9oyfOn144taUstVRWTYFsR1xcGzS42M7WwzF-p9YqdHv7hDYim0ey3cMpfZUBQ-TqlXCJQPojgg">
                                </div>
                                <div class="p-space-md flex flex-col gap-1 bg-surface-container-low">
                                    <span class="font-label-spec text-label-spec text-secondary uppercase tracking-wider font-bold">Distribusi Nasional &amp; Dukungan On-Site</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Layanan inspeksi metalurgi langsung di lokasi tambang dan bengkel fabrikasi dengan respon teknis cepat di seluruh wilayah operasional Indonesia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- VISION & MISSION SECTION -->
            <section class="w-full bg-surface-container-low pt-space-lg pb-space-2xl">
                <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-xl">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-stretch">
                        <div class="lg:col-span-5 rounded-DEFAULT bg-primary text-on-primary p-space-xl flex flex-col justify-between shadow-lg relative overflow-hidden">
                            <div class="flex flex-col gap-space-md relative z-10">
                                <div class="border-b-2 border-secondary-fixed pb-2 mb-2 w-fit">
                                    <h3 class="font-headline-md text-headline-md font-bold text-surface-container-lowest tracking-tight">Our Vision</h3>
                                </div>
                                <p class="font-headline-md text-headline-md font-bold leading-snug tracking-tight text-surface-container-lowest">
                                    “To be trusted solution for mining &amp; manufacturing operations through high performance product that enhance productivity, reliability, and sustainability.”
                                </p>
                            </div>
                        </div>
                        <div class="lg:col-span-7 rounded-DEFAULT bg-surface-container-lowest p-space-xl shadow-md flex flex-col justify-between gap-space-md">
                            <div class="border-b-2 border-primary pb-2 mb-4 w-fit">
                                <h3 class="font-headline-md text-headline-md font-bold text-primary tracking-tight">Our Mission</h3>
                            </div>
                            <div class="flex flex-col gap-space-md">
                                <div class="flex items-baseline gap-space-md pb-space-sm border-b border-outline-variant/30">
                                    <span class="text-[32px] font-extrabold text-primary shrink-0 leading-none">01</span>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">Deliver high quality and high durability products to support mining activities under demanding operational conditions.</p>
                                </div>
                                <div class="flex items-baseline gap-space-md py-space-sm border-b border-outline-variant/30">
                                    <span class="text-[32px] font-extrabold text-primary shrink-0 leading-none">02</span>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">Provide productivity and reliability oriented solutions to improve work effectiveness and reduce operational risk.</p>
                                </div>
                                <div class="flex items-baseline gap-space-md py-space-sm border-b border-outline-variant/30">
                                    <span class="text-[32px] font-extrabold text-primary shrink-0 leading-none">03</span>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">Ensure product availability and timely distribution through responsive and consistent supply chain management.</p>
                                </div>
                                <div class="flex items-baseline gap-space-md pt-space-sm">
                                    <span class="text-[32px] font-extrabold text-primary shrink-0 leading-none">04</span>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">Evaluation, technical support, and portfolio development aligned with the evolving needs of the mining industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- TECHNICAL CONSULTATION & CTA BANNER -->
            <section class="w-full py-space-2xl bg-surface-container-low">
                <div class="max-w-[1360px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="rounded-lg bg-primary text-on-primary p-space-xl lg:p-space-2xl shadow-xl relative overflow-hidden flex flex-col lg:flex-row items-center justify-between gap-space-xl">
                        <div class="flex flex-col gap-space-sm max-w-2xl relative z-10">
                            <h2 class="font-headline-lg text-headline-lg font-extrabold tracking-tight">
                                Konsultasikan Kebutuhan Proteksi &amp; Perawatan Mesin Industri Anda
                            </h2>
                            <p class="font-body-md text-body-md text-on-primary-container leading-relaxed">
                                Tim rekayasa kimia dan spesialis aplikasi kami siap mengevaluasi kondisi operasional, tantangan degradasi permukaan, serta merekomendasikan formulasi paling efisien untuk fasilitas Anda.
                            </p>
                        </div>
                        <div class="flex flex-col sm:flex-row items-center gap-space-md shrink-0 w-full lg:w-auto relative z-10">
                            <a class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-surface-container-lowest text-primary font-label-lg text-label-lg font-bold text-center hover:bg-secondary-fixed transition-colors shadow-md" href="#">
                                Hubungi Tim Teknis
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    @include('components.footer')
    <script>
        // Carousel Controller (placeholder - no carousel on this page)
    </script>
</body>

</html>