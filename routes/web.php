<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get(
    '/',
    [UserController::class, 'signin']
)->name('login');

Route::get(
    'signup',
    [UserController::class, 'signup']
);

Route::post(
    '/login',
    [UserController::class, 'login']
);

Route::post(
    '/users/store',
    [UserController::class, 'store']
);

Route::get(
    '/products', 
    [ProductController::class, 'index']
)->middleware('auth');

Route::get(
    '/produtcs/create',
    [PruductController::class, 'create']
)->name('login');

Route::post(
    '/produtcs/store',
    [ProductController::class, 'store']
)->name('login');

Route::get(
    'products/{id}',
    [ProductController::class, 'show']
)->name('login');

Route::get(
        '/products/edit/{id}',
        [ProductController::class, 'edit']
)->name('login');

Route::post(
    '/products/update/{id}',
    [ProductController::class, 'update']
)->name('login');

Route::get(
    '/products/delete/{ide}',
    [ProductController::class, 'destroy']
)->name('login');

