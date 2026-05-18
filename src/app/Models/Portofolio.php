<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
    'title',
    'slug',
    'short_description',
    'problem_analysis',
    'tech_stack',
    'diagram',
    'pdf',
];
}
