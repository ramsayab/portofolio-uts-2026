@extends('layouts.monica')

@section('title', 'Ramsay Abelson - Portofolio')
@section('meta_description', 'Portofolio data science dan machine learning Ramsay Abelson.')

@section('content')

<!-- ================================================================
     PORTOFOLIO
================================================================ -->
<section class="s-services" id="top">
    <div class="services-inner">

        <div class="services-head">
            <div>
                <p class="section-label reveal">Portofolio</p>
                <h2 class="reveal reveal-delay-1">Selected work<br>in data science.</h2>
            </div>
            <p class="reveal reveal-delay-2">
                Beberapa proyek yang berfokus pada analisis data, machine learning,
                dan pembuatan solusi berbasis insight.
            </p>
        </div>

        <div class="services-grid">

            <div class="service-item reveal">
                <h3>Predictive Analytics</h3>
                <p>Membangun model prediksi untuk membantu pengambilan keputusan berbasis data.</p>
            </div>

            <div class="service-item reveal reveal-delay-1">
                <h3>Machine Learning</h3>
                <p>Mengembangkan pipeline machine learning dari eksplorasi data sampai evaluasi model.</p>
            </div>

            <div class="service-item reveal reveal-delay-2">
                <h3>Data Visualization</h3>
                <p>Menampilkan insight dengan visual yang jelas agar data lebih mudah dipahami.</p>
            </div>

            <div class="service-item reveal reveal-delay-3">
                <h3>Research &amp; Experimentation</h3>
                <p>Eksperimen model dan analisis untuk menemukan pendekatan yang paling efektif.</p>
            </div>

        </div><!-- /services-grid -->

        <div class="services-cta reveal">
            <a href="{{ url('/#contact') }}" class="btn-primary">Lihat Kontak</a>
        </div>

    </div>
</section><!-- /s-services -->

@endsection