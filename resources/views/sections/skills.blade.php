<section id="skills" class="relative py-24 lg:py-32 overflow-hidden">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse at 50% 100%,rgba(59,130,246,0.06) 0%,transparent 60%);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-label">
                <i data-lucide="zap" class="w-3.5 h-3.5"></i>
                Skills & Expertise
            </span>
            <h2 class="section-heading mt-4 text-white">
                My <span class="gradient-text">Technical Skills</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Keahlian teknis di bidang pengembangan web dan engineering infrastruktur
            </p>
        </div>

        {{-- Development Skills --}}
        <div class="mb-10" data-aos="fade-up">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-9 h-9 rounded-xl bg-blue-500/20 flex items-center justify-center">
                    <i data-lucide="code-2" class="w-4 h-4 text-blue-400"></i>
                </div>
                <h3 class="text-white font-bold text-lg">Development Skills</h3>
                <div class="flex-1 h-px bg-white/5"></div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
                @foreach($devSkills as $skill)
                <div class="glass-card-hover p-4 rounded-2xl flex flex-col items-center gap-3 text-center"
                     data-aos="zoom-in"
                     data-aos-delay="{{ $loop->index * 40 }}">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center"
                         style="background:{{ $skill->color }}18; border:1px solid {{ $skill->color }}30;">
                        <span class="w-3 h-3 rounded-full"
                              style="background:{{ $skill->color }}; box-shadow:0 0 8px {{ $skill->color }};"></span>
                    </div>
                    <span class="text-gray-200 text-sm font-medium leading-tight">{{ $skill->name }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Engineering Skills --}}
        <div class="mb-16" data-aos="fade-up">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-9 h-9 rounded-xl bg-cyan-500/20 flex items-center justify-center">
                    <i data-lucide="wifi" class="w-4 h-4 text-cyan-400"></i>
                </div>
                <h3 class="text-white font-bold text-lg">Engineering Skills</h3>
                <div class="flex-1 h-px bg-white/5"></div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                @foreach($engSkills as $skill)
                <div class="glass-card-hover p-4 rounded-2xl flex flex-col items-center gap-3 text-center"
                     data-aos="zoom-in"
                     data-aos-delay="{{ $loop->index * 40 }}">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center"
                         style="background:{{ $skill->color }}18; border:1px solid {{ $skill->color }}30;">
                        <span class="w-3 h-3 rounded-full"
                              style="background:{{ $skill->color }}; box-shadow:0 0 8px {{ $skill->color }};"></span>
                    </div>
                    <span class="text-gray-200 text-sm font-medium leading-tight">{{ $skill->name }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Tools & Technologies --}}
        <div class="glass-card p-8 rounded-3xl" data-aos="fade-up">
            <h3 class="text-center text-white font-bold text-lg mb-8">Tools & Technologies</h3>
            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-4">
                @foreach([
                    ['Laravel',    '#FF2D20', 'L'],
                    ['PHP',        '#777BB4', 'P'],
                    ['MySQL',      '#4479A1', 'M'],
                    ['JavaScript', '#F7DF1E', 'J'],
                    ['Tailwind',   '#06B6D4', 'T'],
                    ['Vue.js',     '#4FC08D', 'V'],
                    ['Git',        '#F05032', 'G'],
                    ['Linux',      '#FCC624', 'L'],
                    ['Mikrotik',   '#CC0000', 'M'],
                    ['REST API',   '#00D4AA', 'R'],
                    ['PostgreSQL', '#336791', 'P'],
                    ['Alpine.js',  '#8BC0D0', 'A'],
                    ['Vite',       '#BD34FE', 'V'],
                    ['Zabbix',     '#CC0000', 'Z'],
                    ['SNMP',       '#3B82F6', 'S'],
                    ['Docker',     '#2496ED', 'D'],
                ] as [$name, $color, $letter])
                <div class="flex flex-col items-center gap-2 group cursor-default">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center font-bold text-sm
                                transition-all duration-300 group-hover:scale-110 group-hover:shadow-neon"
                         style="background:{{ $color }}20; border:1px solid {{ $color }}30; color:{{ $color }};">
                        {{ $letter }}
                    </div>
                    <span class="text-gray-500 text-xs text-center group-hover:text-gray-300 transition-colors">
                        {{ $name }}
                    </span>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
