<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;

Route::get('/', [HomeController::class, 'index']);


