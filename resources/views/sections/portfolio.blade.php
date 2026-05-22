<section id="portfolio" class="relative py-24 lg:py-32 overflow-hidden">

    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse at 0% 50%,rgba(139,92,246,0.06) 0%,transparent 60%);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="section-label">
                <i data-lucide="briefcase" class="w-3.5 h-3.5"></i>
                Portfolio
            </span>
            <h2 class="section-heading mt-4 text-white">
                Featured <span class="gradient-text">Projects</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Koleksi project terbaik yang menampilkan kemampuan pengembangan web dan sistem monitoring
            </p>
        </div>

        {{-- Filter tabs --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" data-aos-delay="100">
            @foreach([
                ['all',            'Semua',          'grid'],
                ['web-app',        'Web App',        'globe'],
                ['dashboard',      'Dashboard',      'layout-dashboard'],
                ['monitoring',     'Monitoring',     'activity'],
                ['backend-api',    'Backend API',    'code-2'],
                ['infrastructure', 'Infrastructure', 'server'],
            ] as [$filter, $label, $icon])
            <button data-filter="{{ $filter }}"
                    class="filter-tab flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium border border-white/10 text-gray-400 hover:text-white hover:border-primary-500/40 transition-all duration-300 {{ $filter === 'all' ? 'active' : '' }}">
                <i data-lucide="{{ $icon }}" class="w-3.5 h-3.5"></i>
                {{ $label }}
            </button>
            @endforeach
        </div>

        {{-- Project grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
            <div data-category="{{ $project->category }}"
                 data-aos="fade-up"
                 data-aos-delay="{{ ($loop->index % 3) * 100 }}"
                 class="glass-card rounded-2xl overflow-hidden group hover:border-primary-500/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-neon">

                {{-- Thumbnail --}}
                <div class="relative h-48 overflow-hidden">
                    @if($project->thumbnail)
                        <img src="{{ asset('storage/'.$project->thumbnail) }}"
                             alt="{{ $project->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    @else
                        <div class="w-full h-full flex items-center justify-center relative"
                             style="background:linear-gradient(135deg,rgba(30,64,175,0.5),rgba(17,24,39,0.8));">
                            {{-- Grid pattern --}}
                            <div class="absolute inset-0 bg-grid opacity-30"></div>
                            <div class="relative z-10 text-center">
                                <i data-lucide="{{ $project->category === 'monitoring' ? 'activity' : ($project->category === 'dashboard' ? 'layout-dashboard' : 'code-2') }}"
                                   class="w-12 h-12 text-primary-400 mx-auto mb-2"></i>
                                <p class="text-gray-500 text-xs">{{ $project->category }}</p>
                            </div>
                        </div>
                    @endif

                    {{-- Status badge --}}
                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 rounded-md text-xs font-semibold backdrop-blur-sm
                            {{ $project->status === 'completed' ? 'bg-emerald-500/20 text-emerald-300 border border-emerald-500/30' : '' }}
                            {{ $project->status === 'in-progress' ? 'bg-blue-500/20 text-blue-300 border border-blue-500/30' : '' }}
                            {{ $project->status === 'maintenance' ? 'bg-yellow-500/20 text-yellow-300 border border-yellow-500/30' : '' }}">
                            {{ ucwords(str_replace('-', ' ', $project->status)) }}
                        </span>
                    </div>

                    {{-- Featured badge --}}
                    @if($project->featured)
                    <div class="absolute top-3 right-3">
                        <span class="px-2 py-1 rounded-md text-xs font-semibold bg-primary-500/30 text-primary-300 border border-primary-500/40 backdrop-blur-sm">
                            ⭐ Featured
                        </span>
                    </div>
                    @endif
                </div>

                {{-- Content --}}
                <div class="p-5 space-y-4">
                    <div>
                        <h3 class="text-white font-bold text-base group-hover:text-primary-300 transition-colors duration-300">
                            {{ $project->title }}
                        </h3>
                        <p class="text-gray-500 text-sm mt-2 line-clamp-2 leading-relaxed">
                            {{ $project->description }}
                        </p>
                    </div>

                    {{-- Tech stack --}}
                    @if($project->tech_stack)
                    <div class="flex flex-wrap gap-1.5">
                        @foreach(array_slice($project->tech_stack, 0, 4) as $tech)
                        <span class="tech-badge text-xs">{{ $tech }}</span>
                        @endforeach
                        @if(count($project->tech_stack) > 4)
                        <span class="tech-badge text-xs">+{{ count($project->tech_stack) - 4 }}</span>
                        @endif
                    </div>
                    @endif

                    {{-- Buttons --}}
                    <div class="flex items-center gap-2 pt-2 border-t border-white/5">
                        @if($project->live_url)
                        <a href="{{ $project->live_url }}" target="_blank"
                           class="flex-1 flex items-center justify-center gap-1.5 py-2 rounded-lg text-xs font-medium
                                  bg-primary-600/80 hover:bg-primary-600 text-white transition-all duration-300">
                            <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                            Live Demo
                        </a>
                        @endif
                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank"
                           class="flex-1 flex items-center justify-center gap-1.5 py-2 rounded-lg text-xs font-medium
                                  border border-white/10 hover:border-white/20 text-gray-400 hover:text-white transition-all duration-300">
                            <i data-lucide="github" class="w-3.5 h-3.5"></i>
                            GitHub
                        </a>
                        @endif
                        <a href="{{ route('project.show', $project->slug) }}"
                           class="p-2 rounded-lg border border-white/10 hover:border-primary-500/40 text-gray-400 hover:text-primary-400 transition-all duration-300">
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- View all CTA --}}
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ $settings['github_url'] ?? '#' }}" target="_blank" class="btn-outline">
                <i data-lucide="github" class="w-4 h-4"></i>
                View All on GitHub
            </a>
        </div>
    </div>
</section>
