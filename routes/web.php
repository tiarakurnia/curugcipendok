<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', [PageController::class, 'home'])->name('home');
