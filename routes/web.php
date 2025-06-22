<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/product', [PageController::class, 'product'])->name('product.page');

// Включение маршрутов верификации
Auth::routes(['verify' => true]); // Добавлен параметр verify

// Защищаем маршрут верификацией email
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware(['auth', 'verified']); // Добавлен middleware 'verified'