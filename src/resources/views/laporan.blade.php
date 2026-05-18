@extends('layouts.monica')

@section('title', 'Ramsay Abelson - Laporan Awal Project Akhir')
@section('meta_description', 'Laporan awal project akhir berisi ringkasan tujuan, ruang lingkup, dan rencana pengerjaan.')

@section('content')
<section class="s-services" id="top">
    <style>
        .laporan-cta {
            margin-top: 2.4rem;
            text-align: center;
        }

        .laporan-cta-btn {
            display: inline-block;
            padding: 0.95rem 1.6rem;
            border-radius: 999px;
            background: linear-gradient(135deg, #ff8a00 0%, #ffd400 45%, #ff3d00 100%);
            color: #151515;
            font-weight: 800;
            font-size: 1.02rem;
            letter-spacing: 0.02em;
            text-decoration: none;
            box-shadow: 0 10px 24px rgba(255, 138, 0, 0.34);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .laporan-cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(255, 138, 0, 0.48);
        }
    </style>

    <div class="services-inner">
        <div class="services-head">
            <div>
                <p class="section-label reveal">Laporan</p>
                <h2 class="reveal reveal-delay-1">Laporan Awal Project Akhir</h2>
            </div>
            <p class="reveal reveal-delay-2">
                Halaman detail laporan menampilkan data project secara dinamis dari database sesuai kebutuhan dokumen awal project akhir.
            </p>
        </div>

        @if($laporanProject)
            @php
                $diagramErdUrl = null;
                if (!empty($laporanProject->diagram_erd)) {
                    $diagramErdUrl = str_starts_with($laporanProject->diagram_erd, 'http')
                        ? $laporanProject->diagram_erd
                        : asset($laporanProject->diagram_erd);
                }
                $diagramFlowchartUrl = null;
                if (!empty($laporanProject->diagram_flowchart)) {
                    $diagramFlowchartUrl = str_starts_with($laporanProject->diagram_flowchart, 'http')
                        ? $laporanProject->diagram_flowchart
                        : asset($laporanProject->diagram_flowchart);
                }
                $diagramUsecaseUrl = null;
                if (!empty($laporanProject->diagram_usecase)) {
                    $diagramUsecaseUrl = str_starts_with($laporanProject->diagram_usecase, 'http')
                        ? $laporanProject->diagram_usecase
                        : asset($laporanProject->diagram_usecase);
                }
            @endphp

            <div class="services-grid" style="display:grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap:1.5rem;">
                <article class="service-card reveal" style="background:#0b1220; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem; grid-column:1 / -1;">
                    <h3 style="margin:0 0 .8rem 0; font-size:1.4rem; color:#fff;">Judul Project &amp; Deskripsi Singkat</h3>
                    <h4 style="margin:0 0 .6rem 0; font-size:1.2rem; color:#ffd166;">{{ $laporanProject->nama_project }}</h4>
                    <p style="margin:0; color:#d1d5db;">{{ $laporanProject->deskripsi_project }}</p>
                </article>

                <article class="service-card reveal reveal-delay-1" style="background:#0b1220; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem;">
                    <h3 style="margin:0 0 .8rem 0; font-size:1.4rem; color:#fff;">Analisis Masalah</h3>
                    <p style="margin:0; color:#d1d5db;">{{ $laporanProject->analisis_masalah ?: 'Belum diisi.' }}</p>
                </article>

                <article class="service-card reveal reveal-delay-2" style="background:#0b1220; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem;">
                    <h3 style="margin:0 0 .8rem 0; font-size:1.4rem; color:#fff;">Kebutuhan Sistem</h3>
                    <p style="margin:0; color:#d1d5db;">{{ $laporanProject->kebutuhan_sistem ?: 'Belum diisi.' }}</p>
                </article>

                <article class="service-card reveal reveal-delay-3" style="background:#0b1220; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem; grid-column:1 / -1;">
                    <h3 style="margin:0 0 .8rem 0; font-size:1.4rem; color:#fff;">Arsitektur &amp; Tech Stack</h3>
                    <p style="margin:0; color:#d1d5db;">{{ $laporanProject->arsitektur_tech_stack ?: 'Belum diisi.' }}</p>
                </article>

                <article class="service-card reveal reveal-delay-3" style="background:#0b1220; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem; grid-column:1 / -1;">
                    <h3 style="margin:0 0 .8rem 0; font-size:1.4rem; color:#fff;">Diagram ERD</h3>
                    @if($diagramErdUrl)
                        <img src="{{ $diagramErdUrl }}" alt="Diagram ERD {{ $laporanProject->nama_project }}" style="width:100%; max-width:980px; border-radius:10px; border:1px solid rgba(255,255,255,0.14); background:#0f172a;">
                        <p style="margin:0.8rem 0 0; color:#aab3c5; font-size:0.95rem;">Path diagram: {{ $laporanProject->diagram_erd }}</p>
                    @else
                        <p style="margin:0; color:#d1d5db;">Diagram ERD belum diisi. Silakan isi kolom <strong>diagram_erd</strong> pada data project.</p>
                    @endif
                </article>

                <article class="service-card reveal reveal-delay-3" style="background:#0b1220; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem; grid-column:1 / -1;">
                    <h3 style="margin:0 0 .8rem 0; font-size:1.4rem; color:#fff;">Diagram Flowchart</h3>
                    @if($diagramFlowchartUrl)
                        <img src="{{ $diagramFlowchartUrl }}" alt="Diagram Flowchart {{ $laporanProject->nama_project }}" style="width:100%; max-width:980px; border-radius:10px; border:1px solid rgba(255,255,255,0.14); background:#0f172a;">
                        <p style="margin:0.8rem 0 0; color:#aab3c5; font-size:0.95rem;">Path diagram: {{ $laporanProject->diagram_flowchart }}</p>
                    @else
                        <p style="margin:0; color:#d1d5db;">Diagram Flowchart belum diisi. Silakan isi kolom <strong>diagram_flowchart</strong> pada data project.</p>
                    @endif
                </article>

                <article class="service-card reveal reveal-delay-3" style="background:#0b1220; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem; grid-column:1 / -1;">
                    <h3 style="margin:0 0 .8rem 0; font-size:1.4rem; color:#fff;">Diagram Use Case</h3>
                    @if($diagramUsecaseUrl)
                        <img src="{{ $diagramUsecaseUrl }}" alt="Diagram Use Case {{ $laporanProject->nama_project }}" style="width:100%; max-width:980px; border-radius:10px; border:1px solid rgba(255,255,255,0.14); background:#0f172a;">
                        <p style="margin:0.8rem 0 0; color:#aab3c5; font-size:0.95rem;">Path diagram: {{ $laporanProject->diagram_usecase }}</p>
                    @else
                        <p style="margin:0; color:#d1d5db;">Diagram Use Case belum diisi. Silakan isi kolom <strong>diagram_usecase</strong> pada data project.</p>
                    @endif
                </article>
            </div>
        @else
            <article class="service-card reveal" style="background:#0b1220; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem;">
                <h3 style="margin:0 0 .8rem 0; font-size:1.4rem; color:#fff;">Data laporan belum tersedia</h3>
                <p style="margin:0; color:#d1d5db;">Tambahkan data project melalui panel admin atau seeder agar halaman laporan dapat menampilkan konten dinamis.</p>
            </article>
        @endif

        <div class="services-cta reveal laporan-cta">
            <a href="{{ url('/portofolio') }}" class="laporan-cta-btn">Kembali ke Portofolio</a>
        </div>
    </div>
</section>
@endsection
