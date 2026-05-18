<?php

namespace App\Http\Controllers;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('portofolio');
    }

    public function show(string $slug)
    {
        return view('portofolio');
    }
}
