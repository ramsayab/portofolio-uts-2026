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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('sapaan');
            $table->longText('skill_singkat')->nullable();
            $table->string('hero_scroll_text')->nullable();
            $table->string('about_label')->nullable();
            $table->longText('about_me')->nullable();
            $table->longText('deskripsi_about_me')->nullable();
            $table->longText('about_paragraph_two')->nullable();
            $table->longText('nama_tech_stack')->nullable();
            $table->longText('tech_stack_intro')->nullable();
            $table->json('tech_stack_groups')->nullable();
            $table->longText('tech_stack_cta_text')->nullable();
            $table->string('tech_stack_cta_button_label')->nullable();
            $table->string('tech_stack_cta_button_url')->nullable();
            $table->string('img_src_link')->nullable();
            $table->string('profile_image_alt')->nullable();
            $table->string('contact_title')->nullable();
            $table->longText('contact_description')->nullable();
            $table->string('contact_direct_label')->nullable();
            $table->string('contact_whatsapp_url')->nullable();
            $table->string('contact_email_url')->nullable();
            $table->string('contact_whatsapp_label')->nullable();
            $table->string('contact_email_label')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboards');
    }
};
