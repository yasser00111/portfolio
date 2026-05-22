@extends('layouts.app')

@section('title', ($settings['site_name'] ?? 'Muhammad Yasser') . ' - Portfolio')
@section('description', $settings['meta_description'] ?? '')
@section('keywords', $settings['meta_keywords'] ?? '')

@section('content')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.skills')
    @include('sections.portfolio')
    @include('sections.experience')
    @include('sections.services')
    @include('sections.testimonials')
    @include('sections.contact')
@endsection
