

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/filter', [ProductController::class, 'filter'])->name('filter');