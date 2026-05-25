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

        @if($errors->any())
            <div style="background: #ff4444; color: #fff; padding: 1rem; border-radius: 8px; margin: 2rem 0; text-align: center;">
                <strong>Terjadi kesalahan!</strong>
                <ul style="margin-top: 0.5rem; list-style: none; padding: 0;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div style="background: #44aa44; color: #fff; padding: 1rem; border-radius: 8px; margin: 2rem 0; text-align: center;">
                <strong>✓ {{ session('success') }}</strong>
            </div>
        @endif

        <form method="POST" action="{{ route('contact') }}" class="contact-form reveal reveal-delay-2">
            @csrf
            
            <div class="contact-grid">
                <div class="contact-field">
                    <label for="name" class="contact-label">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Siapa nama Anda?" required class="contact-input">
                    @error('name')
                        <p class="contact-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="contact-field">
                    <label for="email" class="contact-label">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email Anda" required class="contact-input">
                    @error('email')
                        <p class="contact-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="contact-field contact-field--message">
                <label for="message" class="contact-label">Pesan</label>
                <textarea id="message" name="message" rows="8" placeholder="Ceritakan tentang project atau topik yang ingin Anda diskusikan..." required class="contact-input contact-textarea">{{ old('message') }}</textarea>
                @error('message')
                    <p class="contact-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="contact-submit">
                Kirim Pesan Sekarang
            </button>
        </form>

        <div class="cta-actions reveal reveal-delay-3" style="margin-top: 3rem;">
            <p style="color: #AAA; margin-bottom: 1.5rem; text-align: center; font-size: 1.05rem;">{{ $dashboard->contact_direct_label }}</p>
            <div style="display: flex; justify-content: center; gap: 1.5rem;">
                <a href="{{ $dashboard->contact_whatsapp_url }}" class="btn-cta" target="_blank" rel="noopener">{{ $dashboard->contact_whatsapp_label }}</a>
                <a href="{{ $dashboard->contact_email_url }}" class="btn-cta">{{ $dashboard->contact_email_label }}</a>
            </div>
        </div>
    </div>

    <style>
        .contact-section .cta-inner {
            display: block;
        }

        .contact-section .cta-content {
            max-width: 760px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-form {
            width: 100%;
            max-width: 980px;
            margin: 3rem auto 0;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .contact-field {
            margin-bottom: 0;
        }

        .contact-field--message {
            margin-bottom: 1.75rem;
        }

        .contact-label {
            display: block;
            margin-bottom: 0.7rem;
            font-weight: 700;
            color: #fff;
            font-size: 1rem;
        }

        .contact-input {
            width: 100%;
            min-height: 4.5rem;
            padding: 1.25rem 1.5rem;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 12px;
            color: #fff;
            font-family: inherit;
            font-size: 1.05rem;
            line-height: 1.5;
            transition: border-color 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
            outline: none;
        }

        .contact-input:focus {
            background: rgba(255, 255, 255, 0.09);
            border-color: rgba(100, 200, 255, 0.65);
            box-shadow: 0 0 0 4px rgba(100, 200, 255, 0.12);
        }

        .contact-textarea {
            min-height: 190px;
            resize: vertical;
        }

        .contact-submit {
            width: 100%;
            min-height: 4.6rem;
            padding: 1.2rem 2rem;
            background: linear-gradient(135deg, #7ad2ff 0%, #4aa8ff 100%);
            color: #06111f;
            font-weight: 800;
            font-size: 1.08rem;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            box-shadow: 0 10px 24px rgba(74, 168, 255, 0.24);
            transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
        }

        .contact-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 36px rgba(74, 168, 255, 0.42);
            filter: brightness(1.03);
        }

        .contact-submit:active {
            transform: translateY(0);
        }

        .contact-error {
            color: #ff8d8d;
            font-size: 0.95rem;
            margin-top: 0.6rem;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.35);
        }

        @media (max-width: 768px) {
            .contact-form {
                padding: 1.5rem;
                border-radius: 14px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }

            .contact-label {
                font-size: 1rem;
            }

            .contact-input {
                font-size: 1rem;
                min-height: 3.6rem;
            }

            .contact-textarea {
                min-height: 180px;
            }

            .contact-submit {
                padding: 1.15rem 1.5rem;
                font-size: 1.05rem;
            }
        }
    </style>
</section><!-- /s-cta -->

@endsection
