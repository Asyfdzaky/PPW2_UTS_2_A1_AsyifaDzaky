<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [productController::class,"index"])->name('products.index');
Route::get('/products/create', [productController::class, 'create'])->name('products.create');
Route::post('/products/store', [productController::class, 'store'])->name('products.store');
Route::get('/products/show/{product}', [productController::class, 'show'])->name('products.show');
Route::get('/products/edit/{product}', [productController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{product}', [productController::class, 'update'])->name('products.update');
Route::delete('/products/destroy/{product}', [productController::class, 'destroy'])->name('products.destroy'); 