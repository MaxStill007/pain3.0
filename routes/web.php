<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;

Route::get('/', [PageController::class, 'index']);
Route::get('/product', [PageController::class, 'product'])->name('product.page');
Route::get('/blog', [PageController::class, 'blog'])->name('blog.page');
Route::get('/contact', [PageController::class, 'contacts'])->name('contacts.page');

// Маршруты аутентификации с верификацией
Auth::routes(['verify' => true]);

// Защищенные маршруты
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Маршруты для заказов
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
});

Route::get('/blog/{id}', [PageController::class, 'showBlog'])->name('blog.show');