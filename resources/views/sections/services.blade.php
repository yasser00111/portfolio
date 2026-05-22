<section id="services" class="relative py-24 lg:py-32 overflow-hidden">

    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse at 50% 0%,rgba(139,92,246,0.08) 0%,transparent 60%);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-label">
                <i data-lucide="zap" class="w-3.5 h-3.5"></i>
                Services
            </span>
            <h2 class="section-heading mt-4 text-white">
                What I <span class="gradient-text">Offer</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Layanan profesional yang dapat saya berikan untuk kebutuhan teknologi dan engineering Anda
            </p>
        </div>

        {{-- Web Development --}}
        <div class="mb-16">
            <div class="flex items-center gap-3 mb-8" data-aos="fade-right">
                <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center">
                    <i data-lucide="code-2" class="w-4 h-4 text-blue-400"></i>
                </div>
                <h3 class="text-white font-bold text-xl">Web Development</h3>
                <div class="flex-1 h-px bg-white/5"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($webServices as $service)
                <div class="glass-card-hover p-6 rounded-2xl"
                     data-aos="fade-up"
                     data-aos-delay="{{ $loop->index * 80 }}">
                    <div class="w-12 h-12 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center mb-5">
                        <i data-lucide="{{ $service->icon }}" class="w-6 h-6 text-blue-400"></i>
                    </div>
                    <h4 class="text-white font-bold mb-2">{{ $service->title }}</h4>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4">{{ $service->description }}</p>
                    @if($service->features)
                    <ul class="space-y-1.5">
                        @foreach($service->features as $feat)
                        <li class="flex items-center gap-2 text-gray-400 text-xs">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        {{-- Engineering Services --}}
        <div>
            <div class="flex items-center gap-3 mb-8" data-aos="fade-right">
                <div class="w-8 h-8 rounded-lg bg-cyan-500/20 flex items-center justify-center">
                    <i data-lucide="wifi" class="w-4 h-4 text-cyan-400"></i>
                </div>
                <h3 class="text-white font-bold text-xl">Engineering Services</h3>
                <div class="flex-1 h-px bg-white/5"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($engServices as $service)
                <div class="glass-card-hover p-6 rounded-2xl"
                     data-aos="fade-up"
                     data-aos-delay="{{ $loop->index * 80 }}">
                    <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center mb-5">
                        <i data-lucide="{{ $service->icon }}" class="w-6 h-6 text-cyan-400"></i>
                    </div>
                    <h4 class="text-white font-bold mb-2">{{ $service->title }}</h4>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4">{{ $service->description }}</p>
                    @if($service->features)
                    <ul class="space-y-1.5">
                        @foreach(array_slice($service->features, 0, 3) as $feat)
                        <li class="flex items-center gap-2 text-gray-400 text-xs">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 flex-shrink-0"></span>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        {{-- CTA Banner --}}
        <div class="mt-16 glass-card p-8 md:p-12 rounded-3xl text-center relative overflow-hidden" data-aos="fade-up">
            <div class="absolute inset-0 bg-grid opacity-20 pointer-events-none"></div>
            <div class="relative z-10">
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">
                    Siap Untuk Berkolaborasi?
                </h3>
                <p class="text-gray-400 mb-8 max-w-xl mx-auto">
                    Hubungi saya untuk mendiskusikan kebutuhan project atau layanan engineering Anda.
                    Saya siap memberikan solusi terbaik.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#contact" class="btn-primary">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        Start a Project
                    </a>
                    <a href="{{ $settings['whatsapp_number'] ? 'https://wa.me/'.$settings['whatsapp_number'] : '#' }}"
                       target="_blank" class="btn-outline">
                        <i data-lucide="message-circle" class="w-4 h-4"></i>
                        WhatsApp Me
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
