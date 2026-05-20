<x-layout :data="$data">
    <x-slot:title>Prestasi & Sertifikasi</x-slot>

    <section class="py-12 md:py-16 border-b border-slate-200/60 mb-12 animate-fade-in">
        <div class="space-y-3">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black">Credentials & Milestones</p>
            <h1 class="text-3xl md:text-4xl font-black text-dark tracking-tight">Prestasi & Sertifikasi</h1>
            <p class="text-sm text-slate-500 max-w-xl font-medium leading-relaxed">Eksplorasi rekam jejak sertifikasi kompetensi, pencapaian akademik, serta validasi keahlian rekayasa perangkat lunak.</p>
        </div>
    </section>

    <section class="mb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="bento-card p-6 flex flex-col justify-between min-h-[160px] group relative overflow-hidden">
                <div class="w-9 h-9 rounded-xl bg-primary/5 border border-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                    <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                </div>
                <div>
                    <div class="text-3xl font-black text-dark tracking-tight mb-0.5">3.73 / 4.00</div>
                    <div class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Indeks Prestasi Kumulatif</div>
                </div>
                <div class="absolute -bottom-10 -right-10 w-24 h-24 bg-primary/5 rounded-full blur-xl"></div>
            </div>

            <div class="bento-card p-6 flex flex-col justify-between min-h-[160px] group relative overflow-hidden">
                <div class="w-9 h-9 rounded-xl bg-primary/5 border border-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                    <i data-lucide="award" class="w-4 h-4"></i>
                </div>
                <div>
                    <div class="text-base font-black text-dark tracking-tight mb-1">Scholarship Awardee</div>
                    <p class="text-[10px] text-slate-500 font-medium leading-relaxed">Penerima pendanaan beasiswa prestasi kelembagaan berdasarkan kompetensi digital & literasi inklusif.</p>
                </div>
                <div class="absolute -bottom-10 -right-10 w-24 h-24 bg-primary/5 rounded-full blur-xl"></div>
            </div>

            <div class="bento-card p-6 flex flex-col justify-between min-h-[160px] group relative overflow-hidden">
                <div class="w-9 h-9 rounded-xl bg-primary/5 border border-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                    <i data-lucide="verified" class="w-4 h-4"></i>
                </div>
                <div>
                    <div class="text-base font-black text-dark tracking-tight mb-1">ISO & Industry Standards</div>
                    <p class="text-[10px] text-slate-500 font-medium leading-relaxed">Standarisasi penulisan kode bersih (*Clean Code*) mengacu pada paradigma rekayasa industri modern.</p>
                </div>
                <div class="absolute -bottom-10 -right-10 w-24 h-24 bg-primary/5 rounded-full blur-xl"></div>
            </div>
        </div>
    </section>

    <section class="mb-16">
        <div class="mb-8">
            <p class="text-primary text-[9px] uppercase tracking-widest font-black mb-1">Validated Competencies</p>
            <h2 class="text-xl font-black text-dark tracking-tight">Sertifikat & Penghargaan Kompetensi</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="bento-card p-6 flex gap-5 items-start group">
                <div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-200/60 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center shrink-0 transition-colors duration-300">
                    <i data-lucide="medal" class="w-5 h-5"></i>
                </div>
                <div class="space-y-2 flex-1">
                    <div class="flex justify-between items-start gap-2">
                        <h3 class="text-xs font-black text-dark uppercase tracking-wider group-hover:text-primary transition-colors duration-300">Sertifikat Olimpiade Sains Nasional (OSN)</h3>
                        <span class="text-[8px] font-black px-2 py-0.5 bg-slate-100 text-slate-500 rounded-md shrink-0">PIDIE</span>
                    </div>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Sertifikat penghargaan atas partisipasi aktif dalam ajang kompetensi bergengsi Olimpiade Sains Nasional tingkat regional.</p>
                </div>
            </div>

            <div class="bento-card p-6 flex gap-5 items-start group">
                <div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-200/60 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center shrink-0 transition-colors duration-300">
                    <i data-lucide="star" class="w-5 h-5"></i>
                </div>
                <div class="space-y-2 flex-1">
                    <div class="flex justify-between items-start gap-2">
                        <h3 class="text-xs font-black text-dark uppercase tracking-wider group-hover:text-primary transition-colors duration-300">Google Student Ambassador Selection</h3>
                        <span class="text-[8px] font-black px-2 py-0.5 bg-slate-900 text-white rounded-md shrink-0">STAGE 2</span>
                    </div>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Validasi kelulusan administrasi mendalam hingga berhasil mencapai seleksi tahap kedua pada program representatif Google Student Ambassador.</p>
                </div>
            </div>

            <div class="bento-card p-6 flex gap-5 items-start group">
                <div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-200/60 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center shrink-0 transition-colors duration-300">
                    <i data-lucide="cpu" class="w-5 h-5"></i>
                </div>
                <div class="space-y-2 flex-1">
                    <div class="flex justify-between items-start gap-2">
                        <h3 class="text-xs font-black text-dark uppercase tracking-wider group-hover:text-primary transition-colors duration-300">Generative AI - Technology Training</h3>
                        <span class="text-[8px] font-black px-2 py-0.5 bg-slate-100 text-slate-500 rounded-md shrink-0">CERTIFIED</span>
                    </div>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Sertifikat kelulusan sesi edukasi mendalam mengenai pemanfaatan teknologi kecerdasan buatan (*Generative Artificial Intelligence*) untuk produktivitas rekayasa digital.</p>
                </div>
            </div>

            <div class="bento-card p-6 flex gap-5 items-start group">
                <div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-200/60 text-slate-400 group-hover:bg-primary/5 group-hover:border-primary/20 group-hover:text-primary flex items-center justify-center shrink-0 transition-colors duration-300">
                    <i data-lucide="layers" class="w-5 h-5"></i>
                </div>
                <div class="space-y-2 flex-1">
                    <div class="flex justify-between items-start gap-2">
                        <h3 class="text-xs font-black text-dark uppercase tracking-wider group-hover:text-primary transition-colors duration-300">Maju Bareng AI & API Integration</h3>
                        <span class="text-[8px] font-black px-2 py-0.5 bg-slate-100 text-slate-500 rounded-md shrink-0">HACKTIV8</span>
                    </div>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Program intensif pelatihan integrasi Application Programming Interface (API) eksternal serta maksimalisasi produktivitas berskala enterprise.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 border-t border-slate-100 text-center">
        <div class="max-w-md mx-auto space-y-4">
            <h2 class="text-xl font-black text-dark tracking-tight">Butuh Validasi Dokumen Fisik?</h2>
            <p class="text-xs text-slate-500 leading-relaxed font-medium">Seluruh berkas salinan digital sertifikat asli maupun transkrip nilai akademik resmi siap disediakan untuk kebutuhan peninjauan profesional.</p>
            <div class="flex justify-center gap-3 pt-2">
                <a href="mailto:{{ $data['profile']['email'] }}" class="btn-primary text-xs px-5 py-2.5">Minta Berkas Kredensial</a>
                <a href="{{ route('home') }}" class="btn-outline text-xs px-5 py-2.5">Kembali ke Beranda</a>
            </div>
        </div>
    </section>
</x-layout>