<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/detail/{id}', [DetailController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/success', [CartController::class, 'success']);

Route::get('/register/success', [RegisterController::class, 'success'])->name('register-success');

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard-products', [DashboardProductController::class, 'index']);

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
