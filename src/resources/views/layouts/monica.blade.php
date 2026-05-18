<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('meta_description', 'Ramsay - Personal Portfolio')">
    <title>@yield('title', 'Ramsay')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/monica.css') }}">

    @stack('styles')
</head>
<body>

    <!-- ============================================================
         HEADER
    ============================================================ -->
    <header class="s-header">
        <div class="header-inner">

            <!-- Logo -->
            <div class="header-logo">
                <a href="{{ url('/') }}">Ramsay</a>
            </div>

            <!-- Mobile toggle -->
            <button class="header-menu-toggle" aria-label="Open menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navigation -->
            <nav class="header-nav">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/#about') }}">About</a></li>
                    <li><a href="{{ url('/portofolio') }}">Project</a></li>
                    <li><a href="{{ url('/#contact') }}">Kontak</a></li>
                </ul>
            </nav>

        </div><!-- /header-inner -->
    </header><!-- /s-header -->


    <!-- ============================================================
         PAGE CONTENT
    ============================================================ -->
    @yield('content')


    <!-- ============================================================
         FOOTER
    ============================================================ -->
    <footer class="s-footer">
        <div class="footer-inner">

            <div class="footer-top">

                <!-- About column -->
                <div class="footer-about">
                    <a href="{{ url('/') }}" class="footer-logo">Ramsay Abelson</a>
                    <p>
                        Data science, machine learning, dan visualisasi data untuk membantu
                        mengubah data mentah menjadi insight yang bisa dipakai.
                    </p>
                </div>

                <!-- Links column -->
                <div class="footer-links">
                    <h4>Site Links</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/#about') }}">About</a></li>
                        <li><a href="{{ url('/portofolio') }}">Project</a></li>
                        <li><a href="{{ url('/#contact') }}">Kontak</a></li>
                    </ul>
                </div>

                <!-- Newsletter column -->
                <div class="footer-newsletter">
                    <h4>Contact</h4>
                    <p>
                        WhatsApp: <a href="https://wa.me/6283897376682" target="_blank" rel="noopener">083897376682</a><br>
                        Email: <a href="mailto:ramsayabelson150@gmail.com">ramsayabelson150@gmail.com</a>
                    </p>

                </div>

            </div><!-- /footer-top -->

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Ramsay Abelson. Portofolio Data Science &amp; Machine Learning.</p>
            </div><!-- /footer-bottom -->

        </div><!-- /footer-inner -->
    </footer><!-- /s-footer -->


    <!-- Back to top -->
    <a href="#top" class="back-to-top" aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
        </svg>
    </a>


    <!-- Main JS -->
    <script src="{{ asset('js/monica.js') }}"></script>

    @stack('scripts')
</body>
</html>