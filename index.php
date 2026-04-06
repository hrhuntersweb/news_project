<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- TODO: Set the document title to the name of your application -->
    <title>BakuMedia.az — Xəbərlər</title>
    <meta name="description" content="BakuMedia.az — Azərbaycan xəbər portalı">
    <meta name="author" content="Lovable" />

    <!-- TODO: Update og:title to match your application name -->
    <meta property="og:type" content="website" />
    <meta property="og:image"
        content="https://pub-bb2e103a32db4e198524a2e9ed8f35b4.r2.dev/09df9f97-42ed-421d-ae0b-ac4a9d525a6d/id-preview-94a55193--e2826ebb-12a5-49d1-a98a-4687c00f99e5.lovable.app-1774854232335.png">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Lovable" />
    <meta name="twitter:image"
        content="https://pub-bb2e103a32db4e198524a2e9ed8f35b4.r2.dev/09df9f97-42ed-421d-ae0b-ac4a9d525a6d/id-preview-94a55193--e2826ebb-12a5-49d1-a98a-4687c00f99e5.lovable.app-1774854232335.png">
    <meta property="og:title" content="BakuMedia.az — Xəbərlər">
    <meta name="twitter:title" content="BakuMedia.az — Xəbərlər">
    <meta property="og:description" content="BakuMedia.az — Azərbaycan xəbər portalı">
    <meta name="twitter:description" content="BakuMedia.az — Azərbaycan xəbər portalı">

    <link rel="icon" href="assets/media/ico/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <link rel="stylesheet" href="assets/css/main.css">

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4" defer></script>

    <script type="module" src="assets/js/main.js" defer></script>

</head>

