@extends('layouts.app')

@section('title', $project->title . ' - Portfolio | Muhammad Yasser')
@section('description', $project->description)

@section('content')
<div class="min-h-screen pt-24 pb-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-8">
            <a href="{{ route('home') }}" class="hover:text-primary-400 transition-colors">Home</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <a href="{{ route('home') }}#portfolio" class="hover:text-primary-400 transition-colors">Portfolio</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <span class="text-gray-300">{{ $project->title }}</span>
        </div>

        <div class="glass-card rounded-3xl overflow-hidden">

            {{-- Header image --}}
            @if($project->thumbnail)
            <div class="h-64 md:h-80 overflow-hidden">
                <img src="{{ asset('storage/'.$project->thumbnail) }}"
                     alt="{{ $project->title }}"
                     class="w-full h-full object-cover">
            </div>
            @else
            <div class="h-48 bg-grid flex items-center justify-center"
                 style="background:linear-gradient(135deg,rgba(30,64,175,0.4),rgba(17,24,39,0.9));">
                <i data-lucide="code-2" class="w-16 h-16 text-primary-400 opacity-30"></i>
            </div>
            @endif

            <div class="p-8 md:p-12">
                {{-- Status & category --}}
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tech-badge">{{ ucwords(str_replace('-', ' ', $project->category)) }}</span>
                    <span class="px-3 py-1 rounded-full text-xs font-semibold
                        {{ $project->status === 'completed' ? 'bg-emerald-500/20 text-emerald-400 border border-emerald-500/30' : 'bg-blue-500/20 text-blue-400 border border-blue-500/30' }}">
                        {{ ucwords(str_replace('-', ' ', $project->status)) }}
                    </span>
                </div>

                <h1 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">{{ $project->title }}</h1>
                <p class="text-gray-400 text-lg leading-relaxed mb-8">
                    {{ $project->long_description ?? $project->description }}
                </p>

                {{-- Tech stack --}}
                @if($project->tech_stack)
                <div class="mb-8">
                    <h3 class="text-white font-semibold mb-3 text-sm uppercase tracking-wider">Tech Stack</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project->tech_stack as $tech)
                        <span class="tech-badge">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Action buttons --}}
                <div class="flex flex-wrap gap-4">
                    @if($project->live_url)
                    <a href="{{ $project->live_url }}" target="_blank" class="btn-primary">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        Live Demo
                    </a>
                    @endif
                    @if($project->github_url)
                    <a href="{{ $project->github_url }}" target="_blank" class="btn-outline">
                        <i data-lucide="github" class="w-4 h-4"></i>
                        View on GitHub
                    </a>
                    @endif
                    <a href="{{ route('home') }}#portfolio" class="btn-ghost">
                        <i data-lucide="arrow-left" class="w-4 h-4"></i>
                        Back to Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
