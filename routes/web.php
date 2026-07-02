<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Products
Route::get('/add-product', [PublicController::class, 'addProduct'])->name('addProduct');

Route::post('/add-product/submit', [PublicController::class, 'submit'])->name('submit');

Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou');

Route::get('/show-products', [PublicController::class, 'showProducts'])->name('showProducts');