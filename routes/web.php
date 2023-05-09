<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product/store', [ProductController::class, 'store']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product/edit', [ProductController::class, 'edit']);
Route::get('/product/update', [ProductController::class, 'update']);
Route::get('/product/destroye', [ProductController::class, 'destroye']);
Route::get('/product/show', [ProductController::class, 'show']);
