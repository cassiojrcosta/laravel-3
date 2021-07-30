<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/products', 
    [ProductController::class, 'index']
);

Route::get(
    '/produtcs/create',
    [PruductController::class, 'create']
);

Route::post(
    '/produtcs/store',
    [ProductController::class, 'store']
);

Route::get(
    'products/{id}',
    [ProductController::class, 'show']
);

Route::get(
        '/products/edit/{id}',
        [ProductController::class, 'edit']
);