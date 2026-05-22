<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>@yield('title', config('app.name', 'Muhammad Yasser - Portfolio'))</title>
    <meta name="description" content="@yield('description', $settings['meta_description'] ?? 'Muhammad Yasser - Full Stack Web Developer & Engineering On Site Telkom')">
    <meta name="keywords" content="@yield('keywords', $settings['meta_keywords'] ?? 'Muhammad Yasser, Laravel Developer, EOS Telkom')">
    <meta name="author" content="Muhammad Yasser">
    <meta name="robots" content="index, follow">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'Muhammad Yasser - Portfolio')">
    <meta property="og:description" content="@yield('description', 'Full Stack Web Developer & EOS Telkom')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Muhammad Yasser - Portfolio')">
    <meta name="twitter:description" content="@yield('description', 'Full Stack Web Developer & EOS Telkom')">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Lucide Icons (CDN) --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>

<body class="bg-dark-900 text-gray-100 overflow-x-hidden">

    {{-- Background grid --}}
    <div class="fixed inset-0 bg-grid opacity-40 pointer-events-none z-0"></div>

    {{-- Noise overlay --}}
    <div class="fixed inset-0 pointer-events-none z-0 opacity-20"
         style="background-image:url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22n%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.9%22 numOctaves=%224%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.4%22/%3E%3C/svg%3E');">
    </div>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Lucide init --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) lucide.createIcons();
        });
    </script>

    @stack('scripts')
</body>
</html>
