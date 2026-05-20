<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Laravel 13, Portofolio, Web Developer, Teknik Informatika, Indonesia">
    <meta name="author" content="<?php echo e($data['profile']['name']); ?>">
    
    <title><?php echo e($title ?? 'Beranda'); ?> | <?php echo e($data['profile']['name']); ?></title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="Portofolio <?php echo e($data['profile']['name']); ?> - Mahasiswa Teknik Informatika">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo e($title ?? 'Beranda'); ?> | <?php echo e($data['profile']['name']); ?>">
    <meta property="og:description" content="Portofolio <?php echo e($data['profile']['name']); ?> - Mahasiswa Teknik Informatika">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:image" content="<?php echo e(asset('logo.svg')); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($title ?? 'Beranda'); ?> | <?php echo e($data['profile']['name']); ?>">
    <meta name="twitter:description" content="Portofolio <?php echo e($data['profile']['name']); ?> - Mahasiswa Teknik Informatika">
    <meta name="twitter:image" content="<?php echo e(asset('logo.svg')); ?>">
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('logo.svg')); ?>">
    <link rel="alternate icon" href="<?php echo e(asset('logo.svg')); ?>">
    
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800;900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.js"></script>

    <style type="text/tailwindcss">
        @theme {
            --font-sans: 'Plus Jakarta Sans', sans-serif;
            --color-primary: #0f172a;
            --color-secondary: #0ea5e9;
        }

        body {
            font-family: var(--font-sans);
            @apply text-slate-800 bg-[#f8fafc] antialiased;
        }

        .gradient-text {
            @apply bg-clip-text text-transparent bg-gradient-to-r from-slate-900 to-slate-500;
        }

        .bento-card {
            @apply bg-white rounded-[2rem] border border-slate-200/50 shadow-sm transition-all duration-500 hover:shadow-xl hover:shadow-slate-200/40 hover:-translate-y-1;
        }

        .btn-primary {
            @apply px-6 py-3 bg-slate-950 text-white font-bold rounded-2xl transition-all duration-300 flex items-center gap-2 text-xs uppercase tracking-widest hover:bg-slate-800 hover:scale-[1.02];
        }

        .btn-outline {
            @apply px-6 py-3 bg-transparent text-slate-950 font-bold rounded-2xl border-2 border-slate-950 transition-all duration-300 flex items-center gap-2 text-xs uppercase tracking-widest hover:bg-slate-950 hover:text-white;
        }

        .smart-nav-item {
            @apply flex items-center rounded-full p-3.5 text-slate-400 transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)];
        }

        .smart-nav-item.active {
            @apply bg-slate-100 text-slate-950;
        }

        .smart-nav-item:hover, .smart-nav-item.expanded {
            @apply bg-slate-950 text-white shadow-lg shadow-slate-950/20;
        }

        .smart-nav-label {
            @apply overflow-hidden whitespace-nowrap transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] max-w-0 opacity-0 text-[10px] font-black uppercase tracking-widest;
        }

        .smart-nav-item:hover .smart-nav-label, .smart-nav-item.expanded .smart-nav-label {
            @apply max-w-[140px] opacity-100 ml-3 pr-2;
        }

        *:focus-visible {
            @apply outline-none ring-2 ring-slate-950 ring-offset-2;
        }
    </style>
