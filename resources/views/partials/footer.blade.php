<footer class="relative border-t border-white/5 overflow-hidden">

    {{-- Top accent --}}
    <div class="absolute top-0 left-0 right-0 h-px"
         style="background:linear-gradient(90deg,transparent,rgba(59,130,246,0.5),transparent);"></div>

    <div class="absolute inset-0 bg-grid opacity-20 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Main footer --}}
        <div class="py-16 grid sm:grid-cols-2 lg:grid-cols-4 gap-12">

            {{-- Brand --}}
            <div class="lg:col-span-2 space-y-5">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-primary-600 flex items-center justify-center shadow-neon">
                        <span class="text-white font-display font-bold">MY</span>
                    </div>
                    <div>
                        <div class="text-white font-semibold">Muhammad Yasser</div>
                        <div class="text-primary-400 text-xs font-mono">Full Stack Dev & EOS Telkom</div>
                    </div>
                </div>

                <p class="text-gray-500 text-sm leading-relaxed max-w-sm">
                    Profesional IT dengan keahlian ganda dalam pengembangan aplikasi web modern
                    berbasis Laravel dan operational engineering infrastruktur jaringan enterprise.
                </p>

                {{-- Tech stack badges --}}
                <div>
                    <p class="text-gray-600 text-xs uppercase tracking-widest mb-3">Built with</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Laravel 11', 'Tailwind CSS', 'Alpine.js', 'Filament', 'Vite'] as $tech)
                        <span class="text-xs px-2 py-1 rounded-md bg-white/5 text-gray-500 border border-white/5">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>

                {{-- Social --}}
                <div class="flex items-center gap-3">
                    @foreach([
                        ['github',          $settings['github_url'] ?? '#',  'GitHub'],
                        ['linkedin',        $settings['linkedin_url'] ?? '#', 'LinkedIn'],
                        ['message-circle',  $settings['whatsapp_number'] ? 'https://wa.me/'.$settings['whatsapp_number'] : '#', 'WhatsApp'],
                        ['mail',            'mailto:'.($settings['owner_email'] ?? ''), 'Email'],
                    ] as [$icon, $href, $label])
                    <a href="{{ $href }}" target="_blank" title="{{ $label }}"
                       class="w-9 h-9 rounded-lg glass-card flex items-center justify-center text-gray-500 hover:text-white hover:border-primary-500/40 hover:shadow-neon transition-all duration-300">
                        <i data-lucide="{{ $icon }}" class="w-4 h-4"></i>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-white font-semibold mb-5 text-sm uppercase tracking-wider">Navigation</h4>
                <ul class="space-y-3">
                    @foreach([
                        ['#about',       'About Me'],
                        ['#skills',      'Skills'],
                        ['#portfolio',   'Portfolio'],
                        ['#experience',  'Experience'],
                        ['#services',    'Services'],
                        ['#testimonials','Testimonials'],
                        ['#contact',     'Contact'],
                    ] as [$href, $label])
                    <li>
                        <a href="{{ $href }}" class="text-gray-500 hover:text-primary-400 text-sm transition-colors duration-200 flex items-center gap-2 group">
                            <i data-lucide="chevron-right" class="w-3 h-3 group-hover:translate-x-1 transition-transform"></i>
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="text-white font-semibold mb-5 text-sm uppercase tracking-wider">Services</h4>
                <ul class="space-y-3">
                    @foreach([
                        'Laravel Development',
                        'REST API',
                        'Dashboard System',
                        'Network Monitoring',
                        'Infrastructure Support',
                        'Helpdesk / EOS',
                        'Server Maintenance',
                    ] as $service)
                    <li>
                        <span class="text-gray-500 text-sm flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary-500/60 flex-shrink-0"></span>
                            {{ $service }}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="py-6 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-gray-600 text-xs font-mono">
                © {{ date('Y') }} Muhammad Yasser. All rights reserved.
            </p>
            <div class="flex items-center gap-4">
                <span class="text-gray-700 text-xs">Made with</span>
                <div class="flex items-center gap-2">
                    <svg class="w-3 h-3 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402z"/>
                    </svg>
                    <span class="text-gray-600 text-xs">in Indonesia</span>
                </div>
                <a href="{{ route('filament.admin.pages.dashboard') }}"
                   class="text-gray-700 hover:text-primary-400 text-xs transition-colors">
                    Admin
                </a>
            </div>
        </div>
    </div>
</footer>
