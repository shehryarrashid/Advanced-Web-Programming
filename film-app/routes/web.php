<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\AuthController;


// Laravel route

Route::get('/', function () {
    return view('welcome');
});


// Films route


Route::get('/films', [FilmController::class, 'index']);

Route::get('/films/create', [FilmController::class, 'create'])->middleware(['auth', 'can:edit']);

Route::get('/films/about', [FilmController::class, 'about']);

Route::post('/films', [FilmController::class, 'store'])->middleware(['auth', 'can:edit']);

Route::get('/films/{id}', [FilmController::class, 'show'])->middleware('auth');

Route::get('/films/{id}/edit', [FilmController::class, 'edit'])->middleware(['auth', 'can:edit']);

Route::patch('/films', [FilmController::class, 'update']);

Route::delete('/films', [FilmController::class, 'destroy']);


// Certificates routes

Route::get('/certificates', [CertificateController::class, 'index']);


// Authentication

Route::get('/login', [AuthController::class, 'index'])->name("login");

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

// Javascript

Route::get('/json/films/{decade}', [FilmController::class, 'listByDecade']);