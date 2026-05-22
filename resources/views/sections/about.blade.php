<section id="about" class="relative py-24 lg:py-32 overflow-hidden">

    {{-- Background accent --}}
    <div class="absolute top-0 right-0 w-1/2 h-full pointer-events-none opacity-5"
         style="background:radial-gradient(ellipse at right,rgba(59,130,246,1) 0%,transparent 70%);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-label">
                <i data-lucide="user" class="w-3.5 h-3.5"></i>
                About Me
            </span>
            <h2 class="section-heading mt-4 text-white">
                Who I <span class="gradient-text">Am</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Profesional dengan keahlian ganda di bidang teknologi web dan engineering jaringan
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- LEFT: Visual --}}
            <div class="relative" data-aos="fade-right">
                <div class="relative mx-auto max-w-sm">
                    {{-- Main image card --}}
                    <div class="glass-card p-2 rounded-3xl overflow-hidden">
                        <img src="{{ asset('assets/img/yasser.jpg') }}"
                             alt="Muhammad Yasser"
                             class="w-full rounded-2xl object-cover"
                             style="aspect-ratio:4/5; object-position:top;"
                             onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Muhammad+Yasser&background=1e40af&color=fff&size=400&font-size=0.33'">
                    </div>

                    {{-- Floating info cards --}}
                    <div class="absolute -right-6 top-1/4 glass-card p-3 rounded-xl"
                         style="animation:float 5s ease-in-out infinite;">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center">
                                <i data-lucide="code-2" class="w-4 h-4 text-blue-400"></i>
                            </div>
                            <div>
                                <div class="text-white text-xs font-semibold">Full Stack</div>
                                <div class="text-gray-500 text-xs">Developer</div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -left-6 bottom-1/3 glass-card p-3 rounded-xl"
                         style="animation:float 7s ease-in-out infinite reverse;">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-cyan-500/20 flex items-center justify-center">
                                <i data-lucide="wifi" class="w-4 h-4 text-cyan-400"></i>
                            </div>
                            <div>
                                <div class="text-white text-xs font-semibold">EOS Telkom</div>
                                <div class="text-gray-500 text-xs">Network Engineer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: Content --}}
            <div class="space-y-8" data-aos="fade-left">
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-white">
                        Full Stack Developer &amp;
                        <span class="gradient-text">Engineering On Site</span>
                    </h3>
                    <p class="text-gray-400 leading-relaxed">
                        Saya adalah seorang profesional IT dengan pengalaman ganda: sebagai
                        <span class="text-primary-300 font-medium">Full Stack Web Developer</span> yang
                        membangun aplikasi modern berbasis Laravel, dan sebagai
                        <span class="text-primary-300 font-medium">Engineering On Site (EOS)</span> di
                        PT Telkom Indonesia yang menangani infrastruktur jaringan enterprise.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        Kombinasi keahlian ini memungkinkan saya memahami kebutuhan teknis dari dua sisi:
                        pengembangan aplikasi <em>dan</em> infrastruktur yang menjalankannya.
                        Saya terbiasa bekerja dalam lingkungan dengan tekanan tinggi, troubleshooting
                        cepat, dan komunikasi lintas tim.
                    </p>
                </div>

                {{-- Experience cards --}}
                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['icon' => 'code-2',    'color' => 'text-blue-400',   'bg' => 'bg-blue-500/10',   'title' => 'Web Developer',      'desc' => 'Laravel, PHP, REST API'],
                        ['icon' => 'wifi',      'color' => 'text-cyan-400',   'bg' => 'bg-cyan-500/10',   'title' => 'EOS Telkom',          'desc' => 'Network & Ops'],
                        ['icon' => 'activity',  'color' => 'text-purple-400', 'bg' => 'bg-purple-500/10', 'title' => 'Monitoring',          'desc' => 'Real-time Systems'],
                        ['icon' => 'tool',      'color' => 'text-orange-400', 'bg' => 'bg-orange-500/10', 'title' => 'Troubleshooting',     'desc' => 'Fast Resolution'],
                    ] as $card)
                    <div class="glass-card-hover p-4">
                        <div class="w-9 h-9 rounded-lg {{ $card['bg'] }} {{ $card['color'] }} flex items-center justify-center mb-3">
                            <i data-lucide="{{ $card['icon'] }}" class="w-4 h-4"></i>
                        </div>
                        <div class="text-white text-sm font-semibold">{{ $card['title'] }}</div>
                        <div class="text-gray-500 text-xs mt-1">{{ $card['desc'] }}</div>
                    </div>
                    @endforeach
                </div>

                {{-- Skill badges --}}
                <div>
                    <p class="text-gray-500 text-xs font-semibold uppercase tracking-widest mb-3">Core Technologies</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Laravel','PHP','MySQL','Tailwind','Alpine.js','REST API','Mikrotik','Linux Server','Network Monitoring','Git & GitHub','Vue.js','JavaScript'] as $skill)
                        <span class="tech-badge">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>

                {{-- Info --}}
                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['label' => 'Location',    'value' => $settings['owner_location'] ?? 'Indonesia',    'icon' => 'map-pin'],
                        ['label' => 'Email',        'value' => $settings['owner_email'] ?? 'yasser@yasser.dev','icon' => 'mail'],
                        ['label' => 'Employment',  'value' => 'PT Telkom Indonesia',                          'icon' => 'building-2'],
                        ['label' => 'Availability', 'value' => 'Open to Projects',                            'icon' => 'check-circle'],
                    ] as $info)
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary-500/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="{{ $info['icon'] }}" class="w-4 h-4 text-primary-400"></i>
                        </div>
                        <div>
                            <div class="text-gray-600 text-xs">{{ $info['label'] }}</div>
                            <div class="text-gray-300 text-sm font-medium truncate max-w-[140px]">{{ $info['value'] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="{{ asset('cv/muhammad-yasser-cv.pdf') }}" download class="btn-primary inline-flex">
                    <i data-lucide="download" class="w-4 h-4"></i>
                    Download Resume
                </a>
            </div>
        </div>
    </div>
</section>
