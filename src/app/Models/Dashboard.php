<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $fillable = [
        'key',
        'meta_title',
        'meta_description',
        'sapaan',
        'skill_singkat',
        'hero_scroll_text',
        'about_label',
        'about_me',
        'deskripsi_about_me',
        'about_paragraph_two',
        'nama_tech_stack',
        'tech_stack_intro',
        'tech_stack_groups',
        'tech_stack_cta_text',
        'tech_stack_cta_button_label',
        'tech_stack_cta_button_url',
        'img_src_link',
        'profile_image_alt',
        'contact_title',
        'contact_description',
        'contact_direct_label',
        'contact_whatsapp_url',
        'contact_email_url',
        'contact_whatsapp_label',
        'contact_email_label',
    ];

    protected $casts = [
        'tech_stack_groups' => 'array',
    ];
}
