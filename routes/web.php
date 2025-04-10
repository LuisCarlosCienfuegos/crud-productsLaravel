<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('welcome');
});
#con este codigo evito ir creando ruta por ruta como en el punto 2
// Route::resource('products', ProductController::class);
#2 ruta por ruta Rutas para el CRUD de productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
