<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontsite\LandingController;


// Mengarahkan root '/' ke metode index dari LandingController
Route::get('/', [LandingController::class, 'index'])->name('index');

