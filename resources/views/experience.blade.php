<x-layout :data="$data">
    <x-slot:title>Pengalaman</x-slot>

    <!-- 1. Page Header -->
    <section class="py-10 border-b border-slate-100 mb-10">
        <h1 class="text-2xl md:text-3xl font-black text-slate-900 mb-2">Jejak Karir & Organisasi</h1>
        <p class="text-sm text-slate-500 max-w-lg">Dokumentasi peran dan tanggung jawab yang telah saya jalankan sejauh ini.</p>
    </section>

    <!-- 2. Timeline -->
    <section class="mb-10">
        <div class="space-y-0">
            @foreach($data['experiences'] as $exp)
            <div class="flex flex-col md:flex-row gap-4 md:gap-8 py-6 border-b border-slate-100 last:border-none">
                <div class="md:w-48 shrink-0">
                    <div class="text-sm font-black text-primary mb-0.5">{{ $exp['period'] }}</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">{{ $exp['company'] }}</div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="text-base font-black text-slate-900 mb-2">{{ $exp['title'] }}</h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-3">{{ $exp['description'] }}</p>
                    <div class="flex flex-wrap gap-1.5">
                        @foreach($exp['tags'] as $tag)
                        <span class="text-[9px] font-bold px-2 py-0.5 bg-slate-50 border border-slate-100 text-slate-400 rounded-md">#{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- 3. Skill Utilization -->
    <section class="mb-10 pt-10 border-t border-slate-100">
        <h2 class="text-xs font-black text-primary uppercase tracking-widest mb-6">Penerapan Teknologi</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bento-card p-6">
                <div class="text-sm font-black text-slate-900 mb-1">Backend Development</div>
                <p class="text-xs text-slate-500 mb-4">Implementasi logika server dan manajemen data.</p>
                <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                    <div class="w-[85%] h-full bg-primary rounded-full"></div>
                </div>
            </div>
            <div class="bento-card p-6">
                <div class="text-sm font-black text-slate-900 mb-1">UI Implementation</div>
                <p class="text-xs text-slate-500 mb-4">Konversi desain menjadi antarmuka responsif.</p>
                <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                    <div class="w-[90%] h-full bg-primary rounded-full"></div>
                </div>
            </div>
            <div class="bento-card p-6">
                <div class="text-sm font-black text-slate-900 mb-1">Team Leadership</div>
                <p class="text-xs text-slate-500 mb-4">Koordinasi tim dan mentoring teknis.</p>
                <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                    <div class="w-[75%] h-full bg-primary rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Achievements -->
    <section class="mb-10 pt-10 border-t border-slate-100">
        <h2 class="text-xs font-black text-primary uppercase tracking-widest mb-6">Pencapaian Kunci</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bento-card p-5 flex items-start gap-4">
                <div class="w-9 h-9 rounded-xl bg-green-50 text-green-600 flex items-center justify-center shrink-0">
                    <i data-lucide="award" class="w-4 h-4"></i>
                </div>
                <div>
                    <h4 class="text-sm font-black text-slate-900 mb-1">Speaker Workshop Web</h4>
                    <p class="text-xs text-slate-500">Menyampaikan materi dasar-dasar Laravel kepada 50+ mahasiswa.</p>
                </div>
            </div>
            <div class="bento-card p-5 flex items-start gap-4">
                <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                    <i data-lucide="trending-up" class="w-4 h-4"></i>
                </div>
                <div>
                    <h4 class="text-sm font-black text-slate-900 mb-1">Optimasi Sistem Kampus</h4>
                    <p class="text-xs text-slate-500">Meningkatkan kecepatan load halaman admin sebesar 40%.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    <section class="pt-10 border-t border-slate-100 text-center pb-8">
        <h2 class="text-lg font-black text-slate-900 mb-4">Ingin Berkolaborasi?</h2>
        <div class="flex justify-center gap-3">
            <a href="mailto:{{ $data['profile']['email'] }}" class="btn-primary">Hubungi Saya</a>
            <a href="{{ $data['profile']['linkedin'] }}" class="btn-outline">LinkedIn Profil</a>
        </div>
    </section>

</x-layout>
