<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::prefix('brands')->group(function(){

    Route::get('/', [BrandsController::class, 'index'])->name('brands.index');
    Route::get('/new', [BrandsController::class, 'create'])->name('brands.create');
    Route::post('', [BrandsController::class, 'store'])->name('brands.store');
    Route::get('{id}', [BrandsController::class, 'edit'])->name('brands.edit');
    Route::put('{id}', [BrandsController::class, 'update'])->name('brands.update');
    Route::delete('{id}', [BrandsController::class, 'destroy'])->name('brands.destroy');
    
});

Route::prefix('categories')->group(function(){

    Route::get('/',    [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('/new', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('',    [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('{id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
    
});
