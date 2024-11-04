<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', [FilmController::class, 'index']);

Route::get('/films/create', [FilmController::class, 'create']);

Route::get('/films/about', [FilmController::class, 'about']);

Route::post('/films', [FilmController::class, 'store']);

Route::get('/films/{id}', [FilmController::class, 'show']);

Route::get('/films/{id}/edit', [FilmController::class, 'edit']);

Route::patch('/films', [FilmController::class, 'update']);

Route::delete('/films', [FilmController::class, 'destroy']);