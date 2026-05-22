<section id="hero"
    class="relative min-h-screen flex items-center justify-center overflow-hidden"
    style="background: radial-gradient(ellipse at 20% 50%, rgba(23,37,84,0.8) 0%, #020617 50%, #0a0f1e 100%);">

    {{-- Animated network canvas --}}
    <canvas id="networkCanvas" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>

    {{-- Glowing orbs --}}
    <div class="absolute top-1/4 left-1/4 w-96 h-96 rounded-full pointer-events-none"
         style="background:radial-gradient(circle,rgba(59,130,246,0.12) 0%,transparent 70%); filter:blur(40px); animation:float 8s ease-in-out infinite;"></div>
    <div class="absolute bottom-1/3 right-1/4 w-80 h-80 rounded-full pointer-events-none"
         style="background:radial-gradient(circle,rgba(0,212,255,0.08) 0%,transparent 70%); filter:blur(40px); animation:float 10s ease-in-out infinite reverse;"></div>

    {{-- Scan line --}}
    <div class="absolute left-0 right-0 h-px pointer-events-none"
         style="background:linear-gradient(90deg,transparent,rgba(0,212,255,0.4),transparent); animation:scan 6s linear infinite;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- LEFT: Content --}}
            <div class="text-center lg:text-left space-y-8">

                {{-- Label --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary-500/30 bg-primary-500/10 text-primary-400 text-xs font-semibold uppercase tracking-widest"
                     data-aos="fade-down">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse-slow"></span>
                    Available for Work
                </div>

                {{-- Name --}}
                <div data-aos="fade-up" data-aos-delay="100">
                    <p class="text-gray-500 text-sm font-mono mb-2 tracking-wider">Hello, I'm</p>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-black tracking-tight leading-none">
                        <span class="text-white">Muhammad</span><br>
                        <span class="gradient-text">Yasser</span>
                    </h1>
                </div>

                {{-- Typing role --}}
                <div data-aos="fade-up" data-aos-delay="200"
                     class="flex items-center justify-center lg:justify-start gap-3">
                    <div class="w-8 h-0.5 bg-primary-500"></div>
                    <div class="text-lg md:text-xl font-semibold text-gray-300 font-mono min-h-[1.75rem]">
                        <span id="typing-text" class="text-primary-400 typing-cursor"></span>
                    </div>
                </div>

                {{-- Description --}}
                <p data-aos="fade-up" data-aos-delay="300"
                   class="text-gray-400 text-base md:text-lg leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Berpengalaman dalam <span class="text-primary-300 font-medium">pengembangan aplikasi web modern</span>
                    dan <span class="text-primary-300 font-medium">operational engineering</span> untuk monitoring,
                    maintenance, troubleshooting, serta support infrastruktur jaringan dan sistem enterprise.
                </p>

                {{-- CTA Buttons --}}
                <div data-aos="fade-up" data-aos-delay="400"
                     class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
                    <a href="{{ asset('cv/muhammad-yasser-cv.pdf') }}" download
                       class="btn-primary group">
                        <i data-lucide="download" class="w-4 h-4 group-hover:animate-bounce"></i>
                        Download CV
                    </a>
                    <a href="#contact" class="btn-outline">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        Contact Me
                    </a>
                    <a href="#portfolio" class="btn-ghost">
                        <i data-lucide="briefcase" class="w-4 h-4"></i>
                        View Portfolio
                    </a>
                </div>

                {{-- Social Links --}}
                <div data-aos="fade-up" data-aos-delay="500"
                     class="flex items-center justify-center lg:justify-start gap-4">
                    @php $gh = $settings['github_url'] ?? '#'; $li = $settings['linkedin_url'] ?? '#'; @endphp
                    <a href="{{ $gh }}" target="_blank"
                       class="w-10 h-10 rounded-lg glass-card flex items-center justify-center text-gray-400 hover:text-white hover:border-primary-500/50 transition-all duration-300 hover:shadow-neon">
                        <i data-lucide="github" class="w-5 h-5"></i>
                    </a>
                    <a href="{{ $li }}" target="_blank"
                       class="w-10 h-10 rounded-lg glass-card flex items-center justify-center text-gray-400 hover:text-white hover:border-primary-500/50 transition-all duration-300 hover:shadow-neon">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                    <a href="{{ $settings['whatsapp_number'] ? 'https://wa.me/'.$settings['whatsapp_number'] : '#' }}" target="_blank"
                       class="w-10 h-10 rounded-lg glass-card flex items-center justify-center text-gray-400 hover:text-white hover:border-primary-500/50 transition-all duration-300 hover:shadow-neon">
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                    </a>
                    <a href="mailto:{{ $settings['owner_email'] ?? 'yasser@yasser.dev' }}"
                       class="w-10 h-10 rounded-lg glass-card flex items-center justify-center text-gray-400 hover:text-white hover:border-primary-500/50 transition-all duration-300 hover:shadow-neon">
                        <i data-lucide="mail" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            {{-- RIGHT: Profile visual --}}
            <div class="flex justify-center" data-aos="fade-left" data-aos-delay="300">
                <div class="relative">
                    {{-- Rotating rings --}}
                    <div class="absolute inset-0 rounded-full border border-primary-500/20 animate-spin-slow"></div>
                    <div class="absolute -inset-4 rounded-full border border-primary-500/10 animate-spin-slow" style="animation-direction:reverse; animation-duration:25s;"></div>
                    <div class="absolute -inset-8 rounded-full border border-cyan-500/10 animate-spin-slow" style="animation-duration:35s;"></div>

                    {{-- Tech orbit badges --}}
                    @foreach([
                        ['Laravel',    '0',    '-5rem',   ''],
                        ['MySQL',      'auto', '-5rem',   'right:0;'],
                        ['Mikrotik',   'auto', 'auto',    'bottom:-1rem;left:50%;transform:translateX(-50%);'],
                        ['Linux',      '30%',  '0',       'left:-5rem;'],
                    ] as [$tech, $top, $left, $extra])
                    <div class="absolute z-20 tech-badge text-xs px-2 py-1"
                         style="top:{{ $top }};left:{{ $left }};{{ $extra }}">
                        {{ $tech }}
                    </div>
                    @endforeach

                    {{-- Avatar --}}
                    <div class="relative w-64 h-64 md:w-80 md:h-80">
                        <div class="absolute inset-0 rounded-full"
                             style="background:conic-gradient(from 0deg, #3b82f6, #00d4ff, #8b5cf6, #3b82f6); padding:3px; border-radius:50%;">
                            <div class="w-full h-full rounded-full overflow-hidden"
                                 style="background:#020617;">
                                <img src="{{ asset('assets/img/yasser.jpg') }}"
                                     alt="Muhammad Yasser"
                                     class="w-full h-full object-cover"
                                     onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Muhammad+Yasser&background=1e40af&color=fff&size=320'">
                            </div>
                        </div>

                        {{-- Glow --}}
                        <div class="absolute inset-0 rounded-full pointer-events-none"
                             style="background:radial-gradient(circle at 50% 50%,rgba(59,130,246,0.2) 0%,transparent 70%);"></div>
                    </div>

                    {{-- Status badge --}}
                    <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 z-30
                                glass-card px-4 py-2 flex items-center gap-2 text-sm font-medium whitespace-nowrap">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-gray-300">Open to Opportunities</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats Row --}}
        <div class="mt-24 grid grid-cols-2 lg:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="200">
            @php
                $stats = [
                    ['value' => 25, 'suffix' => '+', 'label' => 'Total Projects',         'icon' => 'briefcase',   'color' => 'text-blue-400'],
                    ['value' => 5,  'suffix' => '+', 'label' => 'Years Experience',        'icon' => 'clock',       'color' => 'text-cyan-400'],
                    ['value' => 50, 'suffix' => '+', 'label' => 'Infrastructure Support',  'icon' => 'server',      'color' => 'text-purple-400'],
                    ['value' => 30, 'suffix' => '+', 'label' => 'Client / Branch Support', 'icon' => 'users',       'color' => 'text-emerald-400'],
                ];
            @endphp
            @foreach($stats as $stat)
            <div class="glass-card p-5 text-center group hover:border-primary-500/30 transition-all duration-300">
                <div class="flex justify-center mb-3">
                    <div class="w-10 h-10 rounded-lg bg-primary-500/10 flex items-center justify-center {{ $stat['color'] }}">
                        <i data-lucide="{{ $stat['icon'] }}" class="w-5 h-5"></i>
                    </div>
                </div>
                <div class="text-3xl font-display font-bold {{ $stat['color'] }} mb-1">
                    <span data-counter="{{ $stat['value'] }}" data-suffix="{{ $stat['suffix'] }}">0{{ $stat['suffix'] }}</span>
                </div>
                <div class="text-gray-500 text-xs font-medium">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Scroll indicator --}}
    <a href="#about"
       class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-600 hover:text-primary-400 transition-colors group">
        <span class="text-xs font-mono tracking-widest">SCROLL</span>
        <div class="w-5 h-8 rounded-full border border-gray-700 flex items-start justify-center p-1 group-hover:border-primary-500/50 transition-colors">
            <div class="w-1 h-2 bg-primary-400 rounded-full animate-bounce"></div>
        </div>
    </a>
</section>
