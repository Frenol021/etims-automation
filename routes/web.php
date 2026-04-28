<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\EmailsController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/send-email', [EmailsController::class, 'sendEmail'])->name('send.email');
