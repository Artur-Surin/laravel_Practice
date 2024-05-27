<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main-layout');
});

                                    /* ProductController */
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


                                   /* TourController */
Route::get('/tours', [TourController::class, 'index'])->name('tours.index');

Route::get('/tours/create', [TourController::class, 'create'])->name('tours.create');
Route::post('/tours', [TourController::class, 'store'])->name('tours.store');

Route::get('/tours/{tour}', [TourController::class, 'show'])->name('tours.show');
Route::get('/tours/{tour}/edit', [TourController::class, 'edit'])->name('tours.edit');
Route::put('/tours/{tour}', [TourController::class, 'update'])->name('tours.update');

Route::delete('/tours/{tour}', [TourController::class, 'destroy'])->name('tours.destroy');


                                 /* CategoryController */
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
