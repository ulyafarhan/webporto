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
     <?php $__env->slot('title', null, []); ?> Pengalaman <?php $__env->endSlot(); ?>

    <section class="py-12 md:py-16 border-b border-slate-200/60 mb-12 animate-fade-in">
        <div class="space-y-3">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black">Professional & Organizational Journey</p>
            <h1 class="text-3xl md:text-4xl font-black text-dark tracking-tight">Jejak Karir & Eksplorasi Organisasi</h1>
            <p class="text-sm text-slate-500 max-w-xl font-medium leading-relaxed">Dokumentasi komprehensif mengenai peran, kontribusi sistem rekayasa web, serta tanggung jawab struktural yang telah saya jalankan.</p>
        </div>
    </section>

    <section class="mb-16">
        <div class="space-y-4">
            <?php $__currentLoopData = $data['experiences']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bento-card p-6 md:p-8 flex flex-col md:flex-row gap-6 md:gap-10 items-start group">
                <div class="md:w-52 shrink-0 space-y-1">
                    <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-primary/5 border border-primary/10 text-primary text-[10px] font-black uppercase tracking-wider">
                        <i data-lucide="calendar" class="w-3 h-3"></i>
                        <?php echo e($exp['period']); ?>

                    </div>
                    <div class="text-[11px] font-black text-slate-400 uppercase tracking-widest pt-1 block"><?php echo e($exp['company']); ?></div>
                </div>
                
                <div class="flex-1 min-w-0 space-y-3">
                    <h3 class="text-base font-black text-dark tracking-tight group-hover:text-primary transition-colors duration-300"><?php echo e($exp['title']); ?></h3>
                    <p class="text-xs text-slate-500 leading-relaxed font-medium"><?php echo e($exp['description']); ?></p>
                    
                    <div class="flex flex-wrap gap-1.5 pt-2">
                        <?php $__currentLoopData = $exp['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="text-[8px] font-black px-2.5 py-0.5 bg-slate-50 text-slate-400 border border-slate-100 rounded-md uppercase tracking-wide">#<?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="mb-16 pt-12 border-t border-slate-200/50">
        <div class="mb-8">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black mb-1">Competency Mapping</p>
            <h2 class="text-xl font-black text-dark tracking-tight">Penerapan Paradigma & Metodologi</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bento-card p-6 flex flex-col justify-between min-h-[160px] group">
                <div>
                    <div class="text-xs font-black text-dark uppercase tracking-wider mb-2 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                        Backend Architecture
                    </div>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed mb-4">Implementasi logika server modern, optimasi kueri basis data relasional, serta penyusunan struktur API modular.</p>
                </div>
                <div>
                    <div class="flex justify-between items-center text-[9px] font-black text-slate-400 uppercase tracking-wider mb-2">
                        <span>Utilization Level</span>
                        <span class="text-primary">85%</span>
                    </div>
                    <div class="w-full h-1 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-primary/20 group-hover:bg-primary transition-all duration-1000 w-0" data-width="85%"></div>
                    </div>
                </div>
            </div>
            
            <div class="bento-card p-6 flex flex-col justify-between min-h-[160px] group">
                <div>
                    <div class="text-xs font-black text-dark uppercase tracking-wider mb-2 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                        UI/UX Implementation
                    </div>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed mb-4">Konversi desain fidelitas tinggi menjadi antarmuka komponen responsif yang berfokus pada aksesibilitas penuh.</p>
                </div>
                <div>
                    <div class="flex justify-between items-center text-[9px] font-black text-slate-400 uppercase tracking-wider mb-2">
                        <span>Utilization Level</span>
                        <span class="text-primary">90%</span>
                    </div>
                    <div class="w-full h-1 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-primary/20 group-hover:bg-primary transition-all duration-1000 w-0" data-width="90%"></div>
                    </div>
                </div>
            </div>
            
            <div class="bento-card p-6 flex flex-col justify-between min-h-[160px] group">
                <div>
                    <div class="text-xs font-black text-dark uppercase tracking-wider mb-2 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                        Technical Coordination
                    </div>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed mb-4">Koordinasi manajemen repositori Git, pembagian tugas rekayasa perangkat lunak, serta standarisasi penulisan kode tim.</p>
                </div>
                <div>
                    <div class="flex justify-between items-center text-[9px] font-black text-slate-400 uppercase tracking-wider mb-2">
                        <span>Utilization Level</span>
                        <span class="text-primary">75%</span>
                    </div>
                    <div class="w-full h-1 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-primary/20 group-hover:bg-primary transition-all duration-1000 w-0" data-width="75%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-16 pt-12 border-t border-slate-200/50">
        <div class="mb-8">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black mb-1">Impact & Deliverables</p>
            <h2 class="text-xl font-black text-dark tracking-tight">Pencapaian Kunci & Dampak Teknis</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bento-card p-6 flex items-start gap-5 group">
                <div class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-200/60 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center shrink-0 transition-colors duration-300">
                    <i data-lucide="award" class="w-4 h-4"></i>
                </div>
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-dark uppercase tracking-wider">Speaker Workshop Rekayasa Web</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Menjadi pemateri dan fasilitator dalam membagikan fundamental arsitektur MVC Laravel kepada 50+ mahasiswa dasar.</p>
                </div>
            </div>
            
            <div class="bento-card p-6 flex items-start gap-5 group">
                <div class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-200/60 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center shrink-0 transition-colors duration-300">
                    <i data-lucide="trending-up" class="w-4 h-4"></i>
                </div>
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-dark uppercase tracking-wider">Optimasi Performa Administrasi Portal</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Melakukan kueri optimasi penayangan data dan struktur caching, meningkatkan kecepatan pemuatan halaman dasbor sebesar 40%.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 border-t border-slate-100 text-center">
        <div class="max-w-md mx-auto space-y-4">
            <h2 class="text-xl font-black text-dark tracking-tight">Ingin Memulai Kerja Sama Strategis?</h2>
            <p class="text-xs text-slate-500 leading-relaxed font-medium">Saya siap berkontribusi penuh dalam pengerjaan arsitektur backend, diskusi ilmiah informatika, maupun digitalisasi sistem instansi Anda.</p>
            <div class="flex justify-center gap-3 pt-2">
                <a href="mailto:<?php echo e($data['profile']['email']); ?>" class="btn-primary text-xs px-5 py-2.5">Hubungi Saya</a>
                <a href="<?php echo e($data['profile']['linkedin']); ?>" target="_blank" rel="noopener noreferrer" class="btn-outline text-xs px-5 py-2.5">LinkedIn Profil</a>
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
<?php endif; ?><?php /**PATH C:\laragon\www\webporto2\resources\views/experience.blade.php ENDPATH**/ ?>