<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\DashboardSettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/detail/{id}', [DetailController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/success', [CartController::class, 'success']);

Route::get('/register/success', [RegisterController::class, 'success'])->name('register-success');

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard-products', [DashboardProductController::class, 'index']);
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create']);
Route::get('/dashboard/products/{id}', [DashboardProductController::class, 'detail']);

Route::get('/dashboard/transactions', [DashboardTransactionController::class, 'index']);
Route::get('/dashboard/transactions/detail', [DashboardTransactionController::class, 'details']);

Route::get('/dashboard/setting', [DashboardSettingController::class, 'index']);

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
