<x-layout :data="$data">
    <x-slot:title>Kurikulum Laravel 13</x-slot>

    @php
        $categories = [
            'Dasar' => 'bg-emerald-50 text-emerald-700 border-emerald-200',
            'Routing' => 'bg-indigo-50 text-indigo-700 border-indigo-200',
            'Database' => 'bg-sky-50 text-sky-700 border-sky-200',
            'Frontend' => 'bg-rose-50 text-rose-700 border-rose-200',
        ];
    @endphp

    <!-- 1. Progress Dashboard Visual -->
    <div class="bento-card p-6 md:p-8 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 border-slate-800 text-white mb-10 overflow-hidden relative">
        <!-- Glowing background elements -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-secondary/15 rounded-full blur-3xl"></div>
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
            <div>
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 border border-primary/25 text-primary text-[10px] font-bold uppercase tracking-wider mb-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                    Logbook Pembelajaran
                </div>
                <h1 class="text-2xl md:text-3xl font-black tracking-tight mb-2">Kurikulum & Progress Belajar</h1>
                <p class="text-xs text-slate-400 max-w-xl leading-relaxed">
                    Pelajari ekosistem Laravel 13 secara komprehensif mulai dari dasar instalasi hingga implementasi arsitektur database dan templating tingkat lanjut.
                </p>
            </div>
            
            <!-- Stats Widgets -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 shrink-0">
                <div class="p-3 bg-white/5 border border-white/10 rounded-xl">
                    <div class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Total Modul</div>
                    <div class="text-base font-black text-white mt-1">8 Modul</div>
                </div>
                <div class="p-3 bg-white/5 border border-white/10 rounded-xl">
                    <div class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Selesai</div>
                    <div class="text-base font-black text-primary mt-1">8 / 8 Modul</div>
                </div>
                <div class="p-3 bg-white/5 border border-white/10 rounded-xl col-span-2 sm:col-span-1">
                    <div class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Status</div>
                    <div class="text-base font-black text-secondary mt-1">100% Aktif</div>
                </div>
            </div>
        </div>
        
        <!-- Progress Bar -->
        <div class="mt-8 pt-6 border-t border-white/5 relative z-10">
            <div class="flex justify-between items-center text-xs font-bold text-slate-400 mb-2">
                <span>Progress Penguasaan Kompetensi</span>
                <span class="text-primary font-black">100% Selesai</span>
            </div>
            <div class="w-full h-3 bg-slate-800 rounded-full overflow-hidden p-0.5 border border-slate-700/50">
                <div class="h-full bg-gradient-to-r from-primary to-secondary rounded-full shadow-[0_0_10px_rgba(13,148,136,0.5)] transition-all duration-1000" style="width: 100%"></div>
            </div>
        </div>
    </div>

    <!-- 2. Curriculum Grid -->
    <section class="mb-16">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-xs font-black text-primary uppercase tracking-widest mb-1">Daftar Modul Pembelajaran</h2>
                <p class="text-xs text-slate-400">Pilih modul untuk melihat panduan konsep, contoh kode nyata, dan tips implementasi.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($data['curriculum'] as $item)
            <a href="{{ route('course.detail', $item['slug']) }}" class="bento-card p-6 flex flex-col group hover:border-primary/40 hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                <!-- Accent line at top on hover -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-primary/5 text-primary rounded-xl flex items-center justify-center group-hover:bg-primary group-hover:text-white group-hover:rotate-6 transition-all duration-300 shadow-sm">
                            <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="inline-block text-[9px] font-bold px-2.5 py-0.5 border rounded-md uppercase tracking-wider {{ $categories[$item['category']] ?? 'bg-slate-50 text-slate-700 border-slate-200' }}">
                                {{ $item['category'] }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2">
                        <span class="flex items-center gap-1 text-[9px] text-emerald-700 bg-emerald-50 border border-emerald-100 px-2 py-0.5 rounded-full font-black uppercase tracking-wider">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            {{ $item['status'] }}
                        </span>
                    </div>
                </div>
                
                <h3 class="text-base font-black text-slate-900 group-hover:text-primary transition-colors mb-2">{{ $item['topic'] }}</h3>
                <p class="text-xs text-slate-500 leading-relaxed line-clamp-2 mb-6">
                    {{ $item['description'] }}
                </p>

                <div class="mt-auto border-t border-slate-100 pt-4 flex items-center justify-between text-xs text-slate-400 font-bold uppercase tracking-widest">
                    <span class="flex items-center gap-1.5">
                        <i data-lucide="clock" class="w-3.5 h-3.5 text-slate-400"></i>
                        {{ $item['reading_time'] }} Belajar
                    </span>
                    <span class="flex items-center gap-1 text-slate-400 group-hover:text-primary transition-colors">
                        Pelajari Modul
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1.5 transition-transform"></i>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    <!-- 3. CTA -->
    <section class="py-16 border-t border-slate-100 text-center">
        <div class="max-w-lg mx-auto">
            <h2 class="text-xl font-black text-slate-900 mb-4">Siap untuk Melihat Implementasi Riil?</h2>
            <p class="text-sm text-slate-500 mb-8 leading-relaxed">
                Seluruh materi kurikulum di atas telah saya terapkan langsung pada berbagai proyek nyata skala medium hingga besar.
            </p>
            <a href="{{ route('home') }}#featured-projects" class="btn-primary inline-flex">Lihat Proyek Portofolio</a>
        </div>
    </section>

</x-layout>
