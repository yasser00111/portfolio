<section id="testimonials" class="relative py-24 lg:py-32 overflow-hidden">

    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse at 50% 100%,rgba(59,130,246,0.08) 0%,transparent 60%);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-label">
                <i data-lucide="message-square" class="w-3.5 h-3.5"></i>
                Testimonials
            </span>
            <h2 class="section-heading mt-4 text-white">
                What They <span class="gradient-text">Say</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Pendapat dari klien dan rekan kerja yang pernah berkolaborasi
            </p>
        </div>

        {{-- Swiper --}}
        <div class="testimonial-swiper swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper pb-12">
                @foreach($testimonials as $testimonial)
                <div class="swiper-slide" style="width: 360px;">
                    <div class="glass-card p-6 rounded-2xl h-full flex flex-col mx-2">

                        {{-- Rating --}}
                        <div class="flex items-center gap-1 mb-4">
                            @for($i = 1; $i <= 5; $i++)
                            <svg class="w-4 h-4 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-700' }}"
                                 fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endfor
                        </div>

                        {{-- Quote icon --}}
                        <div class="mb-4 text-primary-400 opacity-50">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11.192 15.757c0-.88-.23-1.618-.69-2.217-.326-.412-.768-.683-1.327-.812-.55-.128-1.07-.137-1.54-.028-.16-.95.1-1.956.76-3.022.66-1.065 1.515-1.867 2.558-2.403L9.373 5c-.8.396-1.56.898-2.26 1.505-.71.607-1.34 1.305-1.9 2.094s-.98 1.68-1.25 2.69-.346 2.04-.217 3.1c.168 1.4.62 2.52 1.356 3.35.735.84 1.652 1.26 2.748 1.26.965 0 1.766-.29 2.4-.878.628-.576.94-1.365.94-2.368l.002.003zm9.124 0c0-.88-.23-1.618-.69-2.217-.326-.42-.77-.692-1.327-.817-.56-.124-1.074-.13-1.54-.022-.16-.95.09-1.956.76-3.022.66-1.065 1.515-1.867 2.558-2.403L18.49 5c-.8.396-1.555.898-2.26 1.505-.708.607-1.34 1.305-1.894 2.094-.556.79-.97 1.68-1.24 2.69-.273 1-.345 2.04-.217 3.1.168 1.4.62 2.52 1.356 3.35.735.84 1.652 1.26 2.748 1.26.965 0 1.766-.29 2.4-.878.628-.576.94-1.365.94-2.368l.002.003z"/>
                            </svg>
                        </div>

                        {{-- Content --}}
                        <p class="text-gray-400 text-sm leading-relaxed flex-1 mb-6">
                            "{{ $testimonial->content }}"
                        </p>

                        {{-- Author --}}
                        <div class="flex items-center gap-3 pt-4 border-t border-white/5">
                            @if($testimonial->avatar)
                                <img src="{{ asset('storage/'.$testimonial->avatar) }}"
                                     alt="{{ $testimonial->name }}"
                                     class="w-10 h-10 rounded-full object-cover">
                            @else
                                <div class="w-10 h-10 rounded-full bg-primary-500/20 border border-primary-500/30 flex items-center justify-center">
                                    <span class="text-primary-300 text-sm font-bold">
                                        {{ strtoupper(substr($testimonial->name, 0, 2)) }}
                                    </span>
                                </div>
                            @endif
                            <div>
                                <div class="text-white text-sm font-semibold">{{ $testimonial->name }}</div>
                                <div class="text-gray-500 text-xs">{{ $testimonial->position }}, {{ $testimonial->company }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
