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
        ContactMessage::firstOrCreate(
            ['email' => 'aulia@example.com'],
            [
                'name' => 'Aulia Pratama',
                'message' => 'Halo, saya ingin diskusi mengenai project prediksi harga rumah dan kemungkinan kolaborasi.',
            ]
        );

        ContactMessage::firstOrCreate(
            ['email' => 'dina@example.com'],
            [
                'name' => 'Dina Rahma',
                'message' => 'Saya tertarik dengan layanan analisis data. Bisa dibantu untuk konsultasi singkat?',
            ]
        );

        ContactMessage::firstOrCreate(
            ['email' => 'fajar@example.com'],
            [
                'name' => 'Fajar Nugraha',
                'message' => 'Apakah Anda menerima project machine learning untuk tugas akhir atau freelance?',
            ]
        );
    }
}
