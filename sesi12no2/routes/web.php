<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalDuaController;

Route::get('/', [SoalDuaController::class, 'index']);