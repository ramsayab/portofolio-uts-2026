<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portofolio::query()->delete();

        Portofolio::query()->insert([
            [
                'nama_project' => 'Analisis Sentimen Produk',
                'deskripsi_project' => 'Proyek analisis sentimen untuk mengelompokkan ulasan pengguna berdasarkan sentimen positif, netral, dan negatif.',
                'link_github' => 'https://github.com/username/analisis-sentimen-produk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_project' => 'Prediksi Harga Rumah',
                'deskripsi_project' => 'Model machine learning untuk memprediksi harga rumah berdasarkan fitur lokasi, luas bangunan, dan fasilitas.',
                'link_github' => 'https://github.com/username/prediksi-harga-rumah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
