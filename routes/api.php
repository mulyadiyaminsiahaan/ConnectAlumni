<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/login", [AuthController::class, "postLogin"]);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [ApiController::class, 'login']);
// register
Route::post('/register', [ApiController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [ApiController::class, 'logout']);
    Route::get('/user', [ApiController::class, 'user']);
});