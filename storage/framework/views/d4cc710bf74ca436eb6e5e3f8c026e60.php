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

    <section class="py-16 md:py-24 animate-fade-in" aria-labelledby="hero-title">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6 order-2 lg:order-1">
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-teal-500/5 border border-teal-500/10 text-primary font-bold text-[10px] uppercase tracking-widest">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    Available for Outstanding Projects
                </div>
                
                <h1 id="hero-title" class="text-4xl md:text-5xl font-extrabold text-dark leading-[1.12] tracking-tight">
                    Crafting Scalable <br>
                    <span class="gradient-text">Fullstack Architecture</span>
                </h1>
                
                <p class="text-sm text-slate-500 leading-relaxed max-w-xl font-medium">
                    <?php echo e($data['profile']['tagline']); ?> Fokus pada penulisan kode yang bersih, performa tinggi, dan rekayasa perangkat lunak inklusif berbasis Laravel.
                </p>
                
                <div class="flex flex-wrap gap-3.5 pt-2">
                    <a href="<?php echo e(route('achievements')); ?>" class="btn-primary text-xs px-6 py-3 rounded-xl shadow-lg shadow-primary/10 hover:shadow-primary/20 transition-all">
                        Lihat Prestasi & Sertifikasi
                        <i data-lucide="award" class="w-4 h-4"></i>
                    </a>
                    <a href="<?php echo e(route('about')); ?>" class="btn-outline text-xs px-6 py-3 rounded-xl hover:bg-slate-50 transition-all">Eksplorasi Profil</a>
                </div>
                
                <div class="flex items-center gap-3 pt-6 border-t border-slate-200/60 max-w-lg">
                    <a href="<?php echo e($data['profile']['github']); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:border-primary hover:text-primary transition-all shadow-sm flex items-center justify-center text-slate-400" aria-label="GitHub">
                        <i data-lucide="git-branch" class="w-4 h-4"></i>
                    </a>
                    <a href="<?php echo e($data['profile']['linkedin']); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:border-primary hover:text-primary transition-all shadow-sm flex items-center justify-center text-slate-400" aria-label="LinkedIn">
                        <i data-lucide="chevron-last" class="w-4 h-4"></i>
                    </a>
                    <a href="mailto:<?php echo e($data['profile']['email']); ?>" class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:border-primary hover:text-primary transition-all shadow-sm flex items-center justify-center text-slate-400" aria-label="Email">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                    </a>
                    <div class="h-4 w-px bg-slate-300 mx-2"></div>
                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-widest flex items-center gap-1.5">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-slate-400"></i>
                        <?php echo e($data['profile']['location']); ?>

                    </span>
                </div>
            </div>

            <div class="lg:col-span-5 flex justify-center lg:justify-end order-1 lg:order-2">
                <div class="relative w-full max-w-[310px] aspect-square rounded-[2rem] bg-white border border-slate-200/80 p-4 shadow-xl shadow-slate-200/40 group">
                    <div class="w-full h-full rounded-2xl overflow-hidden bg-slate-100 relative">
                        <img src="<?php echo e($data['profile']['avatar']); ?>" alt="<?php echo e($data['profile']['name']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute -bottom-4 left-6 right-6 glass rounded-2xl shadow-xl shadow-slate-300/40 border border-white p-4 transition-all duration-500 group-hover:-translate-y-1">
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-xs font-black text-dark tracking-tight"><?php echo e($data['profile']['name']); ?></span>
                            <span class="text-[8px] font-black px-2 py-0.5 bg-slate-900 text-white rounded-md tracking-wider">NIM. 2201101</span>
                        </div>
                        <div class="text-[9px] text-slate-400 font-bold uppercase tracking-widest"><?php echo e($data['profile']['role']); ?></div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="py-8 border-y border-slate-200/60 mb-16" aria-label="Teknologi">
        <div class="grid grid-cols-3 md:grid-cols-6 gap-6 items-center justify-items-center opacity-30 grayscale hover:grayscale-0 hover:opacity-70 transition-all duration-500">
            <?php $techs = ['Laravel', 'Tailwind CSS', 'MySQL', 'JavaScript', 'Git Architecture', 'PHP 8.4']; ?>
            <?php $__currentLoopData = $techs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="text-[10px] font-black text-slate-900 tracking-widest uppercase"><?php echo e($tech); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="mb-16" aria-label="Statistik">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <?php $__currentLoopData = $data['stats']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bento-card p-6 flex flex-col justify-between min-h-[140px] group relative overflow-hidden">
                <div class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-200/60 flex items-center justify-center text-slate-400 group-hover:bg-primary group-hover:border-primary/20 group-hover:text-white transition-all duration-500">
                    <i data-lucide="<?php echo e($stat['icon']); ?>" class="w-4 h-4"></i>
                </div>
                <div class="space-y-0.5">
                    <div class="text-2xl font-black text-dark tracking-tight"><?php echo e($stat['value']); ?></div>
                    <div class="text-[8px] font-black text-slate-400 uppercase tracking-widest"><?php echo e($stat['label']); ?></div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="mb-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
            <div class="md:col-span-8 bento-card p-8 !bg-slate-900 text-white relative overflow-hidden flex flex-col justify-between min-h-[220px]">
                <div class="space-y-3 relative z-10 max-w-xl">
                    <h3 class="text-base font-black tracking-wider uppercase text-primary text-[10px]">Core Philosophy</h3>
                    <h4 class="text-xl font-extrabold tracking-tight text-white">Logic meets Aesthetics.</h4>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">
                        <?php echo e($data['profile']['bio']); ?> Saya percaya arsitektur sistem terbaik adalah yang mampu menyederhanakan kompleksitas komputasi tanpa mengorbankan keamanan.
                    </p>
                </div>
                <div class="flex gap-5 mt-6 relative z-10 border-t border-white/10 pt-4 text-slate-300">
                    <div class="flex items-center gap-2">
                        <i data-lucide="shield-check" class="w-4 h-4 text-primary"></i>
                        <span class="text-[9px] font-bold uppercase tracking-wider">Clean Architecture</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="zap" class="w-4 h-4 text-primary"></i>
                        <span class="text-[9px] font-bold uppercase tracking-wider">Fast Execution</span>
                    </div>
                </div>
                <div class="absolute -bottom-24 -right-24 w-52 h-52 bg-primary/10 rounded-full blur-3xl"></div>
            </div>
            
            <div class="md:col-span-4 bento-card p-8 !bg-primary flex flex-col justify-between text-white min-h-[220px] relative overflow-hidden group">
                <div class="w-9 h-9 rounded-xl bg-white/10 border border-white/10 flex items-center justify-center text-white backdrop-blur-sm shadow-inner">
                    <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                </div>
                <div>
                    <div class="text-4xl font-black tracking-tighter mb-0.5">3.73</div>
                    <div class="text-[9px] font-black text-white/70 uppercase tracking-widest">Cumulative GPA Status</div>
                </div>
                <div class="absolute -bottom-12 -right-12 w-32 h-32 bg-white/5 rounded-full blur-2xl group-hover:scale-110 transition-transform duration-700"></div>
            </div>
        </div>
    </section>

    <section class="mb-16">
        <div class="flex flex-col items-center text-center mb-10">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black mb-1">Professional Competency</p>
            <h2 class="text-2xl font-black text-dark tracking-tight">Layanan Solusi Digital</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bento-card p-6 flex flex-col justify-between min-h-[190px] group">
                <div class="space-y-4">
                    <div class="w-9 h-9 bg-slate-50 border border-slate-200/60 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary rounded-xl flex items-center justify-center transition-all duration-300">
                        <i data-lucide="<?php echo e($service['icon']); ?>" class="w-4 h-4"></i>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-[11px] font-black text-dark uppercase tracking-wider"><?php echo e($service['title']); ?></h3>
                        <p class="text-[10px] text-slate-500 leading-relaxed font-medium"><?php echo e($service['description']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="mb-20" aria-labelledby="skills-title">
        <div class="flex flex-col items-center text-center mb-12">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black mb-1">Technical Proficiency</p>
            <h2 id="skills-title" class="text-2xl font-black text-dark tracking-tight">Eksperti & Paradigma</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <?php $__currentLoopData = $data['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bento-card p-6 flex flex-col justify-between min-h-[320px]">
                <div class="space-y-6 flex-grow">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-primary/5 border border-primary/10 text-primary rounded-xl flex items-center justify-center">
                            <i data-lucide="<?php echo e($cat['category'] == 'Frontend' ? 'layout' : 'database'); ?>" class="w-4 h-4"></i>
                        </div>
                        <h3 class="text-xs font-black text-dark uppercase tracking-widest"><?php echo e($cat['category']); ?></h3>
                    </div>
                    
                    <div class="space-y-5">
                        <?php $__currentLoopData = $cat['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group/item">
                            <div class="flex justify-between items-end mb-1.5">
                                <span class="text-[11px] font-bold text-slate-600 group-hover/item:text-primary transition-colors"><?php echo e($skill['name']); ?></span>
                                <span class="text-[8px] font-black text-slate-300 uppercase tracking-wider"><?php echo e($skill['level']); ?></span>
                            </div>
                            <div class="h-1 bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-primary/20 group-hover/item:bg-primary transition-all duration-1000 w-0" data-width="<?php echo e($skill['level'] == 'Advanced' ? '95%' : ($skill['level'] == 'Intermediate' ? '75%' : '55%')); ?>"></div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="bento-card p-6 !bg-slate-900 text-white relative overflow-hidden min-h-[320px] group">
                <div class="relative z-10 h-full flex flex-col justify-between">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-white/5 border border-white/10 text-white rounded-xl flex items-center justify-center">
                            <i data-lucide="shield-check" class="w-4 h-4"></i>
                        </div>
                        <h3 class="text-xs font-black uppercase tracking-widest text-white">Engineering</h3>
                    </div>
                    
                    <div class="space-y-3 flex-grow">
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 border border-white/5 group-hover:bg-white/10 transition-all duration-300">
                            <div class="w-6 h-6 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="text-[11px] font-bold text-slate-200">Clean Architecture Design</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 border border-white/5 group-hover:bg-white/10 transition-all duration-300">
                            <div class="w-6 h-6 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="text-[11px] font-bold text-slate-200">Test-Driven Development</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 border border-white/5 group-hover:bg-white/10 transition-all duration-300">
                            <div class="w-6 h-6 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="text-[11px] font-bold text-slate-200">Scalable Infrastructure Layer</span>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-16 -right-16 w-40 h-40 bg-primary/5 rounded-full blur-2xl"></div>
            </div>
        </div>
    </section>

    <section class="mb-20">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-8 gap-4">
            <div class="space-y-1">
                <p class="text-primary text-[9px] uppercase tracking-widest font-black">Recent Works</p>
                <h2 class="text-2xl font-black text-dark tracking-tight">Proyek Unggulan</h2>
            </div>
            <a href="<?php echo e(route('experience')); ?>" class="btn-outline text-xs px-4 py-2 rounded-xl border border-slate-200 shadow-sm hover:bg-slate-50 transition-all">Semua Portofolio</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = array_slice($data['projects'], 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white border border-slate-200/60 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500 overflow-hidden group flex flex-col justify-between">
                <div>
                    <div class="aspect-[16/10] overflow-hidden bg-slate-50 relative border-b border-slate-100">
                        <img src="<?php echo e($project['image']); ?>" alt="<?php echo e($project['title']); ?>" class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-700 ease-out">
                    </div>
                    <div class="p-5 space-y-3">
                        <span class="inline-flex items-center gap-1.5 bg-slate-50 border border-slate-200 text-slate-400 text-[9px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                            <i data-lucide="folder" class="w-2.5 h-2.5"></i>
                            <?php echo e($project['category']); ?>

                        </span>
                        <h3 class="text-sm font-black text-dark tracking-tight group-hover:text-primary transition-colors duration-300">
                            <?php echo e($project['title']); ?>

                        </h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2 font-medium">
                            <?php echo e($project['description']); ?>

                        </p>
                    </div>
                </div>
                <div class="p-5 pt-0">
                    <div class="flex gap-1 flex-wrap mb-4">
                        <?php $__currentLoopData = array_slice($project['tags'], 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="text-[8px] font-black px-2 py-0.5 bg-slate-50 text-slate-400 border border-slate-200/40 rounded-md uppercase tracking-wide">#<?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a href="<?php echo e($project['github'] ?? '#'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-1.5 w-full text-[11px] font-bold text-dark bg-slate-50 hover:bg-primary hover:text-white border border-slate-200 hover:border-primary py-2.5 rounded-xl transition-all shadow-sm">
                        Lihat Sumber Kode
                        <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="mb-20">
        <div class="bento-card overflow-hidden !bg-slate-900 text-white border-none shadow-xl shadow-slate-200/20">
            <div class="grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-7 p-8 md:p-10 flex flex-col justify-between space-y-6 lg:space-y-0">
                    <div class="space-y-3">
                        <div class="inline-flex items-center gap-1.5 text-primary font-black text-[9px] uppercase tracking-widest">
                            <i data-lucide="award" class="w-3.5 h-3.5"></i>
                            Credentials & Milestones
                        </div>
                        <h2 class="text-xl font-black tracking-tight text-white">Prestasi & Sertifikasi Kompetensi</h2>
                        <p class="text-xs text-slate-400 max-w-md leading-relaxed font-medium">Rekam jejak akademik, sertifikat kelulusan program pelatihan intensif, serta keikutsertaan olimpiade sains nasional.</p>
                    </div>
                    <div>
                        <a href="<?php echo e(route('achievements')); ?>" class="btn-primary inline-flex !bg-primary !text-white px-5 py-2.5 text-xs rounded-xl shadow-md">
                            Eksplorasi Sertifikasi
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 bg-white/5 p-8 md:p-10 flex flex-col justify-center border-t lg:border-t-0 lg:border-l border-white/5">
                    <div class="space-y-4 text-slate-300">
                        <div class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-md bg-white/5 border border-white/10 flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-3 h-3 text-primary"></i>
                            </div>
                            <span class="text-xs font-bold">Sertifikat Kegiatan OSN Regional</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-md bg-white/5 border border-white/10 flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-3 h-3 text-primary"></i>
                            </div>
                            <span class="text-xs font-bold">Google Student Ambassador Selection</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-md bg-white/5 border border-white/10 flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-3 h-3 text-primary"></i>
                            </div>
                            <span class="text-xs font-bold">Beasiswa Kelembagaan & Instansi Digital</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-24">
        <div class="flex flex-col items-center text-center mb-12">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black mb-1">Social Proof</p>
            <h2 class="text-2xl font-black text-dark tracking-tight">Wall of Love</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php for($i=1; $i<=3; $i++): ?>
            <div class="bento-card p-6 flex flex-col justify-between min-h-[200px]">
                <p class="text-[11px] text-slate-500 italic leading-relaxed font-medium mb-6">
                    "Memiliki kemampuan analisis sistem yang tajam. Selalu mengimplementasikan arsitektur database secara rapi dan modular selama kolaborasi proyek tim."
                </p>
                <div class="flex items-center gap-3.5">
                    <div class="w-9 h-9 rounded-full bg-slate-100 overflow-hidden shrink-0 border border-slate-200">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=<?php echo e($i); ?>test" alt="Reviewer <?php echo e($i); ?>">
                    </div>
                    <div class="space-y-0.5">
                        <div class="text-[11px] font-black text-dark">Rekan Sejawat <?php echo e($i); ?></div>
                        <div class="text-[8px] text-slate-400 font-bold uppercase tracking-wider">Teknik Informatika</div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <section class="py-20 text-center border-t border-slate-200/60">
        <div class="max-w-2xl mx-auto space-y-5">
            <h2 class="text-3xl md:text-4xl font-black text-dark tracking-tight leading-tight">
                Mari Bangun Arsitektur Aplikasi <br> 
                <span class="gradient-text">Yang Kokoh Bersama.</span>
            </h2>
            <p class="text-xs text-slate-500 leading-relaxed font-medium max-w-md mx-auto">
                Terbuka untuk ruang diskusi ilmiah, konsultasi teknis rekayasa web, hingga kolaborasi platform digital instansi.
            </p>
            <div class="flex justify-center gap-4 pt-4">
                <a href="mailto:<?php echo e($data['profile']['email']); ?>" class="btn-primary px-6 py-3 text-xs rounded-xl">Hubungi Sekarang</a>
                <a href="<?php echo e($data['profile']['linkedin']); ?>" target="_blank" rel="noopener noreferrer" class="btn-outline px-6 py-3 text-xs rounded-xl">LinkedIn Profile</a>
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
<?php endif; ?><?php /**PATH C:\laragon\www\webporto2\resources\views/home.blade.php ENDPATH**/ ?>