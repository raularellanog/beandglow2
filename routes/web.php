<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EcommmerceController;
use App\Http\Controllers\Homecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/', [Homecontroller::class, 'index']);
Route::get('/about', [Homecontroller::class, 'about']);

Route::get('/shop', [EcommmerceController::class, 'index']);
Route::post('/shop', [EcommmerceController::class, 'index_post']);

Route::get('/shop/details/{slug}', [EcommmerceController::class, 'details_product']);
Route::get('/shop/cart', [EcommmerceController::class, 'shop_cart']);
Route::get('/shop/favorites', [EcommmerceController::class, 'shop_favorites']);
Route::get('/shop/profile', [EcommmerceController::class, 'shop_profile']);

Route::get('/shop/checkout', [EcommmerceController::class, 'shop_checkout']);


Route::get('/admin/login', [AuthController::class, 'login']);
Route::prefix('admin')->middleware('auth.admin')->group(__DIR__ . '/admin.php');
Route::get('/admin/logout', [AuthController::class, 'logout_admin']);


Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return "Cache cleared successfully";
});
