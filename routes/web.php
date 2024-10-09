<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\CategoryController;
use App\Http\Controllers\Frontsite\TestimoniController;
use App\Http\Controllers\Frontsite\CampusController;
use App\Http\Controllers\Backsite\DashboardController;

// Mengarahkan root '/' ke metode index dari LandingController
Route::get('/', [LandingController::class, 'index'])->name('index');

// Mengarahkan '/category' ke metode index dari CategoryController
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

// Mengarahkan '/testimoni' ke metode show dari TestimoniController
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');

// Mengarahkan '/campus' ke metode index dari CampusController
Route::get('/campus', [CampusController::class, 'index'])->name('campus.index');

// Mengarahkan '/Dashboard' ke metode index dari DashboardController
Route::prefix('backsite')->name('backsite.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});


