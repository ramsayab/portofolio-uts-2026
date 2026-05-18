@extends('layouts.monica')

@section('title', 'Ramsay Abelson - ML Engineer & Data Scientist')
@section('meta_description', 'ML Engineer passionate about building intelligent systems, deep learning, and data-driven solutions.')

@section('content')

<!-- ================================================================
     HERO / INTRO
================================================================ -->
<section class="s-intro" id="top">
    <div class="intro-bg"></div>

    <div class="intro-content">
        <p class="intro-pretitle reveal">Hello, I'm Ramsay Abelson</p>

        <h1 class="reveal reveal-delay-1">
            I create data-driven<br>
            solutions and machine<br>
            learning models that<br>
            deliver insights.
        </h1>

        <a href="#about" class="intro-scroll reveal reveal-delay-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 5v14M5 12l7 7 7-7"/>
            </svg>
            Scroll for more
        </a>
    </div>
</section><!-- /s-intro -->


<!-- ================================================================
     ABOUT
================================================================ -->
<section class="s-about" id="about">
    <div class="about-inner">

        <div class="about-left">
            <p class="section-label reveal">About Me</p>
            <h2 class="reveal reveal-delay-1">Machine learning engineer dengan passion untuk AI & data science.</h2>
            <p class="reveal reveal-delay-2">
                Saya adalah seorang ML engineer yang passionate dalam mengembangkan intelligent systems dan 
                model machine learning yang sophisticated. Sejak awal, saya fokus pada deep learning, data processing, 
                dan implementasi AI solutions yang praktis dan impactful di berbagai domain.
            </p>
            <p class="reveal reveal-delay-2">
                Passion saya adalah dalam mengubah raw data menjadi actionable intelligence melalui teknik machine learning 
                yang advanced, dan menciptakan model yang tidak hanya akurat tapi juga scalable dan efficient untuk production environment.
            </p>
        </div><!-- /about-left -->

        <div class="about-right reveal reveal-delay-2" style="display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('images/profile.jpg') }}" alt="Ramsay Abelson" style="width: 100%; max-width: 400px; border-radius: 12px; object-fit: cover;">
        </div>

    </div>
</section><!-- /s-about -->


<!-- ================================================================
     TECH STACK
================================================================ -->
<section class="s-about" id="tech-stack" style="padding-top: 0;">
    <div class="about-inner">

        <div class="about-left">
            <p class="section-label reveal">Tech Stack</p>
            <h2 class="reveal reveal-delay-1">Tech stack yang saya kuasai.</h2>
        </div><!-- /about-left -->

        <div class="about-right reveal reveal-delay-2">
            <div class="skill-group">
                <p class="skill-group-title">Core Tech</p>
                <div class="skill-grid">
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/python/3776AB" alt="Python">
                        <span>Python</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/cplusplus/00599C" alt="C++">
                        <span>C++</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/openjdk.svg" alt="Java">
                        <span>Java</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/php/777BB4" alt="PHP">
                        <span>PHP</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/laravel/FF2D20" alt="Laravel">
                        <span>Laravel</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/jupyter/F37626" alt="Jupyter">
                        <span>Jupyter</span>
                    </div>
                </div>
            </div>

            <div class="skill-group">
                <p class="skill-group-title">Machine Learning &amp; Deep Learning</p>
                <div class="skill-grid">
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/pytorch/EE4C2C" alt="PyTorch">
                        <span>PyTorch</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/tensorflow/FF6F00" alt="TensorFlow">
                        <span>TensorFlow</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/scikitlearn/F7931E" alt="scikit-learn">
                        <span>scikit-learn</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/pandas/150458" alt="pandas">
                        <span>pandas</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/numpy/013243" alt="NumPy">
                        <span>NumPy</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/opencv/5C3EE8" alt="OpenCV">
                        <span>OpenCV</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.simpleicons.org/keras/D00000" alt="Keras">
                        <span>Keras</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/xgboost.svg" alt="XGBoost" style="filter: invert(1);">
                        <span>XGBoost</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/Created_with_Matplotlib-logo.svg" alt="Matplotlib">
                        <span>Matplotlib</span>
                    </div>
                    <div class="skill-card">
                        <img src="https://raw.githubusercontent.com/mwaskom/seaborn/master/doc/_static/logo-wide-lightbg.svg" alt="Seaborn">
                        <span>Seaborn</span>
                    </div>
                </div>
            </div>

            <div style="margin-top: 4rem; padding: 3rem 2rem; border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.1); text-align: center; grid-column: 1 / -1;">
                <p class="reveal reveal-delay-3" style="font-size: 1.4rem; color: #AAA; margin-bottom: 2rem; line-height: 1.6;">
                    Ingin melihat project dan pengalaman saya dalam action?
                </p>
                <a href="/portofolio" class="btn btn-white reveal reveal-delay-3" style="display: inline-block; padding: 1.5rem 4.5rem; background: #FFF; color: #000; text-decoration: none; font-weight: 700; font-size: 1.5rem; border-radius: 50px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2); letter-spacing: 0.5px;">
                    → Lihat Project Saya ←
                </a>
            </div>
        </div>

    </div>
