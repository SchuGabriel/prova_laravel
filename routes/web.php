<?php

use App\Http\Controllers\BrandsController;
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
