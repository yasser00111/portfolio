<section id="contact" class="relative py-24 lg:py-32 overflow-hidden">

    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse at 50% 0%,rgba(59,130,246,0.08) 0%,transparent 60%);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-label">
                <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                Contact
            </span>
            <h2 class="section-heading mt-4 text-white">
                Get In <span class="gradient-text">Touch</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Punya project atau butuh bantuan teknis? Jangan ragu untuk menghubungi saya
            </p>
        </div>

        <div class="grid lg:grid-cols-5 gap-12">

            {{-- LEFT: Info --}}
            <div class="lg:col-span-2 space-y-8" data-aos="fade-right">

                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'mail',          'label' => 'Email',     'value' => $settings['owner_email'] ?? 'yasser@yasser.dev', 'href' => 'mailto:'.($settings['owner_email'] ?? 'yasser@yasser.dev'), 'color' => 'text-blue-400 bg-blue-500/10'],
                        ['icon' => 'message-circle','label' => 'WhatsApp',  'value' => 'Chat via WhatsApp',                             'href' => 'https://wa.me/'.($settings['whatsapp_number'] ?? ''), 'color' => 'text-emerald-400 bg-emerald-500/10'],
                        ['icon' => 'github',        'label' => 'GitHub',    'value' => 'github.com/yasser00111',                        'href' => $settings['github_url'] ?? '#', 'color' => 'text-gray-300 bg-gray-500/10'],
                        ['icon' => 'linkedin',      'label' => 'LinkedIn',  'value' => 'linkedin.com/in/muhammad-yasser',               'href' => $settings['linkedin_url'] ?? '#', 'color' => 'text-blue-400 bg-blue-500/10'],
                        ['icon' => 'map-pin',       'label' => 'Location',  'value' => $settings['owner_location'] ?? 'Indonesia',      'href' => null, 'color' => 'text-red-400 bg-red-500/10'],
                    ] as $info)
                    <a @if($info['href']) href="{{ $info['href'] }}" target="_blank" @endif
                       class="flex items-center gap-4 glass-card p-4 rounded-xl group hover:border-primary-500/30 transition-all duration-300 {{ $info['href'] ? 'hover:-translate-y-0.5' : '' }}">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0 {{ $info['color'] }}">
                            <i data-lucide="{{ $info['icon'] }}" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <div class="text-gray-500 text-xs">{{ $info['label'] }}</div>
                            <div class="text-gray-200 text-sm font-medium">{{ $info['value'] }}</div>
                        </div>
                        @if($info['href'])
                        <i data-lucide="arrow-right" class="w-4 h-4 text-gray-600 ml-auto group-hover:text-primary-400 group-hover:translate-x-1 transition-all duration-300"></i>
                        @endif
                    </a>
                    @endforeach
                </div>

                {{-- Availability card --}}
                <div class="glass-card p-5 rounded-2xl border border-emerald-500/20">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-emerald-400 font-semibold text-sm">Available for Work</span>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Saat ini saya terbuka untuk proyek freelance, kolaborasi, dan peluang kerja baru.
                        Biasanya merespons dalam 24 jam.
                    </p>
                </div>
            </div>

            {{-- RIGHT: Form --}}
            <div class="lg:col-span-3" data-aos="fade-left">
                <div class="glass-card p-8 rounded-3xl">
                    <h3 class="text-white font-bold text-xl mb-6">Kirim Pesan</h3>

                    @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm flex items-center gap-2">
                        <i data-lucide="check-circle" class="w-4 h-4"></i>
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" id="contactForm"
                          x-data="{ loading: false }"
                          @submit="loading = true">
                        @csrf

                        <div class="grid sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="text-gray-400 text-xs font-semibold uppercase tracking-wider mb-2 block">
                                    Nama Lengkap *
                                </label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                       placeholder="Muhammad Yasser"
                                       class="form-input @error('name') border-red-500/50 @enderror">
                                @error('name')
                                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-400 text-xs font-semibold uppercase tracking-wider mb-2 block">
                                    Email Address *
                                </label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                       placeholder="email@example.com"
                                       class="form-input @error('email') border-red-500/50 @enderror">
                                @error('email')
                                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-400 text-xs font-semibold uppercase tracking-wider mb-2 block">
                                Subject *
                            </label>
                            <input type="text" name="subject" value="{{ old('subject') }}"
                                   placeholder="Project Inquiry / Kolaborasi / Konsultasi"
                                   class="form-input @error('subject') border-red-500/50 @enderror">
                            @error('subject')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="text-gray-400 text-xs font-semibold uppercase tracking-wider mb-2 block">
                                Pesan *
                            </label>
                            <textarea name="message" rows="5"
                                      placeholder="Ceritakan kebutuhan project atau pertanyaan Anda..."
                                      class="form-input resize-none @error('message') border-red-500/50 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                                class="btn-primary w-full justify-center relative overflow-hidden"
                                :disabled="loading">
                            <span x-show="!loading" class="flex items-center gap-2">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                Kirim Pesan
                            </span>
                            <span x-show="loading" class="flex items-center gap-2">
                                <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                </svg>
                                Sending...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
