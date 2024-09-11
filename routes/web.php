<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserDashboardController;

Route::resource('produk', ProdukController::class);
Route::resource('brand', BrandController::class);

Route::get('/admin/login', AuthController::class . '@loginForm');
Route::post('/admin/login', AuthController::class . '@login');
Route::get('/admin/register', AuthController::class . '@registerForm');
Route::post('/admin/register', AuthController::class . '@register');

Route::get('/', function(){
    return view('user.login');
});
Route::post('/user/register', [AuthController::class, 'registerUser']);
Route::get('/user/register', function(){
    return view('user.register');
});
Route::post('/user/login', [AuthController::class, 'loginUser']);

Route::get('/user/dashboard', [UserDashboardController::class, 'index']);

// review
Route::get('/review/{id}', [ReviewController::class, 'index']);
Route::post('/review/submit', [ReviewController::class, 'store']);

// Order
Route::get('/order/{id}', [OrderController::class, 'order']);

Route::get('/search', [UserDashboardController::class, 'search'])->name('search');

Route::get('/order', [UserDashboardController::class, 'order']);
Route::get('/admin/order', [UserDashboardController::class, 'adminOrder']);
Route::post('/admin/order/confirm/{id}', [OrderController::class, 'destroy']);


