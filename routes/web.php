<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main-layout');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/tours', [TourController::class, 'index'])->name('tours.index');

Route::get('/tours/create', [TourController::class, 'create'])->name('tours.create');
Route::post('/tours', [TourController::class, 'store'])->name('tours.store');

Route::get('/tours/{tour}', [TourController::class, 'show'])->name('tours.show');
Route::get('/tours/{tour}/edit', [TourController::class, 'edit'])->name('tours.edit');
Route::put('/tours/{tour}', [TourController::class, 'update'])->name('tours.update');

Route::delete('/tours/{tour}', [TourController::class, 'destroy'])->name('tours.destroy');
