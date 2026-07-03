<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou');

// Products
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('addProduct');

Route::post('/add-product/submit', [ProductController::class, 'submit'])->name('submit');

Route::get('/show-products', [ProductController::class, 'showProducts'])->name('showProducts');