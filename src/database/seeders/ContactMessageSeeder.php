<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::query()->delete();

        ContactMessage::query()->insert([
            [
                'name' => 'Aulia Pratama',
                'email' => 'aulia@example.com',
                'message' => 'Halo, saya ingin diskusi mengenai project prediksi harga rumah dan kemungkinan kolaborasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dina Rahma',
                'email' => 'dina@example.com',
                'message' => 'Saya tertarik dengan layanan analisis data. Bisa dibantu untuk konsultasi singkat?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fajar Nugraha',
                'email' => 'fajar@example.com',
                'message' => 'Apakah Anda menerima project machine learning untuk tugas akhir atau freelance?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
