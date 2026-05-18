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

        <div class="services-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:1.5rem;">
            @forelse ($portofolios as $portofolio)
                <div class="service-card reveal" style="background: rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); padding:1.5rem; border-radius:12px; display:flex; gap:1rem; align-items:flex-start;">
                    <div style="width:72px; height:72px; background:linear-gradient(135deg,#7ad2ff,#4aa8ff); border-radius:8px; flex:0 0 72px; display:flex; align-items:center; justify-content:center; color:#06111f; font-weight:800;">PJ</div>
                    <div style="flex:1;">
                        <h3 style="margin:0 0 0.5rem 0; font-size:1.15rem;">{{ $portofolio->nama_project }}</h3>
                        <p style="margin:0 0 1rem 0; color:#cfcfcf;">{{ Str::limit($portofolio->deskripsi_project, 160) }}</p>
                        <div style="display:flex; gap:0.75rem;">
                            <a href="{{ $portofolio->link_github }}" target="_blank" rel="noopener" class="btn-primary" style="padding:0.6rem 1rem; border-radius:8px; background:#111827; color:#fff; text-decoration:none;">Lihat GitHub</a>
                            <a href="{{ url('/portofolio/'.$portofolio->id) }}" class="btn-secondary" style="padding:0.6rem 1rem; border-radius:8px; background:transparent; border:1px solid rgba(255,255,255,0.08); color:#fff; text-decoration:none;">Detail</a>
                        </div>
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