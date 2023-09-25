<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StopwatchsController;
use App\Http\Controllers\UsersController;



Route::get('/dashboard', [IndexController::class, 'dashboard']);

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/edit/{id}', [UsersController::class, 'user_edit']);
Route::get('/images', [ImagesController::class, 'index']);
Route::post('/images/up', [ImagesController::class, 'up']);

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/add', [ProductsController::class, 'add']);
Route::get('/products/edit/{id}', [ProductsController::class, 'edit']);

Route::get('/stopwatchs', [StopwatchsController::class, 'index']);
Route::get('/stopwatchs/add', [StopwatchsController::class, 'add']);
Route::get('/stopwatchs/edit/{id}', [StopwatchsController::class, 'edit']);

Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/add', [CategoriesController::class, 'add']);
Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit']);

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/add', [NewsController::class, 'add']);
Route::get('/news/edit/{id}', [NewsController::class, 'edit']);

Route::get('/orders',[OrdersController::class,'index']);
