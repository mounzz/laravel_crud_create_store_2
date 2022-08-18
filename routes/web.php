<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElevesController;


Route::get('/', [ElevesController::class, "Welcome"]);
Route::post('/create', [ElevesController::class, "store"]);

