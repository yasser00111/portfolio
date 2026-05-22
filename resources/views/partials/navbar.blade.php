<nav id="navbar"
     x-data="{ open: false, scrolled: false }"
     @scroll.window="scrolled = window.scrollY > 50"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     :class="scrolled ? 'navbar-scrolled' : 'bg-transparent'">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">

            {{-- Logo --}}
            <a href="#hero" class="flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-lg bg-primary-600 flex items-center justify-center
                            shadow-neon group-hover:shadow-neon-lg transition-all duration-300">
                    <span class="text-white font-display font-bold text-sm">MY</span>
                </div>
                <div class="hidden sm:block">
                    <span class="text-white font-semibold text-sm block leading-tight">Muhammad Yasser</span>
                    <span class="text-primary-400 text-xs font-mono">Full Stack Dev & EOS</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-8">
                @foreach([
                    ['#about',       'About'],
                    ['#skills',      'Skills'],
                    ['#portfolio',   'Portfolio'],
                    ['#experience',  'Experience'],
                    ['#services',    'Services'],
                    ['#testimonials','Testimonials'],
                    ['#contact',     'Contact'],
                ] as [$href, $label])
                    <a href="{{ $href }}" class="nav-link text-sm font-medium">{{ $label }}</a>
                @endforeach
            </div>

            {{-- CTA --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ $settings['whatsapp_number'] ? 'https://wa.me/'.$settings['whatsapp_number'] : '#contact' }}"
                   target="_blank"
                   class="btn-primary text-xs py-2 px-4">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    Hire Me
                </a>
            </div>

            {{-- Mobile burger --}}
            <button @click="open = !open"
                    class="lg:hidden p-2 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-colors">
                <i x-show="!open" data-lucide="menu" class="w-5 h-5"></i>
                <i x-show="open"  data-lucide="x"    class="w-5 h-5"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden border-t border-white/10"
         style="background: rgba(2,6,23,0.97); backdrop-filter: blur(20px);">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
            @foreach([
                ['#about',       'About',        'user'],
                ['#skills',      'Skills',       'code-2'],
                ['#portfolio',   'Portfolio',    'briefcase'],
                ['#experience',  'Experience',   'clock'],
                ['#services',    'Services',     'zap'],
                ['#testimonials','Testimonials', 'message-square'],
                ['#contact',     'Contact',      'mail'],
            ] as [$href, $label, $icon])
                <a href="{{ $href }}"
                   @click="open = false"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-400 hover:text-white hover:bg-white/5 transition-all duration-200 text-sm font-medium">
                    <i data-lucide="{{ $icon }}" class="w-4 h-4 text-primary-400"></i>
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</nav>
