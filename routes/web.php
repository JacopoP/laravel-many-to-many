<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
->name('home');


Route::get('/product', [MainController::class, 'productFirst'])
->name('product.home');


Route::get('/product/create', [MainController::class, 'createProduct'])
->name('product.create');


Route::post('/product/store', [MainController::class, 'storeProduct'])
->name('product.store');

Route::get('/product/delete/{product}', [MainController::class, 'deleteProduct'])
->name('product.delete');