</head>
<body class="selection:bg-slate-950/10 selection:text-slate-950">
    <?php
        $navigationItems = [
            ['label' => 'Beranda', 'route' => 'home', 'active' => 'home', 'icon' => 'house'],
            ['label' => 'Tentang', 'route' => 'about', 'active' => 'about', 'icon' => 'user'],
            ['label' => 'Karir', 'route' => 'experience', 'active' => 'experience', 'icon' => 'trending-up'],
            ['label' => 'Prestasi', 'route' => 'achievements', 'active' => 'achievements', 'icon' => 'award'],
        ];

        $contactItems = [
            ['label' => $data['profile']['email'], 'href' => 'mailto:' . $data['profile']['email'], 'icon' => 'mail', 'external' => false],
            ['label' => $data['profile']['location'], 'href' => 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($data['profile']['location']), 'icon' => 'map-pin', 'external' => true],
        ];

        $socialItems = [
            ['label' => 'GitHub', 'href' => $data['profile']['github'], 'icon' => 'git-branch', 'external' => true],
            ['label' => 'LinkedIn', 'href' => $data['profile']['linkedin'], 'icon' => 'chevron-last', 'external' => true],
        ];
    ?>

    <header class="fixed top-6 left-6 right-6 z-40 pointer-events-none">
        <div class="max-w-6xl mx-auto flex justify-between items-center w-full pointer-events-auto">
            <a href="<?php echo e(route('home')); ?>" class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-slate-950 shadow-lg shadow-slate-200/50 border border-slate-100 transition-transform duration-500 hover:scale-110 hover:rotate-3" aria-label="Beranda">
                <img src="<?php echo e(asset('logo.svg')); ?>" alt="Logo" class="w-5 h-5 object-contain">
            </a>

            <div class="flex items-center gap-2 bg-white/80 backdrop-blur-xl px-5 py-3 rounded-2xl border border-slate-200/50 shadow-lg shadow-slate-200/30">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-[9px] font-black uppercase tracking-widest text-slate-600">Available</span>
            </div>
        </div>
    </header>

    <div class="fixed bottom-6 lg:bottom-10 left-1/2 -translate-x-1/2 z-50 w-max pointer-events-auto">
        <nav class="flex items-center gap-1.5 p-2 rounded-full bg-white/80 backdrop-blur-2xl border border-slate-200/60 shadow-[0_20px_40px_-15px_rgba(0,0,0,0.15)]">
            <?php $__currentLoopData = $navigationItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route($item['route'])); ?>" class="smart-nav-item <?php echo e(request()->routeIs($item['active']) ? 'active' : ''); ?>" aria-label="<?php echo e($item['label']); ?>">
                    <i data-lucide="<?php echo e($item['icon']); ?>" class="w-5 h-5 shrink-0"></i>
                    <span class="smart-nav-label"><?php echo e($item['label']); ?></span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <div class="w-px h-8 bg-slate-200/80 mx-1.5"></div>
            
            <a href="mailto:<?php echo e($data['profile']['email']); ?>" class="smart-nav-item !bg-slate-950 !text-white hover:!bg-slate-800" aria-label="Hire Me">
                <i data-lucide="mail" class="w-5 h-5 shrink-0"></i>
                <span class="smart-nav-label !text-white">Let's Talk</span>
            </a>
        </nav>
    </div>

    <main class="pt-32 pb-32">
        <div class="max-w-6xl mx-auto px-6">
            <?php echo e($slot); ?>

        </div>
    </main>

    <footer class="bg-slate-950 text-white pt-24 pb-16 rounded-t-[3rem] mt-10" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-6xl mx-auto px-6 lg:px-10">
            
            <div class="mb-20">
                <h2 class="text-5xl md:text-8xl font-black tracking-tighter leading-[0.9]">
                    LET'S BUILD <br>
                    <span class="text-slate-600">TOGETHER.</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 border-t border-white/10 pt-16">
                <div class="md:col-span-5">
                    <span class="text-xs font-black tracking-[0.2em] text-white uppercase block mb-4"><?php echo e($data['profile']['name']); ?></span>
                    <p class="text-xs text-slate-400 leading-relaxed font-medium max-w-sm">
                        Menghadirkan arsitektur perangkat lunak yang tangguh, sistem basis data terekayasa dengan presisi, dan antarmuka inklusif.
                    </p>
                </div>

                <div class="md:col-span-3">
                    <h3 class="text-[9px] font-black text-slate-500 uppercase tracking-widest mb-6">Infrastruktur</h3>
                    <ul class="space-y-4">
                        <?php $__currentLoopData = $socialItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($item['href']); ?>" class="flex items-center gap-3 text-xs font-bold text-slate-300 hover:text-white transition-colors" <?php if($item['external']): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>>
                                    <i data-lucide="<?php echo e($item['icon']); ?>" class="w-4 h-4"></i>
                                    <?php echo e($item['label']); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="md:col-span-4">
                    <h3 class="text-[9px] font-black text-slate-500 uppercase tracking-widest mb-6">Konektivitas</h3>
                    <ul class="space-y-4">
                        <?php $__currentLoopData = $contactItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($item['href']); ?>" class="flex items-start gap-3 text-xs font-bold text-slate-300 hover:text-white transition-colors break-all" <?php if($item['external']): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>>
                                    <i data-lucide="<?php echo e($item['icon']); ?>" class="w-4 h-4 shrink-0 mt-0.5"></i>
                                    <?php echo e($item['label']); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

            <div class="pt-16 mt-16 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4 text-[9px] text-slate-500 font-black uppercase tracking-widest">
                <div>© <?php echo e(date('Y')); ?> ALL RIGHTS RESERVED.</div>
                <div class="flex gap-6">
                    <span>My User PHP</span>
                    <span>Laravel v13</span>
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

            const navItems = document.querySelectorAll('.smart-nav-item');
            
            navItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    const isTouchDevice = window.matchMedia("(hover: none)").matches || window.innerWidth < 1024;
                    
                    if (isTouchDevice) {
                        if (!item.classList.contains('expanded')) {
                            e.preventDefault(); 
                            navItems.forEach(i => i.classList.remove('expanded'));
                            item.classList.add('expanded');
                        }
                    }
                });
            });

            document.addEventListener('click', (e) => {
                if (!e.target.closest('.smart-nav-item')) {
                    navItems.forEach(i => i.classList.remove('expanded'));
                }
            });

            const observerOptions = { threshold: 0.1 };
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
</html><?php /**PATH C:\laragon\www\webporto2\resources\views/components/layout.blade.php ENDPATH**/ ?>