<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'nama_project',
        'deskripsi_project',
        'link_github',
    ];
}
