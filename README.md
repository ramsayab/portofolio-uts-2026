| Nama | Ramsay Abelson |
| --- | --- |
| NIM | 20240801042 |
| Mata Kuliah | Pemrograman Web (CR002) |
| Dosen Pengampu | Jefry Sunupurwa Asri, S.Kom., M.Kom |
| Program Studi | Teknik Informatika |
| Universitas | Universitas Esa Unggul |

<p>
  <a href="docs/LAPORAN-AWAL-PROJECT-AKHIR.pdf">
    <img src="https://img.shields.io/badge/Buka%20PDF-Laporan%20Awal%20Project%20Akhir-blue?style=for-the-badge" alt="Buka PDF Laporan Awal Project Akhir">
  </a>
</p>

## Portofolio UTS

Website portofolio responsif yang dibuat sebagai pemenuhan tugas UTS. Project ini menampilkan profil, daftar project, form kontak dinamis, halaman laporan awal project akhir, serta panel admin untuk mengelola konten.

## Fitur Utama

### 1. Website Portofolio

- **Home ( / )**: Menampilkan profil profesional, bio singkat, dan stack keahlian.
- **Showcase ( / Project )**: Menampilkan daftar project yang pernah atau sedang dibuat.
- **Contact**: Form kontak dinamis yang tersimpan ke database.

### 2. Laporan Awal Project Akhir

- **Halaman Laporan Dinamis**: Data laporan diambil dari tabel `laporan`.
- **Judul Project & Deskripsi Singkat**: Menjelaskan solusi yang ditawarkan oleh project Chess War.
- **Analisis Masalah & Kebutuhan Sistem**: Menjelaskan latar belakang, kebutuhan, dan fitur utama.
- **Arsitektur & Tech Stack**: Menjelaskan teknologi yang digunakan seperti Laravel, Blade, Tailwind CSS, JavaScript, Docker, Nginx, dan MariaDB.
- **Rencana Perancangan Diagram**: Menampilkan diagram ERD, Flowchart, dan Use Case langsung di halaman web.
- **Link PDF Laporan**: README dan halaman laporan menyediakan tautan ke file PDF laporan awal project akhir.

### 3. Implementasi Teknis

- **MVC / Modern Framework**: Dibangun menggunakan Laravel dengan pola Model, View, dan Controller.
- **Database Dinamis**: Menggunakan MariaDB untuk menyimpan data portofolio, kontak, dan laporan.
- **CRUD Panel Admin**: Panel admin dapat digunakan untuk mengelola data:
  - Portofolio
  - Laporan
  - Contact Messages
- **Seeder Data Awal**: Data awal project, laporan, user admin, role, dan pesan kontak disiapkan melalui Laravel Seeder.
- **Source Code GitHub**: Source code dipush ke repository GitHub dan menyertakan file PDF laporan di folder `docs/`.

## Akses Admin

Panel admin dapat diakses melalui:

```text
https://portofolio-uts.test/admin
```

Default akun admin:

```text
Email: admin@admin.com
Password: password
```

## Endpoint Utama

```text
Home / About      : https://portofolio-uts.test/
Portofolio        : https://portofolio-uts.test/portofolio
Laporan Project   : https://portofolio-uts.test/laporan
Contact           : https://portofolio-uts.test/contact
Panel Admin       : https://portofolio-uts.test/admin
PDF Laporan       : docs/LAPORAN-AWAL-PROJECT-AKHIR.pdf
```

## Teknologi

- Laravel
- Filament Admin Panel
- Blade Template
- Tailwind CSS
- JavaScript
- MariaDB
- Docker
- Nginx
