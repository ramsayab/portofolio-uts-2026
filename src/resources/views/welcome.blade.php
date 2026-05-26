@extends('layouts.monica')

@section('title', $dashboard->meta_title)
@section('meta_description', $dashboard->meta_description)

@section('content')

@php
    $techStackGroups = collect($dashboard->tech_stack_groups ?? []);
@endphp

<!-- ================================================================
     HERO / INTRO
================================================================ -->
<section class="s-intro" id="top">
    <div class="intro-bg"></div>

    <div class="intro-content">
        <p class="intro-pretitle reveal">{{ $dashboard->sapaan }}</p>

        <h1 class="reveal reveal-delay-1">
            {!! nl2br(e($dashboard->skill_singkat)) !!}
        </h1>

        <a href="#about" class="intro-scroll reveal reveal-delay-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 5v14M5 12l7 7 7-7"/>
            </svg>
            {{ $dashboard->hero_scroll_text }}
        </a>
    </div>
</section><!-- /s-intro -->


<!-- ================================================================
     ABOUT
================================================================ -->
<section class="s-about" id="about">
    <div class="about-inner">

        <div class="about-left">
            <p class="section-label reveal">{{ $dashboard->about_label }}</p>
            <h2 class="reveal reveal-delay-1">{{ $dashboard->about_me }}</h2>
            <p class="reveal reveal-delay-2">{{ $dashboard->deskripsi_about_me }}</p>
            <p class="reveal reveal-delay-2">{{ $dashboard->about_paragraph_two }}</p>
        </div><!-- /about-left -->

        <div class="about-right reveal reveal-delay-2" style="display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset($dashboard->img_src_link) }}" alt="{{ $dashboard->profile_image_alt }}" style="width: 100%; max-width: 400px; border-radius: 12px; object-fit: cover;">
        </div>

    </div>
</section><!-- /s-about -->


<!-- ================================================================
     TECH STACK
================================================================ -->
<section class="s-about" id="tech-stack" style="padding-top: 0;">
    <div class="about-inner">

        <div class="about-left">
            <p class="section-label reveal">{{ $dashboard->tech_stack_intro }}</p>
            <h2 class="reveal reveal-delay-1">{{ $dashboard->nama_tech_stack }}</h2>
        </div><!-- /about-left -->

        <div class="about-right reveal reveal-delay-2">
            @foreach($techStackGroups as $group)
                <div class="skill-group">
                    <p class="skill-group-title">{{ data_get($group, 'title') }}</p>
                    <div class="skill-grid">
                        @foreach(data_get($group, 'skills', []) as $skill)
                            <div class="skill-card">
                                <img src="{{ data_get($skill, 'icon') }}" alt="{{ data_get($skill, 'alt') }}" @if(data_get($skill, 'icon_class')) style="{{ data_get($skill, 'icon_class') }}" @endif>
                                <span>{{ data_get($skill, 'name') }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div style="margin-top: 4rem; padding: 3rem 2rem; border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.1); text-align: center; grid-column: 1 / -1;">
                <p class="reveal reveal-delay-3" style="font-size: 1.4rem; color: #AAA; margin-bottom: 2rem; line-height: 1.6;">
                    {{ $dashboard->tech_stack_cta_text }}
                </p>
                <a href="{{ $dashboard->tech_stack_cta_button_url }}" class="btn btn-white reveal reveal-delay-3" style="display: inline-block; padding: 1.5rem 4.5rem; background: #FFF; color: #000; text-decoration: none; font-weight: 700; font-size: 1.5rem; border-radius: 50px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2); letter-spacing: 0.5px;">
                    {{ $dashboard->tech_stack_cta_button_label }}
                </a>
            </div>
        </div>

    </div>
</section><!-- /s-tech-stack -->


<!-- ================================================================
     KONTAK
================================================================ -->
<section class="s-cta contact-section" id="contact">
    <div class="cta-inner">
        <div class="cta-content reveal">
            <h2>{{ $dashboard->contact_title }}</h2>
            <p>{{ $dashboard->contact_description }}</p>
        </div>

        <livewire:contact-form />

        <div class="cta-actions reveal reveal-delay-3" style="margin-top: 3rem;">
            <p style="color: #AAA; margin-bottom: 1.5rem; text-align: center; font-size: 1.05rem;">{{ $dashboard->contact_direct_label }}</p>
            <div style="display: flex; justify-content: center; gap: 1.5rem;">
                <a href="{{ $dashboard->contact_whatsapp_url }}" class="btn-cta" target="_blank" rel="noopener">{{ $dashboard->contact_whatsapp_label }}</a>
                <a href="{{ $dashboard->contact_email_url }}" class="btn-cta">{{ $dashboard->contact_email_label }}</a>
            </div>
        </div>
    </div>
</section><!-- /s-cta -->

@endsection
