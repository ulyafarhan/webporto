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

    <!-- 1. Page Header -->
    <section class="py-10 border-b border-slate-100 mb-10">
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
            <div class="w-20 h-20 rounded-xl bg-slate-100 overflow-hidden shadow-sm shrink-0">
                <img src="<?php echo e($data['profile']['avatar']); ?>" alt="<?php echo e($data['profile']['name']); ?>" class="w-full h-full object-cover">
            </div>
            <div>
                <h1 class="text-2xl font-black text-slate-900 mb-1">Tentang <?php echo e($data['profile']['name']); ?></h1>
                <p class="text-slate-500 font-bold text-sm"><?php echo e($data['profile']['role']); ?></p>
            </div>
        </div>
    </section>

    <!-- 2. Bio -->
    <section class="mb-10">
        <h2 class="text-xs font-black text-primary uppercase tracking-widest mb-5">Profil Lengkap</h2>
        <div class="text-sm text-slate-600 leading-relaxed space-y-4 max-w-3xl">
            <p><?php echo e($data['profile']['bio']); ?></p>
            <p>
                Awal ketertarikan saya pada dunia web dimulai dari rasa penasaran tentang bagaimana sebuah sistem dapat menangani ribuan data secara bersamaan. Hal ini menuntun saya untuk mendalami Laravel sebagai pilihan framework backend utama.
            </p>
        </div>
    </section>

    <!-- 3. Mission & Values -->
    <section class="mb-10 pt-10 border-t border-slate-100">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bento-card p-6">
                <h3 class="text-sm font-black text-slate-900 mb-3 flex items-center gap-2">
                    <i data-lucide="target" class="w-4 h-4 text-primary"></i>
                    Visi Belajar
                </h3>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Menjadi ahli dalam arsitektur backend dan berkontribusi pada pengembangan aplikasi yang bermanfaat bagi masyarakat luas melalui kode yang bersih dan efisien.
                </p>
            </div>
            <div class="bento-card p-6">
                <h3 class="text-sm font-black text-slate-900 mb-3 flex items-center gap-2">
                    <i data-lucide="zap" class="w-4 h-4 text-primary"></i>
                    Prinsip Kerja
                </h3>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Memprioritaskan keamanan data, optimasi performa query, dan skalabilitas sistem dalam setiap baris kode yang ditulis.
                </p>
            </div>
        </div>
    </section>

    <!-- 4. Education -->
    <section class="mb-10 pt-10 border-t border-slate-100">
        <h2 class="text-xs font-black text-primary uppercase tracking-widest mb-6">Pendidikan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bento-card p-6 flex justify-between items-center">
                <div>
                    <h4 class="text-sm font-black text-slate-900">S1 Teknik Informatika</h4>
                    <p class="text-xs text-slate-500 mt-1">Universitas Malikussaleh</p>
                </div>
                <span class="text-[10px] font-black bg-primary/10 text-primary px-3 py-1 rounded-full">2022 - Now</span>
            </div>
            <div class="bento-card p-6 flex justify-between items-center">
                <div>
                    <h4 class="text-sm font-black text-slate-900">SMA Negeri 1</h4>
                    <p class="text-xs text-slate-500 mt-1">Lhokseumawe</p>
                </div>
                <span class="text-[10px] font-black bg-slate-100 text-slate-500 px-3 py-1 rounded-full">2019 - 2022</span>
            </div>
        </div>
    </section>

    <!-- 5. Hobbies & Interests -->
    <section class="pt-10 border-t border-slate-100">
        <h2 class="text-xs font-black text-primary uppercase tracking-widest mb-6">Di Luar Akademik</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bento-card p-5 text-center">
                <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center mx-auto mb-3">
                    <i data-lucide="terminal" class="w-5 h-5 text-slate-400"></i>
                </div>
                <span class="text-xs font-bold text-slate-600">Competitive Programming</span>
            </div>
            <div class="bento-card p-5 text-center">
                <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center mx-auto mb-3">
                    <i data-lucide="book-open" class="w-5 h-5 text-slate-400"></i>
                </div>
                <span class="text-xs font-bold text-slate-600">Tech Reading</span>
            </div>
            <div class="bento-card p-5 text-center">
                <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center mx-auto mb-3">
                    <i data-lucide="camera" class="w-5 h-5 text-slate-400"></i>
                </div>
                <span class="text-xs font-bold text-slate-600">Photography</span>
            </div>
            <div class="bento-card p-5 text-center">
                <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center mx-auto mb-3">
                    <i data-lucide="git-branch" class="w-5 h-5 text-slate-400"></i>
                </div>
                <span class="text-xs font-bold text-slate-600">Open Source</span>
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
<?php /**PATH C:\laragon\www\webporto\resources\views/about.blade.php ENDPATH**/ ?>