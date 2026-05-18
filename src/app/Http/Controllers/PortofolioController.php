<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('portofolio', [
            'portofolios' => Portofolio::latest()->get(),
        ]);
    }

    public function show(string $slug)
    {
        return view('portofolio', [
            'portofolios' => Portofolio::latest()->get(),
        ]);
    }

    public function laporan()
    {
        return view('laporan', [
            'laporan' => Laporan::latest()->first(),
        ]);
    }
}
