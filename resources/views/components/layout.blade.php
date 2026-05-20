<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Laravel 13, Portofolio, Web Developer, Teknik Informatika, Indonesia">
    <meta name="author" content="{{ $data['profile']['name'] }}">
    
    <title>{{ $title ?? 'Beranda' }} | {{ $data['profile']['name'] }}</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="Portofolio Ulya Farhan - Mahasiswa Teknik Informatika & Laravel Developer. Logbook pembelajaran Laravel 13.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Beranda' }} | {{ $data['profile']['name'] }}">
    <meta property="og:description" content="Portofolio Ulya Farhan - Mahasiswa Teknik Informatika & Laravel Developer. Logbook pembelajaran Laravel 13.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('logo.svg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Beranda' }} | {{ $data['profile']['name'] }}">
    <meta name="twitter:description" content="Portofolio Ulya Farhan - Mahasiswa Teknik Informatika & Laravel Developer. Logbook pembelajaran Laravel 13.">
    <meta name="twitter:image" content="{{ asset('logo.svg') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo.svg') }}">
    <link rel="alternate icon" href="{{ asset('logo.svg') }}">
    
    <!-- Tailwind CSS 4 -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.js"></script>

    <style type="text/tailwindcss">
        @theme {
            --font-sans: 'Plus Jakarta Sans', sans-serif;
            --color-primary: #0d9488;
            --color-primary-dark: #0f766e;
            --color-secondary: #0ea5e9;
            --color-dark: #0f172a;
        }

        body {
            font-family: var(--font-sans);
            @apply text-slate-700 bg-[#f8fafc] antialiased;
        }

        .gradient-text {
            @apply bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary;
        }

        .glass {
            backdrop-filter: blur(16px);
            background-color: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(226, 232, 240, 0.6);
        }

        .bento-card {
            @apply bg-white rounded-xl border border-slate-200/60 shadow-sm transition-all duration-500 hover:shadow-xl hover:shadow-slate-200/50 hover:-translate-y-1;
        }

        .btn-primary {
            @apply px-6 py-3 bg-primary text-white font-bold rounded-xl shadow-lg shadow-primary/20 hover:bg-primary-dark transition-all duration-300 flex items-center gap-2 text-sm;
        }

        /* Smaller, slimmer variant for compact buttons */
        .btn-primary-sm {
            @apply px-3 py-1.5 rounded-full text-xs font-bold shadow-sm shadow-primary/10;
        }

        .btn-outline {
            @apply px-6 py-3 bg-white text-slate-600 font-bold rounded-xl border border-slate-200 hover:border-primary hover:text-primary transition-all duration-300 flex items-center gap-2 text-sm;
        }

        .nav-link {
            @apply inline-flex items-center gap-1.5 rounded-full px-3.5 py-1.5 text-[10px] font-black uppercase tracking-wide text-slate-500 transition-all duration-300;
        }

        .nav-link:hover,
        .nav-link.active {
            @apply bg-white text-primary shadow-sm shadow-slate-200/70;
        }

        .mobile-nav-link {
            @apply flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-bold text-slate-600 transition-all duration-300;
        }

        .mobile-nav-link:hover,
        .mobile-nav-link.active {
            @apply bg-primary/10 text-primary;
        }

        .footer-link {
            @apply flex items-center gap-3 rounded-xl text-sm font-bold text-slate-500 transition-all duration-300 hover:text-primary;
        }

        .footer-icon {
            @apply flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary transition-all duration-300;
        }

        .footer-link:hover .footer-icon {
            @apply bg-primary text-white;
        }

        .footer-social-link {
            @apply flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 px-3 py-3 text-sm font-bold text-slate-500 transition-all duration-300 hover:border-primary/20 hover:bg-white hover:text-primary hover:shadow-sm;
        }

        *:focus-visible {
            @apply outline-none ring-2 ring-primary ring-offset-2;
        }
    </style>
</head>
<body class="selection:bg-primary/20 selection:text-primary">
    @php
        $navigationItems = [
            ['label' => 'Home', 'route' => 'home', 'active' => 'home', 'icon' => 'house'],
            ['label' => 'About', 'route' => 'about', 'active' => 'about', 'icon' => 'user'],
            ['label' => 'Progres', 'route' => 'experience', 'active' => 'experience', 'icon' => 'trending-up'],
            ['label' => 'Course', 'route' => 'course', 'active' => 'course*', 'icon' => 'book-open'],
        ];

        $footerNavigationItems = [
            ['label' => 'Beranda', 'route' => 'home', 'icon' => 'house'],
            ['label' => 'Profil Saya', 'route' => 'about', 'icon' => 'user'],
            ['label' => 'Pengalaman', 'route' => 'experience', 'icon' => 'trending-up'],
            ['label' => 'Materi Laravel', 'route' => 'course', 'icon' => 'book-open'],
        ];

        $contactItems = [
            ['label' => $data['profile']['email'], 'href' => 'mailto:' . $data['profile']['email'], 'icon' => 'mail', 'external' => false],
            ['label' => $data['profile']['location'], 'href' => 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($data['profile']['location']), 'icon' => 'map-pin', 'external' => true],
        ];

        $socialItems = [
            ['label' => 'GitHub', 'href' => $data['profile']['github'], 'icon' => 'git-branch', 'external' => true],
            ['label' => 'LinkedIn', 'href' => $data['profile']['linkedin'], 'icon' => 'chevron-last', 'external' => true],
        ];
    @endphp

    <!-- Navbar -->
    <header class="fixed top-0 left-0 w-full z-50 transition-all duration-500" id="main-header">
        <div class="max-w-6xl mx-auto px-4 py-3 md:py-4">
            <nav class="glass rounded-full px-3 py-2 md:px-4 flex justify-between items-center shadow-lg shadow-slate-200/30" aria-label="Navigasi Utama">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 group" aria-label="Beranda">
                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white shadow-md shadow-primary/20 group-hover:rotate-6 transition-transform">
                        <img src="{{ asset('logo.svg') }}" alt="Logo" class="w-4 h-4 object-contain">
                    </div>
                    <span class="text-sm font-black tracking-tighter text-dark uppercase">Ulya<span class="text-primary">Farhan.</span></span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-0.5 rounded-full border border-slate-200/70 bg-slate-100/80 p-0.5">
                    @foreach($navigationItems as $item)
                        <a href="{{ route($item['route']) }}" class="nav-link {{ request()->routeIs($item['active']) ? 'active' : '' }}">
                            <i data-lucide="{{ $item['icon'] }}" class="w-3 h-3"></i>
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>

                <div class="hidden md:block">
                    <a href="mailto:{{ $data['profile']['email'] }}" class="btn-primary btn-primary-sm" aria-label="Hubungi Saya">
                        <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                        Let's Talk
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button class="md:hidden w-8 h-8 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center transition-all hover:bg-primary hover:text-white" id="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="Buka Menu">
                    <i data-lucide="menu" class="w-4 h-4"></i>
                </button>
            </nav>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-3 rounded-2xl border border-slate-200/70 bg-white/95 p-2 shadow-xl shadow-slate-200/60 backdrop-blur-xl" aria-label="Menu Navigasi Mobile">
                <div class="grid gap-1">
                    @foreach($navigationItems as $item)
                        <a href="{{ route($item['route']) }}" class="mobile-nav-link {{ request()->routeIs($item['active']) ? 'active' : '' }}">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white text-primary shadow-sm">
                                <i data-lucide="{{ $item['icon'] }}" class="w-4 h-4"></i>
                            </span>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </div>
                <a href="mailto:{{ $data['profile']['email'] }}" class="mt-2 flex items-center justify-center gap-2 rounded-xl bg-primary px-4 py-3 text-sm font-black text-white shadow-lg shadow-primary/20 transition-all hover:bg-primary-dark">
                    <i data-lucide="mail" class="w-4 h-4"></i>
                    Let's Talk
                </a>
            </div>
        </div>
    </header>

    <main class="pt-28 md:pt-32 pb-20">
        <div class="max-w-6xl mx-auto px-4">
            {{ $slot }}
        </div>
    </main>

    <!-- Modern Footer -->
    <footer class="bg-white border-t border-slate-100 pt-16 md:pt-24 pb-10 md:pb-12" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-14 mb-14 md:mb-20">
                <div class="md:col-span-1">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 bg-primary rounded-2xl flex items-center justify-center text-white shadow-lg shadow-primary/20">
                            <img src="{{ asset('logo.svg') }}" alt="Logo" class="w-6 h-6 object-contain">
                        </div>
                        <span class="text-xl font-black tracking-tighter text-dark uppercase">AHMAD<span class="text-primary">.</span></span>
                    </a>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Membangun masa depan digital dengan kode yang bersih, performa tinggi, dan aksesibilitas untuk semua.
                    </p>
                </div>

                <div>
                    <h3 class="text-xs font-black text-dark uppercase tracking-widest mb-8">Navigasi</h3>
                    <ul class="space-y-3">
                        @foreach($footerNavigationItems as $item)
                            <li>
                                <a href="{{ route($item['route']) }}" class="footer-link">
                                    <span class="footer-icon">
                                        <i data-lucide="{{ $item['icon'] }}" class="w-4 h-4"></i>
                                    </span>
                                    <span>{{ $item['label'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-black text-dark uppercase tracking-widest mb-8">Kontak</h3>
                    <ul class="space-y-3">
                        @foreach($contactItems as $item)
                            <li>
                                <a href="{{ $item['href'] }}" class="footer-link break-all" @if($item['external']) target="_blank" rel="noopener noreferrer" @endif>
                                    <span class="footer-icon">
                                        <i data-lucide="{{ $item['icon'] }}" class="w-4 h-4"></i>
                                    </span>
                                    <span>{{ $item['label'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-black text-dark uppercase tracking-widest mb-8">Sosial Media</h3>
                    <div class="space-y-3">
                        @foreach($socialItems as $item)
                            <a href="{{ $item['href'] }}" class="footer-social-link" aria-label="{{ $item['label'] }}" target="_blank" rel="noopener noreferrer">
                                <span class="flex items-center gap-3">
                                    <span class="footer-icon">
                                        <i data-lucide="{{ $item['icon'] }}" class="w-4 h-4"></i>
                                    </span>
                                    <span>{{ $item['label'] }}</span>
                                </span>
                                <i data-lucide="arrow-up-right" class="w-4 h-4 text-primary"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="pt-8 md:pt-10 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left text-[11px] text-slate-400 font-bold uppercase tracking-widest">
                <div>&copy; {{ date('Y') }} {{ $data['profile']['name'] }}. All Rights Reserved.</div>
                <div class="flex flex-col sm:flex-row gap-2 sm:gap-8">
                    <span>Lighthouse Score: 100/100</span>
                    <span>Built with Laravel 13</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function refreshIcons() {
            if (window.lucide) {
                lucide.createIcons();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            refreshIcons();

            const header = document.getElementById('main-header');
            if (header) {
                window.addEventListener('scroll', () => {
                    header.classList.toggle('translate-y-[-10px]', window.scrollY > 20);
                });
            }

            const toggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('mobile-menu');

            const setMenuState = (isOpen) => {
                if (!toggle || !menu) return;

                toggle.setAttribute('aria-expanded', String(isOpen));
                toggle.setAttribute('aria-label', isOpen ? 'Tutup Menu' : 'Buka Menu');
                toggle.innerHTML = `<i data-lucide="${isOpen ? 'x' : 'menu'}" class="w-4 h-4"></i>`;
                menu.classList.toggle('hidden', !isOpen);
                refreshIcons();
            };

            if (toggle && menu) {
                toggle.addEventListener('click', () => {
                    const isOpen = toggle.getAttribute('aria-expanded') === 'true';
                    setMenuState(!isOpen);
                });

                menu.querySelectorAll('a').forEach((link) => {
                    link.addEventListener('click', () => setMenuState(false));
                });

                document.addEventListener('keydown', (event) => {
                    if (event.key === 'Escape') {
                        setMenuState(false);
                    }
                });

                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 768) {
                        setMenuState(false);
                    }
                });
            }

            // Skills Animation
            const observerOptions = { threshold: 0.2 };
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.width = entry.target.dataset.width;
                    }
                });
            }, observerOptions);

            document.querySelectorAll('[data-width]').forEach(el => observer.observe(el));
        });

        window.addEventListener('load', refreshIcons);
    </script>
</body>
</html>
