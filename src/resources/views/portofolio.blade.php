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
                <h2 class="reveal reveal-delay-1">Selected Projects</h2>
            </div>
            <p class="reveal reveal-delay-2">
                Beberapa proyek yang berfokus pada pengembangan solusi perangkat lunak yang menyelesaikan masalah nyata.
            </p>
        </div>

        <style>
            .portfolio-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            @media (max-width: 640px) { .portfolio-grid { grid-template-columns: 1fr !important; } }

            .service-card { background: #0b1220; border: 1px solid rgba(255,255,255,0.06); padding:1.5rem; border-radius:12px; display:flex; gap:1rem; align-items:flex-start; transition: transform 0.22s ease, box-shadow 0.22s ease; }
            .service-card:hover { transform: translateY(-6px); box-shadow: 0 12px 36px rgba(2,6,23,0.6); }
            .service-card .badge { width:72px; height:72px; background:linear-gradient(135deg,#7ad2ff,#4aa8ff); border-radius:8px; flex:0 0 72px; display:flex; align-items:center; justify-content:center; color:#06111f; font-weight:800; }
            .service-card h3 { margin:0 0 0.5rem 0; font-size:1.9rem; font-weight:800; color:#ffffff; }
            .service-card p { margin:0 0 1rem 0; color:#d1d5db; line-height:1.45; }
            .service-card .actions a.primary { padding:0.6rem 1rem; border-radius:8px; background:linear-gradient(135deg,#7ad2ff,#4aa8ff); color:#06111f; text-decoration:none; font-weight:700; }
            .service-card .actions a.secondary { padding:0.6rem 1rem; border-radius:8px; background:transparent; border:1px solid rgba(255,255,255,0.12); color:#fff; text-decoration:none; }

            .report-cta-btn {
                display: inline-block;
                padding: 1rem 1.7rem;
                border-radius: 999px;
                background: linear-gradient(135deg, #ff8a00 0%, #ffd400 45%, #ff3d00 100%);
                color: #141414;
                font-weight: 900;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                text-decoration: none;
                box-shadow: 0 12px 28px rgba(255, 138, 0, 0.38);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .report-cta-btn:hover {
                transform: translateY(-2px) scale(1.01);
                box-shadow: 0 16px 34px rgba(255, 138, 0, 0.5);
            }
        </style>

        <div class="services-grid portfolio-grid" style="display:grid; gap:1.5rem;">
            @forelse ($portofolios->take(4) as $portofolio)
                <div class="service-card reveal">
                    <div class="badge">PJ</div>
                    <div style="flex:1;">
                        <h3>{{ $portofolio->nama_project }}</h3>
                        <p>{{ Str::limit($portofolio->deskripsi_project, 220) }}</p>
                        <div class="actions" style="display:flex; gap:0.75rem;">
                            <a href="{{ $portofolio->link_github }}" target="_blank" rel="noopener" class="primary">Lihat GitHub</a>
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
            <a href="{{ route('laporan') }}" class="report-cta-btn">Laporan Awal Project Akhir</a>
        </div>

    </div>
</section><!-- /s-services -->

@endsection