<body>

    <div class="min-h-screen bg-background">

        <!-- header start here -->
        <header class="bg-card border-b border-border sticky top-0 z-50">
            <div class="container mx-auto">
                <div class="container flex items-center justify-between h-14 sm:h-16">
                    <!--  Mobile menu button  -->
                    <button class="lg:hidden p-2 rounded-md hover:bg-secondary text-muted-foreground hover:text-foreground
                transition-colors">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu">
                                <path d="M4 5h16" />
                                <path d="M4 12h16" />
                                <path d="M4 19h16" />
                            </svg>
                        </div>
                    </button>
                    <a href="" class="flex items-center gap-2">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg bg-primary flex items-center justify-center">
                            <span class="text-primary-foreground font-extrabold text-base sm:text-lg logo">B</span>
                        </div>
                        <div class="leading-tight">
                            <span class="font-extrabold text-foreground text-base sm:text-lg tracking-tight">BAKU</span>
                            <span
                                class="block text-[10px] sm:text-xs font-semibold text-primary tracking-widest logo-text">
                                MEDİA
                            </span>
                        </div>
                    </a>
                    <nav class="hidden lg:flex items-center gap-1">
                        <!-- dynamic links start here -->
                        <a href=""
                            class="px-3 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors rounded-md hover:bg-secondary">
                            Siyasət
                        </a>
                        <a href=""
                            class="px-3 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors rounded-md hover:bg-secondary">
                            İqtisadiyyat
                        </a>
                        <a href=""
                            class="px-3 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors rounded-md hover:bg-secondary">
                            Gündəm
                        </a>
                        <!-- dynamic links end here -->
                    </nav>
                    <div class="flex items-center gap-1">
                        <input type="text" placeholder="Axtar..."
                            class="border border-border rounded-md px-3 py-1.5 text-sm bg-card outline-none focus:ring-2 focus:ring-primary/30 w-32 sm:w-48 search-input" />
                        <button class="p-2 rounded-md hover:bg-secondary text-muted-foreground hover:text-foreground
                    transition-colors">
                            <div class="search-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
                                    <path d="m21 21-4.34-4.34" />
                                    <circle cx="11" cy="11" r="8" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <!-- Mobile menu  -->
                <nav class="lg:hidden border-t border-border bg-card">
                    <div class="container py-3 flex flex-col gap-1">
                        <!-- dynamic links start here -->
                        <a href="" class="px-3 py-2.5 text-sm font-medium text-foreground hover:text-primary transition-colors
                rounded-md hover:bg-secondary">
                            Siyasət
                        </a>
                        <a href="" class="px-3 py-2.5 text-sm font-medium text-foreground hover:text-primary transition-colors
                rounded-md hover:bg-secondary">
                            İqtisadiyyat
                        </a>
                        <a href="" class="px-3 py-2.5 text-sm font-medium text-foreground hover:text-primary transition-colors
                rounded-md hover:bg-secondary">
                            Gündəm
                        </a>
                        <!-- dynamic links end here -->
                    </div>
                </nav>
            </div>
        </header>
        <!-- header end here -->

        <!-- main start here -->
        <div class="container mx-auto">
            <main class="container py-4 sm:py-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                    <!-- Left: Slider + Categories  -->
                    <section class="lg:col-span-9">
                        <div>
                            <!-- Main slider -->
                            <section id="image-carousel" class="splide" aria-label="Beautiful Images">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <a href="" class="relative rounded-xl overflow-hidden mb-4 sm:mb-6 block">
                                                <img src="assets/media/jpg/news_hero_1.jpg" alt="news_hero_1"
                                                    class="w-full h-[220px] sm:h-[320px] md:h-[400px] object-cover"
                                                    width="800px" height="400px" />
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-foreground/80 via-transparent to-transparent">
                                                    <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6">
                                                        <span
                                                            class="inline-block bg-primary text-primary-foreground text-xs font-semibold px-2.5 py-1 rounded mb-2 text-white category">
                                                            Gündəm
                                                        </span>
                                                        <h2
                                                            class="text-base sm:text-xl font-bold text-primary-foreground leading-snug mb-1 sm:mb-2 text-white">
                                                            DYP sürücülərə müraciət edib
                                                        </h2>
                                                        <span
                                                            class="text-xs sm:text-sm text-primary-foreground/70 text-gray-300">
                                                            30 mart, 10:35
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="splide__slide">
                                            <a href="" class="relative rounded-xl overflow-hidden mb-4 sm:mb-6 block">
                                                <img src="assets/media/jpg/news_hero_2.jpg" alt="news_hero_2"
                                                    class="w-full h-[220px] sm:h-[320px] md:h-[400px] object-cover"
                                                    width="800px" height="400px" />
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-foreground/80 via-transparent to-transparent">
                                                    <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6">
                                                        <span
                                                            class="inline-block bg-primary text-primary-foreground text-xs font-semibold px-2.5 py-1 rounded mb-2 text-white category">
                                                            Gündəm
                                                        </span>
                                                        <h2
                                                            class="text-base sm:text-xl font-bold text-primary-foreground leading-snug mb-1 sm:mb-2 text-white">
                                                            DYP sürücülərə müraciət edib
                                                        </h2>
                                                        <span
                                                            class="text-xs sm:text-sm text-primary-foreground/70 text-gray-300">
                                                            30 mart, 10:35
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="splide__slide">
                                            <a href="" class="relative rounded-xl overflow-hidden mb-4 sm:mb-6 block">
                                                <img src="assets/media/jpg/news_hero_3.jpg" alt="news_hero_3"
                                                    class="w-full h-[220px] sm:h-[320px] md:h-[400px] object-cover"
                                                    width="800px" height="400px" />
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-foreground/80 via-transparent to-transparent">
                                                    <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6">
                                                        <span
                                                            class="inline-block bg-primary text-primary-foreground text-xs font-semibold px-2.5 py-1 rounded mb-2 text-white category">
                                                            Gündəm
                                                        </span>
                                                        <h2
                                                            class="text-base sm:text-xl font-bold text-primary-foreground leading-snug mb-1 sm:mb-2 text-white">
                                                            DYP sürücülərə müraciət edib
                                                        </h2>
                                                        <span
                                                            class="text-xs sm:text-sm text-primary-foreground/70 text-gray-300">
                                                            30 mart, 10:35
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!-- Selected news below slider -->
                            <h3 class="text-base sm:text-lg font-bold text-foreground mb-3 sm:mb-4">Seçilmiş xəbərlər
                            </h3>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4">
                                <!-- dynamic links start here -->
                                <a href="" class="group block">
                                    <div class="rounded-lg overflow-hidden mb-2">
                                        <img src="assets/media/jpg/news_hero_6.jpg" alt="news_hero_6"
                                            class="w-full h-[100px] sm:h-[140px] object-cover group-hover:scale-105 transition-transform duration-300"
                                            loading="lazy" />
                                    </div>
                                    <h4
                                        class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                        Bayramdan sonra ilk dərs günü nə vaxtdır? — AÇIQLAMA
                                    </h4>
                                    <span class="text-[10px] sm:text-xs text-news-time mt-1 block">19.03.2026</span>
                                </a>
                                <a href="" class="group block">
                                    <div class="rounded-lg overflow-hidden mb-2">
                                        <img src="assets/media/jpg/news_hero_2.jpg" alt="news_hero_2"
                                            class="w-full h-[100px] sm:h-[140px] object-cover group-hover:scale-105 transition-transform duration-300"
                                            loading="lazy" />
                                    </div>
                                    <h4
                                        class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                        İlham Əliyev Novruz bayramı münasibətilə Azərbaycan xalqını təbrik edib
                                    </h4>
                                    <span class="text-[10px] sm:text-xs text-news-time mt-1 block">18.03.2026</span>
                                </a>
                                <a href="" class="group block">
                                    <div class="rounded-lg overflow-hidden mb-2">
                                        <img src="assets/media/jpg/news_hero_4.jpg" alt="news_hero_4"
                                            class="w-full h-[100px] sm:h-[140px] object-cover group-hover:scale-105 transition-transform duration-300"
                                            loading="lazy" />
                                    </div>
                                    <h4
                                        class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                        Tərəflər arasında yazılı razılaşma qanuni sənəd sayıla bilərmi?
                                    </h4>
                                    <span class="text-[10px] sm:text-xs text-news-time mt-1 block">18.03.2026</span>
                                </a>
                                <!-- dynamic links end here -->
                            </div>
                        </div>
                        <div class="mt-6 sm:mt-10">
                            <!-- dynamic sections start here -->
                            <section class="mb-6 sm:mb-8">
                                <div class="flex items-center justify-between mb-3 sm:mb-4">
                                    <h2 class="text-base sm:text-lg font-bold text-foreground flex items-center gap-2">
                                        <span class="w-1 h-5 sm:h-6 bg-primary rounded-full">
                                        </span>
                                        Siyasət
                                    </h2>
                                    <a href="" class="text-xs sm:text-sm font-medium text-primary hover:underline">
                                        Hamısına bax →
                                    </a>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                                    <!-- Main news  -->
                                    <a href="" class="group block">
                                        <div class="rounded-xl overflow-hidden mb-2 sm:mb-3">
                                            <img src="assets/media/jpg/news_hero_2.jpg" alt="news_hero_2"
                                                class="w-full h-[180px] sm:h-[220px] object-cover group-hover:scale-105 transition-transform duration-300"
                                                loading="lazy" />
                                        </div>
                                        <h3
                                            class="text-sm sm:text-base font-bold text-foreground group-hover:text-primary transition-colors leading-snug">
                                            Paşinyanın namizədliyi Baş nazir postuna irəli sürülüb
                                        </h3>
                                        <span class="text-[10px] sm:text-xs text-news-time mt-1 block">
                                            30 Mart, 10:19
                                        </span>
                                    </a>
                                    <!-- Side news  -->
                                    <div class="space-y-0 divide-y divide-border">
                                        <!-- dynamic links start here -->
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_4.jpg" alt="news_hero_4"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    Prezident yeni fərman imzalayıb
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 07:10
                                                </span>
                                            </div>
                                        </a>
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_6.jpg" alt="news_hero_6"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    Seçki kampaniyası başlayıb
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 06:50
                                                </span>
                                            </div>
                                        </a>
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_1.jpg" alt="news_hero_1"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    Diplomatik danışıqlar davam edir
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 06:30
                                                </span>
                                            </div>
                                        </a>
                                        <!-- dynamic links end here -->
                                    </div>
                                </div>
                            </section>
                            <section class="mb-6 sm:mb-8">
                                <div class="flex items-center justify-between mb-3 sm:mb-4">
                                    <h2 class="text-base sm:text-lg font-bold text-foreground flex items-center gap-2">
                                        <span class="w-1 h-5 sm:h-6 bg-primary rounded-full">
                                        </span>
                                        İqtisadiyyat
                                    </h2>
                                    <a href="" class="text-xs sm:text-sm font-medium text-primary hover:underline">
                                        Hamısına bax →
                                    </a>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                                    <!-- Main news  -->
                                    <a href="" class="group block">
                                        <div class="rounded-xl overflow-hidden mb-2 sm:mb-3">
                                            <img src="assets/media/jpg/news_hero_4.jpg" alt="news_hero_4"
                                                class="w-full h-[180px] sm:h-[220px] object-cover group-hover:scale-105 transition-transform duration-300"
                                                loading="lazy" />
                                        </div>
                                        <h3
                                            class="text-sm sm:text-base font-bold text-foreground group-hover:text-primary transition-colors leading-snug">
                                            Dünya bazarlarında neftin qiyməti 115 dolları ötüb
                                        </h3>
                                        <span class="text-[10px] sm:text-xs text-news-time mt-1 block">
                                            30 Mart, 09:37
                                        </span>
                                    </a>
                                    <!-- Side news  -->
                                    <div class="space-y-0 divide-y divide-border">
                                        <!-- dynamic links start here -->
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_5.jpg" alt="news_hero_5"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    Manat-dollar məzənnəsi sabit qalıb
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 06:10
                                                </span>
                                            </div>
                                        </a>
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_2.jpg" alt="news_hero_2"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    Yeni investisiya layihəsi təsdiqlənib
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 05:50
                                                </span>
                                            </div>
                                        </a>
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_3.jpg" alt="news_hero_3"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    İxracat həcmi artıb
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 05:30
                                                </span>
                                            </div>
                                        </a>
                                        <!-- dynamic links end here -->
                                    </div>
                                </div>
                            </section>
                            <section class="mb-6 sm:mb-8">
                                <div class="flex items-center justify-between mb-3 sm:mb-4">
                                    <h2 class="text-base sm:text-lg font-bold text-foreground flex items-center gap-2">
                                        <span class="w-1 h-5 sm:h-6 bg-primary rounded-full">
                                        </span>
                                        Gündəm
                                    </h2>
                                    <a href="" class="text-xs sm:text-sm font-medium text-primary hover:underline">
                                        Hamısına bax →
                                    </a>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                                    <!-- Main news  -->
                                    <a href="" class="group block">
                                        <div class="rounded-xl overflow-hidden mb-2 sm:mb-3">
                                            <img src="assets/media/jpg/news_hero_1.jpg" alt="news_hero_1"
                                                class="w-full h-[180px] sm:h-[220px] object-cover group-hover:scale-105 transition-transform duration-300"
                                                loading="lazy" />
                                        </div>
                                        <h3
                                            class="text-sm sm:text-base font-bold text-foreground group-hover:text-primary transition-colors leading-snug">
                                            Dünya bazarlarında neftin qiyməti 115 dolları ötüb
                                        </h3>
                                        <span class="text-[10px] sm:text-xs text-news-time mt-1 block">
                                            30 Mart, 10:35
                                        </span>
                                    </a>
                                    <!-- Side news  -->
                                    <div class="space-y-0 divide-y divide-border">
                                        <!-- dynamic links start here -->
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_5.jpg" alt="news_hero_5"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    Leysanda yoxa çıxan maşın nömrələri — Niyə dublikat verilmir?
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 09:30
                                                </span>
                                            </div>
                                        </a>
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_6.jpg" alt="news_hero_6"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    Yol polisi sürücülərə xəbərdarlıq edib
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 05:10
                                                </span>
                                            </div>
                                        </a>
                                        <a href="" class="flex gap-3 py-2.5 sm:py-3 group">
                                            <img src="assets/media/jpg/news_hero_4.jpg" alt="news_hero_4"
                                                class="w-[80px] h-[56px] sm:w-[100px] sm:h-[68px] rounded-lg object-cover flex-shrink-0"
                                                loading="lazy" />
                                            <div class="flex flex-col justify-center">
                                                <h4
                                                    class="text-xs sm:text-sm font-semibold text-foreground group-hover:text-primary transition-colors leading-snug line-clamp-2">
                                                    Bakıda güclü külək gözlənilir
                                                </h4>
                                                <span class="text-[10px] sm:text-xs text-news-time mt-1">
                                                    30 Mart, 04:50
                                                </span>
                                            </div>
                                        </a>
                                        <!-- dynamic links end here -->
                                    </div>
                                </div>
                            </section>
                            <!-- dynamic sections end here -->
                        </div>
                    </section>
                    <!-- Right: News Feed sidebar — hidden on mobile -->
                    <aside class="hidden lg:block lg:col-span-3">
                        <h2 class="text-lg font-bold text-foreground mb-4 flex items-center gap-2">
                            <span class="w-1 h-6 bg-primary rounded-full"></span>
                            XƏBƏR LENTİ
                        </h2>
                        <div class="flex items-center gap-2 bg-secondary rounded-lg px-3 py-2 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar">
                                <path d="M8 2v4" />
                                <path d="M16 2v4" />
                                <rect width="18" height="18" x="3" y="4" rx="2" />
                                <path d="M3 10h18" />
                            </svg>
                            <span class="text-sm text-muted-foreground">30 mart 2026</span>
                        </div>
                        <div class="space-y-0 divide-y divide-border">
                            <!-- dynamic links start here -->
                            <a href="" class="block py-3 group">
                                <h3
                                    class="text-sm font-semibold leading-snug mb-1 transition-colors text-news-highlight">
                                    DYP sürücülərə müraciət edib
                                </h3>
                                <span class="text-xs text-news-time">
                                    30 mart, 10:35
                                </span>
                            </a>
                            <a href="" class="block py-3 group">
                                <h3
                                    class="text-sm font-semibold leading-snug mb-1 transition-colors text-news-highlight">
                                    Paşinyanın namizədliyi Baş nazir postuna irəli sürülüb
                                </h3>
                                <span class="text-xs text-news-time">
                                    30 mart, 10:19
                                </span>
                            </a>
                            <a href="" class="block py-3 group">
                                <h3
                                    class="text-sm font-semibold leading-snug mb-1 transition-colors text-news-highlight">
                                    Azərbaycan millisi Syero Leone ilə qarşılaşacaq
                                </h3>
                                <span class="text-xs text-news-time">
                                    30 mart, 09:46
                                </span>
                            </a>
                            <!-- dynamic links end here -->
                        </div>
                    </aside>
                </div>
            </main>
        </div>
        <!-- main end here -->

        <!-- footer start here -->
        <footer class="bg-card border-t border-border mt-12">
            <div class="container mx-auto py-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!--  Logo  -->
                    <div>
                        <a href="" class="flex items-center gap-2 mb-3">
                            <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center">
                                <span class="text-primary-foreground font-extrabold text-lg logo">B</span>
                            </div>
                            <div class="leading-tight">
                                <span class="font-extrabold text-foreground text-lg tracking-tight">BAKU</span>
                                <span
                                    class="block text-xs font-semibold text-primary tracking-widest logo-text">MEDİA</span>
                            </div>
                        </a>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            Azərbaycanın ən operativ xəbər portalı
                        </p>
                    </div>
                    <!-- Menu  -->
                    <div>
                        <h4 class="font-bold text-foreground mb-3 text-sm">Kateqoriyalar</h4>
                        <nav class="flex flex-col gap-1.5">
                            <!-- dynamic links start here -->
                            <a href="" class="text-sm text-muted-foreground hover:text-primary transition-colors">
                                Siyasət
                            </a>
                            <a href="" class="text-sm text-muted-foreground hover:text-primary transition-colors">
                                İqtisadiyyat
                            </a>
                            <a href="" class="text-sm text-muted-foreground hover:text-primary transition-colors">
                                Gündəm
                            </a>
                            <!-- dynamic links end here -->
                        </nav>
                    </div>
                    <!-- Contact -->
                    <div>
                        <h4 class="font-bold text-foreground mb-3 text-sm">Əlaqə</h4>
                        <p class="text-sm text-muted-foreground">info@bakumedia.az</p>
                    </div>
                </div>
            </div>
            <!-- Bottom bar -->
            <div class="border-t border-border">
                <div class="container mx-auto py-4 flex flex-col sm:flex-row items-center justify-between gap-2">
                    <span class="text-xs text-muted-foreground">
                        © 2026 BakuMedia.az — Bütün hüquqlar qorunur.
                    </span>
                    <span class="text-xs text-muted-foreground">
                        site by <a href="https://globalsoft.az" target="_blank" rel="noopener noreferrer"
                            class="text-primary hover:underline font-medium">GlobalSoft</a>
                    </span>
                </div>
            </div>
        </footer>
        <!-- footer end here -->

    </div>

    </div>

</body>

</html>