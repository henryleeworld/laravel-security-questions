<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'password.confirm'])->name('home');
