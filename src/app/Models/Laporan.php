<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $fillable = [
        'judul',
        'deskripsi_singkat',
        'analisis_masalah',
        'kebutuhan_sistem',
        'arsitektur_tech_stack',
        'diagram_erd',
        'diagram_flowchart',
        'diagram_usecase',
    ];
}
