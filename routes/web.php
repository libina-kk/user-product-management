<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Brand Routes
    Route::get('brands', [BrandController::class, 'index'])->name('brand.index'); // List brands
    Route::get('brands/create', [BrandController::class, 'create'])->name('brand.create'); // Show create form
    Route::post('brands', [BrandController::class, 'store'])->name('brand.store'); // Store brand
    Route::get('brands/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit'); // Show edit form
    Route::put('brands/{brand}', [BrandController::class, 'update'])->name('brand.update'); // Update brand
    Route::delete('brands/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy'); // Delete brand

    // Product Routes
    Route::get('products', [ProductController::class, 'index'])->name('product.index'); // List products
    Route::get('products/create', [ProductController::class, 'create'])->name('product.create'); // Show create form
    Route::post('products', [ProductController::class, 'store'])->name('product.store'); // Store product
    Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit'); // Show edit form
    Route::put('products/{product}', [ProductController::class, 'update'])->name('product.update'); // Update product
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('product.destroy'); // Delete product
});

require __DIR__.'/auth.php';
