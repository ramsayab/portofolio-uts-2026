<?php

namespace Database\Seeders;

use App\Models\Laporan;
use App\Models\Portofolio;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portofolios = Portofolio::query()->get(['id', 'nama_project']);

        foreach ($portofolios as $portofolio) {
            Laporan::updateOrCreate(
                ['portofolio_id' => $portofolio->id],
                [
                    'judul' => 'Chess War : Aplikasi Web Permainan Catur dengan Sistem Random Power Draft Chess 
                    ' . ucwords($portofolio->nama_project),
                    'analisis_masalah' => null,
                    'kebutuhan_sistem' => null,
                    'arsitektur_tech_stack' => null,
                    'diagram_erd' => null,
                    'diagram_flowchart' => null,
                    'diagram_usecase' => null,
                ]
            );
        }
    }
}
