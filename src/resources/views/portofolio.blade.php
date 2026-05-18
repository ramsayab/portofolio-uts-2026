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
            @forelse ($portofolios as $index => $portofolio)
                <div class="service-item reveal {{ $index === 1 ? 'reveal-delay-1' : '' }} {{ $index === 2 ? 'reveal-delay-2' : '' }} {{ $index >= 3 ? 'reveal-delay-3' : '' }}">
                    <h3>{{ $portofolio->nama_project }}</h3>
                    <p>{{ $portofolio->deskripsi_project }}</p>
                    <div style="margin-top: 1.5rem;">
                        <a href="{{ $portofolio->link_github }}" target="_blank" rel="noopener" class="btn-primary">Lihat GitHub</a>
                    </div>
                </div>
            @empty
                <div class="service-item reveal">
                    <h3>Belum ada project</h3>
                    <p>Data project belum tersedia di database. Tambahkan dulu lewat admin agar tampil di sini.</p>
                </div>
            @endforelse

        </div><!-- /services-grid -->

        <div class="services-cta reveal">
            <a href="{{ url('/#contact') }}" class="btn-primary">Lihat Kontak</a>
        </div>

    </div>
</section><!-- /s-services -->

@endsection