@extends('layouts.monica')

@section('title', 'Ramsay Abelson - Laporan Awal Project Akhir')
@section('meta_description', 'Laporan awal project akhir berisi ringkasan tujuan, ruang lingkup, dan rencana pengerjaan.')

@section('content')
<section class="laporan-page" id="top">
    <style>
        .laporan-page {
            background: #ffffff;
            color: #111827;
            padding: 7rem 1.5rem 4rem;
        }

        .laporan-wrap {
            width: min(100%, 920px);
            margin: 0 auto;
        }

        .laporan-head {
            margin-bottom: 2rem;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 1.5rem;
        }

        .laporan-label {
            margin: 0 0 0.6rem;
            color: #4b5563;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .laporan-title {
            margin: 0 0 0.8rem;
            color: #111827;
            font-size: clamp(2rem, 4vw, 3.2rem);
            line-height: 1.1;
        }

        .laporan-intro {
            margin: 0;
            max-width: 760px;
            color: #4b5563;
            font-size: 1.38rem;
            line-height: 1.8;
        }

        .laporan-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.75rem;
        }

        .laporan-section {
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 1.75rem;
        }

        .laporan-section:last-child {
            border-bottom: 0;
        }

        .laporan-section h3 {
            margin: 0 0 0.85rem;
            color: #111827;
            font-size: 2.05rem;
            line-height: 1.3;
        }

        .laporan-section h4 {
            margin: 0 0 0.7rem;
            color: #111827;
            font-size: 1.55rem;
            line-height: 1.45;
        }

        .laporan-section p {
            margin: 0;
            color: #374151;
            font-size: 1.38rem;
            line-height: 1.9;
        }

        .laporan-muted {
            color: #6b7280;
        }

        .laporan-diagram {
            width: 100%;
            margin-top: 0.8rem;
            border: 1px solid #e5e7eb;
            background: #ffffff;
        }

        .laporan-diagram-path {
            margin-top: 0.7rem !important;
            color: #6b7280 !important;
            font-size: 1.12rem !important;
        }

        .laporan-cta {
            margin-top: 2.4rem;
        }

        .laporan-cta-btn {
            display: inline-block;
            border: 1px solid #111827;
            padding: 0.8rem 1.2rem;
            color: #111827;
            font-weight: 700;
            text-decoration: none;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .laporan-cta-btn:hover {
            background: #111827;
            color: #ffffff;
        }

        @media (max-width: 640px) {
            .laporan-page {
                padding: 5.5rem 1rem 3rem;
            }
        }
    </style>

    <div class="laporan-wrap">
        <div class="laporan-head">
            <p class="laporan-label">Laporan</p>
            <h2 class="laporan-title">Laporan Awal Project Akhir</h2>
            <p class="laporan-intro">
                Laporan ini merupakan versi ringkasan dari laporan asli yang ada di <a href="">sini</a>.
            </p>
        </div>

        @if($laporan)
            @php
                $diagramErdUrl = null;
                if (!empty($laporan->diagram_erd)) {
                    $diagramErdUrl = str_starts_with($laporan->diagram_erd, 'http')
                        ? $laporan->diagram_erd
                        : asset($laporan->diagram_erd);
                }
                $diagramFlowchartUrl = null;
                if (!empty($laporan->diagram_flowchart)) {
                    $diagramFlowchartUrl = str_starts_with($laporan->diagram_flowchart, 'http')
                        ? $laporan->diagram_flowchart
                        : asset($laporan->diagram_flowchart);
                }
                $diagramUsecaseUrl = null;
                if (!empty($laporan->diagram_usecase)) {
                    $diagramUsecaseUrl = str_starts_with($laporan->diagram_usecase, 'http')
                        ? $laporan->diagram_usecase
                        : asset($laporan->diagram_usecase);
                }
            @endphp

            <div class="laporan-content">
                <article class="laporan-section">
                    <h3>Judul Project &amp; Deskripsi Singkat</h3>
                    <h4>{{ $laporan->judul }}</h4>
                    <p>{!! nl2br(e($laporan->deskripsi_singkat ?: 'Belum diisi.')) !!}</p>
                </article>

                <article class="laporan-section">
                    <h3>Analisis Masalah &amp; Kebutuhan Sistem</h3>
                    <h4>Analisis Masalah</h4>
                    <p>{!! nl2br(e($laporan->analisis_masalah ?: 'Belum diisi.')) !!}</p>
                    <h4 style="margin-top:1.2rem;">Kebutuhan Sistem</h4>
                    <p>{!! nl2br(e($laporan->kebutuhan_sistem ?: 'Belum diisi.')) !!}</p>
                </article>

                <article class="laporan-section">
                    <h3>Arsitektur &amp; Tech Stack</h3>
                    <p>{!! nl2br(e($laporan->arsitektur_tech_stack ?: 'Belum diisi.')) !!}</p>
                </article>

                <article class="laporan-section">
                    <h3>Diagram ERD</h3>
                    @if($diagramErdUrl)
                        <img src="{{ $diagramErdUrl }}" alt="Diagram ERD {{ $laporan->judul }}" class="laporan-diagram">
                        <p class="laporan-diagram-path">Path diagram: {{ $laporan->diagram_erd }}</p>
                    @else
                        <p class="laporan-muted">Diagram ERD belum diisi. Silakan isi kolom <strong>diagram_erd</strong> pada data laporan.</p>
                    @endif
                </article>

                <article class="laporan-section">
                    <h3>Diagram Flowchart</h3>
                    @if($diagramFlowchartUrl)
                        <img src="{{ $diagramFlowchartUrl }}" alt="Diagram Flowchart {{ $laporan->judul }}" class="laporan-diagram">
                        <p class="laporan-diagram-path">Path diagram: {{ $laporan->diagram_flowchart }}</p>
                    @else
                        <p class="laporan-muted">Diagram Flowchart belum diisi. Silakan isi kolom <strong>diagram_flowchart</strong> pada data laporan.</p>
                    @endif
                </article>

                <article class="laporan-section">
                    <h3>Diagram Use Case</h3>
                    @if($diagramUsecaseUrl)
                        <img src="{{ $diagramUsecaseUrl }}" alt="Diagram Use Case {{ $laporan->judul }}" class="laporan-diagram">
                        <p class="laporan-diagram-path">Path diagram: {{ $laporan->diagram_usecase }}</p>
                    @else
                        <p class="laporan-muted">Diagram Use Case belum diisi. Silakan isi kolom <strong>diagram_usecase</strong> pada data laporan.</p>
                    @endif
                </article>
            </div>
        @else
            <article class="laporan-section">
                <h3>Data laporan belum tersedia</h3>
                <p>Tambahkan data laporan melalui panel admin atau seeder agar halaman laporan dapat menampilkan konten dinamis.</p>
            </article>
        @endif

        <div class="laporan-cta">
            <a href="{{ url('/portofolio') }}" class="laporan-cta-btn">Kembali ke Portofolio</a>
        </div>
    </div>
</section>
@endsection
