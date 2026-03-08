<?php

use App\Http\Controllers\ChiperController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChiperController::class, 'index']);
