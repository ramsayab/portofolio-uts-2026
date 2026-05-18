<?php

namespace Database\Seeders;

use App\Models\Laporan;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $judul = 'Chess War : Aplikasi Web Permainan Catur dengan Sistem Random Power Draft Chess';

        Laporan::updateOrCreate(
            ['judul' => $judul],
            [
                'deskripsi_singkat' => 'Chess War adalah aplikasi permainan catur berbasis web yang menggabungkan mekanisme catur klasik dengan sistem Random Power Draft Chess. Pemain dapat menggunakan power khusus seperti Blink Knight, Super Rook, hingga Omni Queen untuk menciptakan strategi permainan yang lebih variatif dan dinamis. Aplikasi ini dikembangkan menggunakan Laravel dengan dukungan chess engine WukongJS untuk mode permainan Player vs Computer (PvC).',

                'analisis_masalah' => 'Permainan catur digital tradisional cenderung memiliki gameplay yang monoton karena hanya mengandalkan aturan standar tanpa variasi mekanik tambahan. Seiring berkembangnya industri game modern, pemain mulai menginginkan pengalaman bermain yang lebih interaktif, dinamis, dan memiliki banyak kemungkinan strategi.
Selain itu, sebagian besar platform catur hanya berfokus pada gameplay kompetitif biasa tanpa inovasi fitur yang dapat meningkatkan replayability permainan. Oleh karena itu, dibutuhkan sebuah aplikasi catur berbasis web yang mampu menghadirkan pengalaman baru melalui integrasi sistem power draft agar permainan menjadi lebih menarik dan tidak repetitif.',

                'kebutuhan_sistem' => 'Functional Requirements
-Sistem registrasi dan login pengguna.
-Dashboard pengguna setelah autentikasi berhasil.
-Permainan catur interaktif berbasis browser.
-Integrasi chess engine untuk lawan bot.
-Sistem custom power pada gameplay.
-Penyimpanan histori pertandingan.
-Panel admin untuk manajemen user dan data permainan.
-Non-Functional Requirements
-Aplikasi berjalan menggunakan Docker container.
-Sistem menggunakan database MariaDB.
-Antarmuka responsif dan modern.
-Struktur aplikasi mudah dikembangkan dan dipelihara.
-Sistem autentikasi aman menggunakan Laravel Authentication.',

                'arsitektur_tech_stack' => 'Laravel 12 (PHP 8.2) — Framework backend utama dengan arsitektur MVC untuk mengelola routing, logika bisnis, dan autentikasi.
                MariaDB — Database relasional untuk menyimpan data pengguna, role, permission, dan riwayat pertandingan.
                Blade Template — Template engine Laravel untuk merender antarmuka pengguna di sisi server.
                Tailwind CSS — Framework CSS utility-first untuk tampilan yang responsif dan fleksibel.
                Filament 3 — Panel administrasi untuk manajemen pengguna dan data permainan.
                Livewire — Digunakan secara tidak langsung melalui Filament untuk komponen admin yang interaktif.
                Spatie Laravel Permission — Manajemen role dan permission pengguna.
                Docker Compose — Kontainerisasi aplikasi dengan tiga container: PHP-FPM, Nginx, dan MariaDB.
                Vite + NPM — Build tool dan package manager untuk mengelola asset frontend.
                
                tambahan:
                Chessboardjs — Library JavaScript untuk merender papan catur interaktif dengan fitur drag-and-drop.
                Chess.js — Library JavaScript untuk validasi langkah, deteksi skak, skak mat, dan konversi format FEN.
                WukongJS — Chess engine berbasis JavaScript yang berjalan di sisi klien sebagai lawan komputer.'
                ,

                'diagram_erd' => 'assets/erd.png',
                'diagram_flowchart' => 'assets/flowchart.png',
                'diagram_usecase' => 'assets/usecase.png',
            ]
        );
    }
}
