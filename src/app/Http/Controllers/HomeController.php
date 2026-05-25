<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;

class HomeController extends Controller
{
    public function index()
    {
        $dashboard = Dashboard::query()
            ->where('key', 'home')
            ->firstOrFail();

        return view('welcome', compact('dashboard'));
    }
}