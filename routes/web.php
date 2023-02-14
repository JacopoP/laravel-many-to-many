<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
->name('home');


Route::get('/product', [MainController::class, 'productFirst'])
->name('product.home');