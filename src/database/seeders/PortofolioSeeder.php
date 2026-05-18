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
                'nama_project' => 'clash of clans auto farm',
                'deskripsi_project' => 'menggabungkan ml/ai stack untuk membuat program rumit:
                yolo, cv2, pydirectinput, mss. serta customisasi dataset untuk hasil model lebih akurat',
                'link_github' => 'https://github.com/ramsayab/COC_AUTOFARM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_project' => 'chess war',
                'deskripsi_project' => 'Proyek yang menggabungkan chess tradisional dengan tambahan power dan unique move supaya lebih banyak variable.',
                'link_github' => 'https://github.com/ramsayab/chess_war-2026',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_project' => 'flowchart generator',
                'deskripsi_project' => 'menggunakan library turtle menggambar flowchart dengan lebih dari 11 diagram',
                'link_github' => 'https://github.com/ramsayab/flowchart_generator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_project' => 'typing cheat',
                'deskripsi_project' => 'menggunakan selenium untuk membuka chrome dan langsung mengambil rangkaian kata lewat div dengan teknik scraping',
                'link_github' => 'https://github.com/ramsayab/Online_Typing_Test_Cheat',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
