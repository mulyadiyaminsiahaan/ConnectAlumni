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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AlumniController;

Route::prefix('auth')->group(function () {
    Route::get("/register", [AuthController::class, "getRegister"])->name("register");
    Route::post("/register", [AuthController::class, "postRegister"])->name("post.register");
    Route::get("/login", [AuthController::class, "getLogin"])->name("login");
    Route::post("/login", [AuthController::class, "postLogin"])->name("post.login");
    Route::get("/logout", [AuthController::class, "getlogout"])->name("logout");
});

// Mengarahkan root '/' ke metode index dari LandingController
Route::get('/', [LandingController::class, 'index'])->name('index');

// Mengarahkan '/category' ke metode index dari CategoryController
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

// Route untuk menampilkan alumni
Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');

// Mengarahkan '/testimoni' ke metode show dari TestimoniController
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
// Mengarahkan '/testimoni' ke metode store dari TestimoniController
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
// Mengarahkan '/testimoni' ke metode store dari TestimoniController
Route::post('/testimoni/report', [ReportController::class, 'store'])->name('testimoni.report');


// Mengarahkan '/campus' ke metode index dari CampusController
Route::get('/campus', [CampusController::class, 'index'])->name('campus.index');

// Mengarahkan '/Dashboard' ke metode index dari DashboardController
Route::prefix('backsite')->name('backsite.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

// Mengarahkan '/admin' ke metode index dari AdminController
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.dashboard');

// Route::get('/admin', function () {
//     return view('pages.frontsite.admin.index');
// })->middleware('auth')->name('admin.dashboard');

// Mengarahkan '/admin/report' ke metode index dari ReportController
Route::get('/report', [ReportController::class, 'index'])->name('report.index');
Route::delete('/deletereport/{id}', [ReportController::class, 'destroy'])->name('report.delete');
    

// Mengarahkan '/admin/delete' ke metode index dari DeleteController
Route::get('/delete', [DeleteController::class, 'index'])->name('delete.index');
Route::get('/delete/{id}', [DeleteController::class, 'showUpdate'])->name('delete.showupdate');
Route::put('/updatedelete/{id}', [DeleteController::class, 'updateTestimoni'])->name('delete.update');
Route::delete('/delete/{id}', [DeleteController::class, 'deleteTestimoni'])->name('delete.delete');

// Mengarahkan '/admin/pengaturan' ke metode index dari PengaturanController
Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');

// Mengarahkan '/admin/connected' ke metode index dari ConnectedController
//Route::get('/connected', [ConnectedController::class, 'index'])->name('connected.index');
Route::get('/connected', [ConnectedController::class, 'showUsers'])->name('connected.index');


// Mengarahkan '/landing-page/profil' ke metode index dari ProfilController
// Mengarahkan '/profil' ke metode show dari ProfilController
// routes/web.php
Route::get('/profil', [ProfilController::class, 'show'])->name('profil')->middleware('auth');

Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('editprofil')->middleware('auth');
// Route to handle form submission and update profile
Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update')->middleware('auth');

Route::get('/landing-page', function () {
    return view('pages.frontsite.landing-page.index');
})->middleware('auth')->name('landing-page');
