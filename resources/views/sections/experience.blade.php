<section id="experience" class="relative py-24 lg:py-32 overflow-hidden">

    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse at 100% 50%,rgba(59,130,246,0.06) 0%,transparent 60%);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-label">
                <i data-lucide="clock" class="w-3.5 h-3.5"></i>
                Experience
            </span>
            <h2 class="section-heading mt-4 text-white">
                Work <span class="gradient-text">Experience</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Perjalanan karier profesional di bidang teknologi dan engineering
            </p>
        </div>

        {{-- Timeline --}}
        <div class="relative max-w-4xl mx-auto">

            {{-- Center line --}}
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px -translate-x-1/2"
                 style="background:linear-gradient(to bottom,transparent,rgba(59,130,246,0.5),rgba(0,212,255,0.5),transparent);"></div>

            @foreach($experiences as $exp)
            <div class="relative mb-12 last:mb-0" data-aos="{{ $loop->even ? 'fade-right' : 'fade-left' }}">
                <div class="md:grid md:grid-cols-2 md:gap-12 items-center">

                    {{-- Content --}}
                    <div class="{{ $loop->even ? 'md:col-start-1 md:text-right' : 'md:col-start-2' }}">
                        <div class="glass-card-hover p-6 rounded-2xl">

                            {{-- Header --}}
                            <div class="flex items-start justify-between gap-4 mb-4 {{ $loop->even ? 'flex-row-reverse' : '' }}">
                                <div>
                                    <h3 class="text-white font-bold text-lg leading-tight">{{ $exp->title }}</h3>
                                    <p class="text-primary-400 font-semibold text-sm mt-0.5">{{ $exp->company }}</p>
                                </div>
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-primary-500/20 flex items-center justify-center">
                                    @if(str_contains(strtolower($exp->title), 'eos') || str_contains(strtolower($exp->title), 'engineer'))
                                        <i data-lucide="wifi" class="w-5 h-5 text-cyan-400"></i>
                                    @else
                                        <i data-lucide="code-2" class="w-5 h-5 text-blue-400"></i>
                                    @endif
                                </div>
                            </div>

                            {{-- Meta --}}
                            <div class="flex flex-wrap gap-2 mb-4 {{ $loop->even ? 'justify-end' : '' }}">
                                <span class="flex items-center gap-1 text-gray-500 text-xs">
                                    <i data-lucide="calendar" class="w-3 h-3"></i>
                                    {{ $exp->duration }}
                                </span>
                                @if($exp->location)
                                <span class="flex items-center gap-1 text-gray-500 text-xs">
                                    <i data-lucide="map-pin" class="w-3 h-3"></i>
                                    {{ $exp->location }}
                                </span>
                                @endif
                                <span class="px-2 py-0.5 rounded text-xs
                                    {{ $exp->is_current ? 'bg-emerald-500/20 text-emerald-400' : 'bg-gray-700 text-gray-400' }}">
                                    {{ $exp->is_current ? '● Active' : ucfirst($exp->type) }}
                                </span>
                            </div>

                            <p class="text-gray-400 text-sm leading-relaxed mb-4">{{ $exp->description }}</p>

                            {{-- Responsibilities --}}
                            @if($exp->responsibilities)
                            <ul class="space-y-1.5 mb-4">
                                @foreach(array_slice($exp->responsibilities, 0, 4) as $resp)
                                <li class="flex items-start gap-2 text-sm text-gray-500 {{ $loop->even ? 'justify-end flex-row-reverse' : '' }}">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-primary-500 flex-shrink-0 mt-0.5"></i>
                                    <span>{{ $resp }}</span>
                                </li>
                                @endforeach
                            </ul>
                            @endif

                            {{-- Tech tags --}}
                            @if($exp->tech_used)
                            <div class="flex flex-wrap gap-1.5 {{ $loop->even ? 'justify-end' : '' }}">
                                @foreach($exp->tech_used as $tech)
                                <span class="tech-badge text-xs">{{ $tech }}</span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>

                    {{-- Timeline dot (center, desktop) --}}
                    <div class="hidden md:block absolute left-1/2 top-6 -translate-x-1/2">
                        <div class="timeline-dot"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
