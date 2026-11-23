<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;

Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']); 