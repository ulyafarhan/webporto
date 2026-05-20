<x-layout :data="$data">
    <x-slot:title>{{ $item['topic'] }}</x-slot>

    <!-- Custom prose styling for markdown rendering -->
    <style>
        .prose h3 {
            font-size: 14px;
            font-weight: 800;
            color: #0f172a;
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .prose p {
            margin-bottom: 1rem;
            color: #475569;
            line-height: 1.7;
            font-size: 13px;
        }
        .prose ul, .prose ol {
            margin-left: 1.25rem;
            margin-bottom: 1rem;
            list-style-type: disc;
        }
        .prose li {
            margin-bottom: 0.5rem;
            color: #475569;
            font-size: 13px;
        }
        .prose code {
            font-family: monospace;
            font-size: 11px;
            background-color: #f1f5f9;
            color: #0d9488;
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: 600;
        }
    </style>

    <div class="py-4">
        <!-- Back Navigation -->
        <a href="{{ route('course') }}" class="inline-flex items-center gap-2 text-xs text-slate-500 hover:text-primary transition-colors mb-8 group font-bold uppercase tracking-wider">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
            <span>Kembali ke Kurikulum</span>
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Sidebar / Learning Roadmap -->
            <div class="hidden lg:block">
                <div class="sticky top-28 bg-white border border-slate-200/60 p-5 rounded-2xl shadow-sm">
                    <h3 class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-6 flex items-center gap-1.5">
                        <i data-lucide="map" class="w-3.5 h-3.5 text-primary"></i>
                        Roadmap Belajar
                    </h3>
                    
                    <div class="relative pl-3 before:absolute before:left-3 before:top-2 before:bottom-2 before:w-[2px] before:bg-slate-100">
                        @foreach($data['curriculum'] as $cur)
                            @php
                                $isActive = $cur['slug'] == $item['slug'];
                            @endphp
                            <div class="relative py-2.5 pl-6 group">
                                <!-- Timeline Node Indicator -->
                                <div class="absolute left-[-3.5px] top-1/2 -translate-y-1/2 w-2.5 h-2.5 rounded-full border-2 transition-all duration-300 
                                    {{ $isActive ? 'bg-primary border-primary shadow-[0_0_8px_rgba(13,148,136,0.6)] scale-125' : 'bg-white border-slate-300 group-hover:border-primary' }}"></div>
                                
                                <a href="{{ route('course.detail', $cur['slug']) }}" class="block text-[11px] font-bold transition-all {{ $isActive ? 'text-primary font-black translate-x-1' : 'text-slate-500 hover:text-slate-900 hover:translate-x-0.5' }}">
                                    {{ $cur['topic'] }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="lg:col-span-3">
                <div class="bento-card p-6 md:p-8">
                    <!-- Module Header -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-slate-100 mb-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-primary/5 text-primary rounded-xl flex items-center justify-center shrink-0">
                                <i data-lucide="{{ $item['icon'] }}" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-1">
                                    <span class="inline-block text-[8px] font-black px-2 py-0.5 border border-primary/20 bg-primary/5 text-primary rounded-md uppercase tracking-wider">
                                        {{ $item['category'] }}
                                    </span>
                                    <span class="flex items-center gap-1 text-[8px] text-emerald-700 bg-emerald-50 border border-emerald-100 px-2 py-0.5 rounded-full font-black uppercase tracking-wider">
                                        <span class="w-1 h-1 rounded-full bg-emerald-500 animate-pulse"></span>
                                        {{ $item['status'] }}
                                    </span>
                                </div>
                                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">{{ $item['topic'] }}</h1>
                            </div>
                        </div>

                        <!-- Read Time Stats -->
                        <div class="flex items-center gap-1.5 text-xs text-slate-400 font-bold uppercase shrink-0">
                            <i data-lucide="clock" class="w-4 h-4 text-slate-400"></i>
                            <span>{{ $item['reading_time'] }} Belajar</span>
                        </div>
                    </div>

                    <!-- Dynamic Navigation Tab Bar -->
                    <div class="flex border-b border-slate-100 mb-6 overflow-x-auto whitespace-nowrap gap-2 scrollbar-none" role="tablist">
                        <button onclick="switchTab('concept')" id="tab-btn-concept" class="px-4 py-2.5 text-xs font-black uppercase tracking-wider border-b-2 border-primary text-primary transition-all cursor-pointer flex items-center gap-1.5" role="tab" aria-selected="true">
                            <i data-lucide="book-open" class="w-4 h-4"></i>
                            Panduan Konsep
                        </button>
                        <button onclick="switchTab('code')" id="tab-btn-code" class="px-4 py-2.5 text-xs font-black uppercase tracking-wider border-b-2 border-transparent text-slate-400 hover:text-slate-600 transition-all cursor-pointer flex items-center gap-1.5" role="tab" aria-selected="false">
                            <i data-lucide="code-2" class="w-4 h-4"></i>
                            Playground Kode
                        </button>
                        <button onclick="switchTab('syllabus')" id="tab-btn-syllabus" class="px-4 py-2.5 text-xs font-black uppercase tracking-wider border-b-2 border-transparent text-slate-400 hover:text-slate-600 transition-all cursor-pointer flex items-center gap-1.5" role="tab" aria-selected="false">
                            <i data-lucide="check-square" class="w-4 h-4"></i>
                            Sub-Topik Utama
                        </button>
                    </div>

                    <!-- Panels Container -->
                    <div class="space-y-6">
                        <!-- Panel 1: Panduan Konsep (HTML rendered from markdown) -->
                        <div id="tab-panel-concept" class="space-y-4" role="tabpanel">
                            <div class="prose max-w-none text-sm text-slate-600 leading-relaxed">
                                {!! Illuminate\Support\Str::markdown($item['content']) !!}
                            </div>
                        </div>

                        <!-- Panel 2: Playground Kode (With real sample code and copy function) -->
                        <div id="tab-panel-code" class="hidden space-y-4" role="tabpanel">
                            <textarea id="raw-code-store" class="hidden">{{ $item['code_example'] }}</textarea>
                            
                            <div class="bg-slate-950 rounded-xl border border-slate-800 overflow-hidden shadow-xl">
                                <!-- Code Header -->
                                <div class="flex justify-between items-center px-4 py-3 bg-slate-900 border-b border-slate-800 text-xs font-bold text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-rose-500/80"></span>
                                        <span class="w-2 h-2 rounded-full bg-amber-500/80"></span>
                                        <span class="w-2 h-2 rounded-full bg-emerald-500/80"></span>
                                        <span class="ml-2 font-mono text-[10px] text-slate-300">{{ $item['code_filename'] }}</span>
                                    </div>
                                    
                                    <button onclick="copyToClipboard(this)" class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 hover:text-white transition-all cursor-pointer text-[9px] font-black uppercase tracking-wider">
                                        <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                                        <span class="btn-text">Salin Kode</span>
                                    </button>
                                </div>
                                
                                <!-- Code Editor Output -->
                                <div class="p-5 overflow-x-auto font-mono text-xs text-slate-200 leading-relaxed bg-[#0f1424] min-h-[150px]">
                                    <pre class="whitespace-pre"><code class="language-php">{{ $item['code_example'] }}</code></pre>
                                </div>
                            </div>
                        </div>

                        <!-- Panel 3: Syllabus / Checklist -->
                        <div id="tab-panel-syllabus" class="hidden space-y-4" role="tabpanel">
                            <h3 class="text-xs font-black text-primary uppercase tracking-widest mb-4">Target Materi Penguasaan</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                @foreach($item['details'] as $detail)
                                <div class="flex items-center gap-3 p-4 bg-slate-50 border border-slate-100 rounded-xl hover:border-primary/20 hover:bg-white transition-all duration-300">
                                    <div class="w-7 h-7 bg-primary/10 rounded-lg flex items-center justify-center shrink-0">
                                        <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                    </div>
                                    <span class="text-xs font-bold text-slate-700">{{ $detail }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Pro Tip Callout Card -->
                        <div class="mt-8 p-5 bg-gradient-to-br from-teal-50/50 via-sky-50/30 to-teal-50/20 border border-teal-100 rounded-2xl flex gap-4 items-start shadow-sm">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 border border-primary/20 text-primary flex items-center justify-center shrink-0">
                                <i data-lucide="lightbulb" class="w-5 h-5 animate-pulse"></i>
                            </div>
                            <div>
                                <h4 class="text-xs font-black text-primary uppercase tracking-widest mb-1">💡 Engineering Pro-Tip</h4>
                                <p class="text-xs text-slate-600 leading-relaxed">{{ $item['pro_tip'] }}</p>
                            </div>
                        </div>

                        <!-- Related Projects -->
                        @if($relatedProjects->count() > 0)
                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="text-xs font-black text-slate-900 uppercase tracking-widest mb-4">Implementasi pada Proyek</h2>
                            <div class="space-y-3">
                                @foreach($relatedProjects as $project)
                                <div class="flex items-center gap-4 p-4 bg-white border border-slate-100 rounded-xl shadow-sm group hover:border-primary/30 transition-all">
                                    <div class="w-16 h-12 rounded-lg overflow-hidden shrink-0 bg-slate-100">
                                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all">
                                    </div>
                                    <div class="min-w-0">
                                        <h4 class="text-sm font-black text-slate-900 truncate">{{ $project['title'] }}</h4>
                                        <p class="text-[10px] text-slate-500 truncate">{{ $project['description'] }}</p>
                                    </div>
                                    <div class="ml-auto shrink-0">
                                        <i data-lucide="external-link" class="w-4 h-4 text-slate-300 group-hover:text-primary transition-colors"></i>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Navigation Back / Next pagination -->
                <div class="mt-8 flex justify-between items-center">
                    @php
                        $currentIndex = collect($data['curriculum'])->search(fn($c) => $c['slug'] == $item['slug']);
                        $prev = $data['curriculum'][$currentIndex - 1] ?? null;
                        $next = $data['curriculum'][$currentIndex + 1] ?? null;
                    @endphp

                    @if($prev)
                    <a href="{{ route('course.detail', $prev['slug']) }}" class="flex items-center gap-3 text-slate-500 hover:text-primary transition-colors group">
                        <div class="w-8 h-8 rounded-lg bg-white border border-slate-200 flex items-center justify-center group-hover:border-primary group-hover:bg-primary/5 transition-all">
                            <i data-lucide="chevron-left" class="w-4 h-4 group-hover:-translate-x-0.5 transition-transform"></i>
                        </div>
                        <div>
                            <div class="text-[8px] uppercase font-black text-slate-400 tracking-wider">Sebelumnya</div>
                            <div class="text-xs font-bold">{{ $prev['topic'] }}</div>
                        </div>
                    </a>
                    @else
                    <div></div>
                    @endif

                    @if($next)
                    <a href="{{ route('course.detail', $next['slug']) }}" class="flex items-center gap-3 text-right text-slate-500 hover:text-primary transition-colors group">
                        <div>
                            <div class="text-[8px] uppercase font-black text-slate-400 tracking-wider">Berikutnya</div>
                            <div class="text-xs font-bold">{{ $next['topic'] }}</div>
                        </div>
                        <div class="w-8 h-8 rounded-lg bg-white border border-slate-200 flex items-center justify-center group-hover:border-primary group-hover:bg-primary/5 transition-all">
                            <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform"></i>
                        </div>
                    </a>
                    @else
                    <div></div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts section for tabs and clipboard -->
    <script>
        function switchTab(tabId) {
            // hide all panels
            document.getElementById('tab-panel-concept').classList.add('hidden');
            document.getElementById('tab-panel-code').classList.add('hidden');
            document.getElementById('tab-panel-syllabus').classList.add('hidden');
            
            // reset tab buttons style
            const btns = ['concept', 'code', 'syllabus'];
            btns.forEach(btn => {
                const el = document.getElementById('tab-btn-' + btn);
                el.classList.remove('border-primary', 'text-primary');
                el.classList.add('border-transparent', 'text-slate-400');
                el.setAttribute('aria-selected', 'false');
            });
            
            // show active panel
            document.getElementById('tab-panel-' + tabId).classList.remove('hidden');
            
            // highlight active button
            const activeBtn = document.getElementById('tab-btn-' + tabId);
            activeBtn.classList.remove('border-transparent', 'text-slate-400');
            activeBtn.classList.add('border-primary', 'text-primary');
            activeBtn.setAttribute('aria-selected', 'true');
        }

        function copyToClipboard(button) {
            const rawText = document.getElementById('raw-code-store').value;
            navigator.clipboard.writeText(rawText).then(() => {
                const textEl = button.querySelector('.btn-text');
                const iconEl = button.querySelector('i');
                
                // Success state UI toggle
                textEl.textContent = 'Tersalin!';
                button.classList.add('bg-emerald-500/10', 'border-emerald-500/20', 'text-emerald-400');
                button.classList.remove('bg-white/5', 'border-white/10', 'text-slate-400');
                
                if (window.lucide) {
                    iconEl.setAttribute('data-lucide', 'check');
                    lucide.createIcons();
                }
                
                setTimeout(() => {
                    textEl.textContent = 'Salin Kode';
                    button.classList.remove('bg-emerald-500/10', 'border-emerald-500/20', 'text-emerald-400');
                    button.classList.add('bg-white/5', 'border-white/10', 'text-slate-400');
                    
                    if (window.lucide) {
                        iconEl.setAttribute('data-lucide', 'copy');
                        lucide.createIcons();
                    }
                }, 2000);
            }).catch(err => {
                console.error('Gagal menyalin teks: ', err);
            });
        }
    </script>
</x-layout>
