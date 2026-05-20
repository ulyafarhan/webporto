<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['data' => $data]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data)]); ?>
     <?php $__env->slot('title', null, []); ?> Home <?php $__env->endSlot(); ?>

    <!-- 1. Hero Section -->
    <section class="py-10 md:py-16" aria-labelledby="hero-title">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-center">
            <!-- Text Content -->
            <div class="lg:col-span-3 space-y-5">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-primary/5 border border-primary/10 text-primary font-bold text-[10px] uppercase tracking-widest">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    Available for Work
                </div>
                <h1 id="hero-title" class="text-3xl md:text-4xl font-black text-dark leading-tight tracking-tight">
                    Fullstack <span class="gradient-text">Laravel</span> Engineer.
                </h1>
                <p class="text-sm text-slate-500 leading-relaxed max-w-lg">
                    <?php echo e($data['profile']['tagline']); ?> Berfokus pada arsitektur backend yang solid dan antarmuka pengguna yang inklusif.
                </p>
                <div class="flex flex-wrap gap-3 pt-1">
                    <a href="<?php echo e(route('course')); ?>" class="btn-primary text-xs px-5 py-2.5">
                        Lihat Kurikulum
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                    <a href="<?php echo e(route('about')); ?>" class="btn-outline text-xs px-5 py-2.5">Tentang Saya</a>
                </div>
                <!-- Social Links -->
                <div class="flex items-center gap-4 pt-2">
                    <a href="<?php echo e($data['profile']['github']); ?>" class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white transition-all" aria-label="GitHub">
                        <i data-lucide="git-branch" class="w-4 h-4"></i>
                    </a>
                    <a href="<?php echo e($data['profile']['linkedin']); ?>" class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white transition-all" aria-label="LinkedIn">
                        <i data-lucide="chevron-last" class="w-4 h-4"></i>
                    </a>
                    <a href="mailto:<?php echo e($data['profile']['email']); ?>" class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white transition-all" aria-label="Email">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                    </a>
                    <span class="text-[10px] text-slate-400 font-bold ml-1"><?php echo e($data['profile']['location']); ?></span>
                </div>
            </div>

            <!-- Profile Photo -->
            <div class="lg:col-span-2 flex justify-center lg:justify-end">
                <div class="relative group">
                    <div class="w-48 h-48 md:w-56 md:h-56 rounded-xl overflow-hidden shadow-lg border-2 border-white">
                        <img src="<?php echo e($data['profile']['avatar']); ?>" alt="<?php echo e($data['profile']['name']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <!-- Info Card Overlay -->
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-xl shadow-md border border-slate-100 px-4 py-2.5">
                        <div class="text-xs font-black text-dark"><?php echo e($data['profile']['name']); ?></div>
                        <div class="text-[10px] text-slate-400 font-bold"><?php echo e($data['profile']['role']); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Tech Cloud -->
    <section class="py-12 border-y border-slate-100 mb-16" aria-label="Teknologi">
        <div class="flex flex-wrap justify-center md:justify-between items-center gap-10 md:gap-16 opacity-30 grayscale hover:grayscale-0 transition-all duration-1000">
            <?php $techs = ['Laravel', 'Tailwind', 'MySQL', 'JavaScript', 'Git', 'PHP 8.3']; ?>
            <?php $__currentLoopData = $techs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="text-xl font-black text-slate-900 tracking-tighter"><?php echo e($tech); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- 3. Stats Bar -->
    <section class="mb-12" aria-label="Statistik">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
            <?php $__currentLoopData = $data['stats']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bento-card p-4 flex flex-col items-center justify-center text-center group">
                <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500 group-hover:bg-primary group-hover:text-white transition-all mb-3">
                    <i data-lucide="<?php echo e($stat['icon']); ?>" class="!w-4 !h-4"></i>
                </div>
                <div class="text-xl font-black text-dark mb-0.5"><?php echo e($stat['value']); ?></div>
                <div class="text-[7px] font-black text-slate-400 uppercase tracking-widest"><?php echo e($stat['label']); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- 4. Brief About -->
    <section class="mb-12">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
            <div class="md:col-span-9 bento-card p-8 !bg-[#0f172a] text-white relative overflow-hidden">
                <h3 class="text-xl font-black mb-4 text-white">Logic & Estetika.</h3>
                <p class="text-slate-400 text-xs leading-relaxed mb-8 max-w-xl">
                    <?php echo e($data['profile']['bio']); ?> Saya percaya teknologi terbaik adalah yang mempermudah tanpa terlihat rumit.
                </p>
                <div class="flex gap-6">
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-lg bg-primary/20 flex items-center justify-center">
                            <i data-lucide="check" class="!w-3 !h-3 text-primary"></i>
                        </div>
                        <span class="text-[10px] font-bold text-slate-300">Fast Learner</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-lg bg-primary/20 flex items-center justify-center">
                            <i data-lucide="check" class="!w-3 !h-3 text-primary"></i>
                        </div>
                        <span class="text-[10px] font-bold text-slate-300">Clean Architecture</span>
                    </div>
                </div>
            </div>
            <div class="md:col-span-3 bento-card p-8 !bg-[#0d9488] flex flex-col justify-between text-white">
                <i data-lucide="award" class="!w-8 !h-8 mb-4 text-white opacity-40"></i>
                <div>
                    <div class="text-4xl font-black mb-1 leading-none text-white">3.73</div>
                    <div class="text-[8px] font-bold text-white/60 uppercase tracking-widest">Cumulative GPA</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Services -->
    <section class="mb-12">
        <div class="text-center mb-10">
            <h2 class="text-xl font-black text-dark mb-2">Layanan</h2>
            <p class="text-slate-500 text-[10px] uppercase tracking-widest font-bold">Professional Solutions</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
            <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bento-card p-6 group">
                <div class="w-10 h-10 bg-slate-50 text-slate-400 group-hover:bg-primary group-hover:text-white rounded-lg flex items-center justify-center mb-5 transition-all">
                    <i data-lucide="<?php echo e($service['icon']); ?>" class="w-4 h-4"></i>
                </div>
                <h3 class="text-[11px] font-black text-dark mb-2 uppercase tracking-wider"><?php echo e($service['title']); ?></h3>
                <p class="text-[10px] text-slate-500 leading-relaxed"><?php echo e($service['description']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- 6. Skills & Expertise -->
    <section class="mb-24" aria-labelledby="skills-title">
        <div class="text-center mb-16">
            <h2 id="skills-title" class="text-3xl font-black text-dark mb-4">Tech Stack & Expertise</h2>
            <p class="text-slate-500 text-sm max-w-xl mx-auto">Menguasai ekosistem modern untuk menghadirkan solusi yang efisien, skalabel, dan mudah dipelihara.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php $__currentLoopData = $data['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bento-card p-8 flex flex-col group min-h-[380px]">
                <div class="flex items-center gap-4 mb-10">
                    <div class="w-10 h-10 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
                        <i data-lucide="<?php echo e($cat['category'] == 'Frontend' ? 'layout' : 'database'); ?>" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-sm font-black text-dark uppercase tracking-widest"><?php echo e($cat['category']); ?></h3>
                </div>
                
                <div class="space-y-8 flex-grow">
                    <?php $__currentLoopData = $cat['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group/item">
                        <div class="flex justify-between items-end mb-3">
                            <span class="text-xs font-bold text-slate-600 group-hover/item:text-primary transition-colors"><?php echo e($skill['name']); ?></span>
                            <span class="text-[9px] font-black text-slate-300 uppercase tracking-tighter"><?php echo e($skill['level']); ?></span>
                        </div>
                        <div class="h-1.5 bg-slate-100 rounded-full overflow-hidden">
                            <div class="h-full bg-primary/20 group-hover/item:bg-primary transition-all duration-1000 w-0" data-width="<?php echo e($skill['level'] == 'Advanced' ? '90%' : ($skill['level'] == 'Intermediate' ? '70%' : '50%')); ?>"></div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- 3rd Card: Best Practices -->
            <div class="bento-card p-8 !bg-[#0f172a] text-white relative overflow-hidden group min-h-[380px]">
                <div class="relative z-10 h-full flex flex-col">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="w-10 h-10 bg-white/10 text-white rounded-xl flex items-center justify-center">
                            <i data-lucide="shield-check" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-sm font-black uppercase tracking-widest text-white">Engineering</h3>
                    </div>
                    
                    <div class="space-y-6 flex-grow">
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10 group-hover:bg-white/10 transition-all">
                            <div class="w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center text-primary">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-200">Clean Architecture</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10 group-hover:bg-white/10 transition-all">
                            <div class="w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center text-primary">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-200">Test Driven Dev</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10 group-hover:bg-white/10 transition-all">
                            <div class="w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center text-primary">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-200">Scalable Systems</span>
                        </div>
                    </div>
                </div>
                <!-- Subtle Decoration -->
                <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-primary/10 rounded-full blur-[80px] group-hover:scale-110 transition-transform duration-1000"></div>
            </div>
        </div>
    </section>

    <!-- 7. Projects -->
    <section class="mb-16">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-8 gap-4">
            <div>
                <h2 class="text-xl font-black text-dark mb-1">Proyek Unggulan</h2>
                <p class="text-slate-500 text-sm">Implementasi nyata dari teori yang dipelajari.</p>
            </div>
            <a href="<?php echo e(route('course')); ?>" class="btn-outline text-xs px-4 py-2">Semua Proyek</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php $__currentLoopData = $data['projects']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white border border-slate-200/60 rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
                <a href="<?php echo e($project['github'] ?? '#'); ?>" class="block">
                    <div class="aspect-video overflow-hidden bg-slate-100">
                        <img src="<?php echo e($project['image']); ?>" alt="<?php echo e($project['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </a>
                <div class="p-5">
                    <span class="inline-flex items-center gap-1 bg-primary/10 border border-primary/20 text-primary text-[10px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wider mb-3">
                        <i data-lucide="folder" class="w-3 h-3"></i>
                        <?php echo e($project['category']); ?>

                    </span>
                    <h3 class="text-base font-black text-dark mb-2 group-hover:text-primary transition-colors"><?php echo e($project['title']); ?></h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4 line-clamp-2"><?php echo e($project['description']); ?></p>
                    <div class="flex gap-1.5 flex-wrap mb-4">
                        <?php $__currentLoopData = array_slice($project['tags'], 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="text-[9px] font-bold px-2 py-0.5 bg-slate-50 border border-slate-100 text-slate-400 rounded-md">#<?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a href="<?php echo e($project['github'] ?? '#'); ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-white bg-primary hover:bg-primary-dark px-4 py-2 rounded-lg transition-colors shadow-sm">
                        Lihat Detail
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- 8. Curriculum Overview -->
    <section class="mb-16">
        <div class="bento-card overflow-hidden !bg-[#0f172a] text-white border-none shadow-md">
            <div class="grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-7 p-6 md:p-8">
                    <div class="inline-flex items-center gap-2 text-primary font-bold text-[10px] uppercase tracking-widest mb-4">
                        <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                        Learning Roadmap
                    </div>
                    <h2 class="text-xl font-black mb-2 text-white">Materi Laravel 13</h2>
                    <p class="text-xs text-slate-400 mb-6 max-w-md leading-relaxed">Kurikulum terstruktur dari dasar hingga menengah untuk membangun fondasi backend yang kuat.</p>
                    
                    <div class="grid grid-cols-2 gap-3 mb-6">
                        <?php $__currentLoopData = array_slice($data['curriculum'], 0, 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-2">
                            <i data-lucide="check" class="w-3.5 h-3.5 text-primary shrink-0"></i>
                            <span class="text-xs font-bold text-slate-300"><?php echo e($curr['topic']); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <a href="<?php echo e(route('course')); ?>" class="btn-primary inline-flex !bg-primary !text-white px-5 py-2.5 text-xs">
                        Lihat Roadmap
                    </a>
                </div>

                <div class="lg:col-span-5 bg-white/5 p-6 md:p-8 flex flex-col justify-center border-t lg:border-t-0 lg:border-l border-white/10">
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="text-center">
                            <div class="text-2xl font-black text-white">12+</div>
                            <div class="text-[9px] font-bold text-slate-500 uppercase tracking-wider mt-1">Modul</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-primary">100%</div>
                            <div class="text-[9px] font-bold text-slate-500 uppercase tracking-wider mt-1">Praktikum</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-white">V13</div>
                            <div class="text-[9px] font-bold text-slate-500 uppercase tracking-wider mt-1">Laravel</div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-[10px] font-bold text-slate-400 mb-2">
                            <span>Progress Kurikulum</span>
                            <span class="text-primary">85%</span>
                        </div>
                        <div class="w-full h-1.5 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full w-[85%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Testimonials -->
    <section class="mb-32">
        <div class="text-center mb-20">
            <h2 class="text-4xl font-black text-dark mb-6">Wall of Love</h2>
            <p class="text-slate-500 text-lg">Apa yang dikatakan rekan dan mentor saya.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php for($i=1; $i<=3; $i++): ?>
            <div class="bento-card p-10 bg-white border-slate-100/50">
                <div class="flex gap-1 mb-8 text-amber-400">
                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                </div>
                <p class="text-sm text-slate-500 italic leading-relaxed mb-10">
                    "Kemampuan analisis dan implementasi teknisnya sangat menonjol di angkatan kami. Selalu memberikan hasil yang melebihi ekspektasi."
                </p>
                <div class="flex items-center gap-6">
                    <div class="w-12 h-12 rounded-full bg-slate-100 overflow-hidden">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=<?php echo e($i); ?>test" alt="Reviewer <?php echo e($i); ?>">
                    </div>
                    <div>
                        <div class="text-sm font-black text-dark">Rekan Mahasiswa <?php echo e($i); ?></div>
                        <div class="text-xs text-slate-400 font-bold uppercase tracking-wider">Teknik Informatika</div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- 10. Final CTA -->
    <section class="py-32 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-5xl md:text-7xl font-black text-dark mb-10 tracking-tighter leading-tight">Siap Memulai Proyek <br> <span class="gradient-text">Luar Biasa?</span></h2>
            <p class="text-lg text-slate-500 mb-16 leading-relaxed">
                Saya selalu mencari tantangan baru dalam pengembangan web. Jika Anda memiliki ide proyek atau ingin sekadar berdiskusi, pintu saya selalu terbuka.
            </p>
            <div class="flex justify-center gap-6">
                <a href="mailto:<?php echo e($data['profile']['email']); ?>" class="btn-primary px-12 py-5 text-lg">Hubungi Sekarang</a>
                <a href="<?php echo e($data['profile']['linkedin']); ?>" class="btn-outline px-12 py-5 text-lg">LinkedIn Profile</a>
            </div>
        </div>
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\webporto\resources\views/home.blade.php ENDPATH**/ ?>