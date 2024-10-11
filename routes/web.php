<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\CategoryController;
use App\Http\Controllers\Frontsite\TestimoniController;
use App\Http\Controllers\Frontsite\CampusController;
use App\Http\Controllers\Backsite\DashboardController;
//controller
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\ConnectedController;

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

// Mengarahkan '/admin' ke metode index dari AdminController
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Mengarahkan '/admin/report' ke metode index dari ReportController
Route::get('/report', [ReportController::class, 'index'])->name('report.index');

// Mengarahkan '/admin/delete' ke metode index dari DeleteController
Route::get('/delete', [DeleteController::class, 'index'])->name('delete.index');

// Mengarahkan '/admin/pengaturan' ke metode index dari PengaturanController
Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');

// Mengarahkan '/admin/connected' ke metode index dari ConnectedController
Route::get('/connected', [ConnectedController::class, 'index'])->name('connected.index');




