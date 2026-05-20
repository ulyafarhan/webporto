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
     <?php $__env->slot('title', null, []); ?> Tentang Saya <?php $__env->endSlot(); ?>

    <section class="py-12 md:py-16 border-b border-slate-200/60 mb-12 animate-fade-in">
        <div class="flex flex-col sm:flex-row items-center sm:items-center gap-6 text-center sm:text-left">
            <div class="w-24 h-24 rounded-2xl bg-gradient-to-tr from-slate-100 to-slate-50 border border-slate-200/60 p-2 shadow-sm shrink-0">
                <div class="w-full h-full rounded-xl overflow-hidden bg-slate-200">
                    <img src="<?php echo e($data['profile']['avatar']); ?>" alt="<?php echo e($data['profile']['name']); ?>" class="w-full h-full object-cover filter contrast-[1.02]">
                </div>
            </div>
            <div class="space-y-1.5">
                <p class="text-primary text-[9px] uppercase tracking-widest font-black">Identity Narrative</p>
                <h1 class="text-3xl font-black text-dark tracking-tight">Tentang <?php echo e($data['profile']['name']); ?></h1>
                <p class="text-slate-400 font-bold text-xs uppercase tracking-wider"><?php echo e($data['profile']['role']); ?></p>
            </div>
        </div>
    </section>

    <section class="mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
            <div class="lg:col-span-5 bento-card p-6 md:p-8 space-y-4 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="inline-flex items-center gap-1.5 text-primary font-black text-[9px] uppercase tracking-widest">
                        <i data-lucide="user" class="w-3.5 h-3.5"></i>
                        Biodata Singkat
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed font-medium">
                        <?php echo e($data['profile']['bio']); ?> Berasal dari Lhokseumawe, Aceh, saya mendedikasikan waktu akademik saya untuk meneliti optimasi kode komputer serta rekayasa sistem berbasis web.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-100 space-y-2 text-[11px] text-slate-400 font-bold uppercase tracking-wider">
                    <div class="flex items-center gap-2">
                        <i data-lucide="box" class="w-3.5 h-3.5 text-slate-300"></i>
                        <span>Fokus: Backend Engineering</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="code" class="w-3.5 h-3.5 text-slate-300"></i>
                        <span>Ekosistem: Laravel Framework</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 bento-card p-6 md:p-8 !bg-slate-900 text-white relative overflow-hidden flex flex-col justify-between">
                <div class="space-y-3 relative z-10">
                    <div class="inline-flex items-center gap-1.5 text-primary font-black text-[9px] uppercase tracking-widest">
                        <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
                        Cerita Motivasi Kuliah
                    </div>
                    <h3 class="text-base font-black text-white tracking-tight">Membongkar Kompleksitas di Balik Layar</h3>
                    <div class="text-slate-400 text-xs leading-relaxed font-medium space-y-3">
                        <p>
                            Awal ketertarikan saya pada dunia rekayasa web dimulai dari rasa penasaran yang mendalam mengenai bagaimana sebuah platform digital mampu menangani ribuan kueri data secara bersamaan tanpa mengalami kegagalan sistem. 
                        </p>
                        <p>
                            Keputusan memilih jurusan Teknik Informatika didasari oleh keinginan untuk tidak hanya menjadi pengguna teknologi, melainkan seorang arsitek yang merancang solusi komputasi tersebut. Setiap baris kode yang dieksekusi adalah bentuk kontribusi nyata untuk mempermudah aktivitas kehidupan masyarakat luas.
                        </p>
                    </div>
                </div>
                <div class="absolute -bottom-20 -right-20 w-52 h-52 bg-primary/10 rounded-full blur-3xl"></div>
            </div>
        </div>
    </section>

    <section class="mb-16 pt-12 border-t border-slate-200/50">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bento-card p-6 md:p-8 flex flex-col justify-between group min-h-[160px]">
                <div class="space-y-3">
                    <h3 class="text-xs font-black text-dark uppercase tracking-widest flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-primary/5 border border-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                            <i data-lucide="target" class="w-3.5 h-3.5"></i>
                        </div>
                        Visi Akademik & Karir
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed font-medium">
                        Menjadi seorang insinyur perangkat lunak profesional yang ahli dalam arsitektur backend, serta mampu berkontribusi aktif pada pengembangan platform inklusif yang berdampak sosial tinggi.
                    </p>
                </div>
            </div>
            <div class="bento-card p-6 md:p-8 flex flex-col justify-between group min-h-[160px]">
                <div class="space-y-3">
                    <h3 class="text-xs font-black text-dark uppercase tracking-widest flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-primary/5 border border-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                            <i data-lucide="zap" class="w-3.5 h-3.5"></i>
                        </div>
                        Prinsip Rekayasa Kode
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed font-medium">
                        Menempatkan proteksi integritas data, efisiensi konsumsi memori eksekusi kueri, serta skalabilitas modular sebagai standar mutlak yang tidak dapat dinegosiasikan di setiap implementasi sistem.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-16 pt-12 border-t border-slate-200/50">
        <div class="mb-8">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black mb-1">Academic Timeline</p>
            <h2 class="text-xl font-black text-dark tracking-tight">Riwayat Pendidikan</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bento-card p-6 flex justify-between items-center group">
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-dark uppercase tracking-wider group-hover:text-primary transition-colors">S1 Teknik Informatika</h4>
                    <p class="text-[11px] text-slate-400 font-bold uppercase tracking-wide">Universitas Malikussaleh</p>
                </div>
                <span class="text-[9px] font-black bg-primary/5 border border-primary/10 text-primary px-3 py-1 rounded-md tracking-wider">2022 - SEKARANG</span>
            </div>
            
            <div class="bento-card p-6 flex justify-between items-center group">
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-dark uppercase tracking-wider group-hover:text-primary transition-colors">SMA Negeri 1</h4>
                    <p class="text-[11px] text-slate-400 font-bold uppercase tracking-wide">Lhokseumawe</p>
                </div>
                <span class="text-[9px] font-black bg-slate-50 border border-slate-200/60 text-slate-400 px-3 py-1 rounded-md tracking-wider">2019 - 2022</span>
            </div>
        </div>
    </section>

    <section class="pt-12 border-t border-slate-200/50">
        <div class="mb-8 text-center sm:text-left">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black mb-1">Extracurricular Interests</p>
            <h2 class="text-xl font-black text-dark tracking-tight">Aktivitas di Luar Akademik</h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bento-card p-5 text-center group">
                <div class="w-9 h-9 border border-slate-100 rounded-xl bg-slate-50 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center mx-auto mb-4 transition-all duration-300">
                    <i data-lucide="terminal" class="w-4 h-4"></i>
                </div>
                <span class="text-[11px] font-black text-dark uppercase tracking-wider block">Competitive Prog</span>
            </div>
            <div class="bento-card p-5 text-center group">
                <div class="w-9 h-9 border border-slate-100 rounded-xl bg-slate-50 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center mx-auto mb-4 transition-all duration-300">
                    <i data-lucide="book-open" class="w-4 h-4"></i>
                </div>
                <span class="text-[11px] font-black text-dark uppercase tracking-wider block">Scientific Reading</span>
            </div>
            <div class="bento-card p-5 text-center group">
                <div class="w-9 h-9 border border-slate-100 rounded-xl bg-slate-50 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center mx-auto mb-4 transition-all duration-300">
                    <i data-lucide="camera" class="w-4 h-4"></i>
                </div>
                <span class="text-[11px] font-black text-dark uppercase tracking-wider block">Photography Art</span>
            </div>
            <div class="bento-card p-5 text-center group">
                <div class="w-9 h-9 border border-slate-100 rounded-xl bg-slate-50 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center mx-auto mb-4 transition-all duration-300">
                    <i data-lucide="git-branch" class="w-4 h-4"></i>
                </div>
                <span class="text-[11px] font-black text-dark uppercase tracking-wider block">Open Source Contrib</span>
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
<?php endif; ?><?php /**PATH C:\laragon\www\webporto2\resources\views/about.blade.php ENDPATH**/ ?>