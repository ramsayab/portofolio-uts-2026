<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi_singkat')->nullable();
            $table->longText('analisis_masalah')->nullable();
            $table->longText('kebutuhan_sistem')->nullable();
            $table->longText('arsitektur_tech_stack')->nullable();
            $table->string('diagram_erd')->nullable();
            $table->string('diagram_flowchart')->nullable();
            $table->string('diagram_usecase')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
