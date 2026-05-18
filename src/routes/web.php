<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactMessageController;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Home
Route::get('/', [HomeController::class, 'index']);

Route::get('/portofolio', [PortofolioController::class, 'index']);
Route::get('/portofolio/{slug}', [PortofolioController::class, 'show']);

Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact');