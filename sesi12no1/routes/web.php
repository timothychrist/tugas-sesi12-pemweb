<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalSatuController;

Route::get('/', [SoalSatuController::class, 'index']);