</section><!-- /s-tech-stack -->


<!-- ================================================================
     KONTAK
================================================================ -->
<section class="s-cta" id="contact">
    <div class="cta-inner">
        <div class="cta-content reveal">
            <h2>Hubungi saya untuk diskusi proyek.</h2>
            <p>Kalau kamu butuh bantuan data science, machine learning, atau analisis data,
               saya siap bantu.</p>
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

        <form method="POST" action="{{ route('contact') }}" class="contact-form reveal reveal-delay-2" style="max-width: 900px; margin: 2rem auto 0; background: linear-gradient(135deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.04) 100%); padding: 4rem; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);">
            @csrf
            
            <div style="margin-bottom: 2.5rem;">
                <label for="name" style="display: block; margin-bottom: 1rem; font-weight: 600; color: #FFF; font-size: 1.2rem;">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Siapa nama Anda?" required 
                    style="width: 100%; padding: 1.4rem 1.8rem; background: rgba(255, 255, 255, 0.08); border: 2px solid rgba(255, 255, 255, 0.15); border-radius: 14px; color: #FFF; font-family: inherit; font-size: 1.15rem; transition: all 0.3s ease;"
                    onfocus="this.style.background='rgba(255, 255, 255, 0.12)'; this.style.borderColor='rgba(100, 200, 255, 0.5)';"
                    onblur="this.style.background='rgba(255, 255, 255, 0.08)'; this.style.borderColor='rgba(255, 255, 255, 0.15)';">
                @error('name')
                    <p style="color: #ff6b6b; font-size: 1rem; margin-top: 0.6rem;">{{ $message }}</p>
                @enderror
            </div>

            <div style="margin-bottom: 2.5rem;">
                <label for="email" style="display: block; margin-bottom: 1rem; font-weight: 600; color: #FFF; font-size: 1.2rem;">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email Anda" required 
                    style="width: 100%; padding: 1.4rem 1.8rem; background: rgba(255, 255, 255, 0.08); border: 2px solid rgba(255, 255, 255, 0.15); border-radius: 14px; color: #FFF; font-family: inherit; font-size: 1.15rem; transition: all 0.3s ease;"
                    onfocus="this.style.background='rgba(255, 255, 255, 0.12)'; this.style.borderColor='rgba(100, 200, 255, 0.5)';"
                    onblur="this.style.background='rgba(255, 255, 255, 0.08)'; this.style.borderColor='rgba(255, 255, 255, 0.15)';">
                @error('email')
                    <p style="color: #ff6b6b; font-size: 1rem; margin-top: 0.6rem;">{{ $message }}</p>
                @enderror
            </div>

            <div style="margin-bottom: 3rem;">
                <label for="message" style="display: block; margin-bottom: 1rem; font-weight: 600; color: #FFF; font-size: 1.2rem;">Pesan</label>
                <textarea id="message" name="message" rows="10" placeholder="Ceritakan tentang project atau topik yang ingin Anda diskusikan..." required 
                    style="width: 100%; padding: 1.4rem 1.8rem; background: rgba(255, 255, 255, 0.08); border: 2px solid rgba(255, 255, 255, 0.15); border-radius: 14px; color: #FFF; font-family: inherit; font-size: 1.15rem; resize: vertical; transition: all 0.3s ease; line-height: 1.8;"
                    onfocus="this.style.background='rgba(255, 255, 255, 0.12)'; this.style.borderColor='rgba(100, 200, 255, 0.5)';"
                    onblur="this.style.background='rgba(255, 255, 255, 0.08)'; this.style.borderColor='rgba(255, 255, 255, 0.15)';">{{ old('message') }}</textarea>
                @error('message')
                    <p style="color: #ff6b6b; font-size: 1rem; margin-top: 0.6rem;">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" style="width: 100%; padding: 1.8rem 3rem; background: linear-gradient(135deg, #64c8ff 0%, #42a5f5 100%); color: #000; font-weight: 800; font-size: 1.3rem; border: none; border-radius: 14px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 6px 25px rgba(100, 200, 255, 0.4); letter-spacing: 0.5px;"
                onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 35px rgba(100, 200, 255, 0.6)';"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 25px rgba(100, 200, 255, 0.4)';">
                Kirim Pesan Sekarang
            </button>
        </form>

        <div class="cta-actions reveal reveal-delay-3" style="margin-top: 3rem;">
            <p style="color: #AAA; margin-bottom: 1.5rem; text-align: center; font-size: 1.05rem;">Atau hubungi saya langsung:</p>
            <div style="display: flex; justify-content: center; gap: 1.5rem;">
                <a href="https://wa.me/6283897376682" class="btn-cta" target="_blank" rel="noopener">WhatsApp</a>
                <a href="mailto:ramsayabelson150@gmail.com" class="btn-cta">Email</a>
            </div>
        </div>
    </div>

    <style>
        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.35);
        }
    </style>
</section><!-- /s-cta -->

@endsection