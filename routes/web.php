<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
Route::get('/categories-add', function () {
    return view('categories.create');
});

//Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products-add', [CategoryController::class, 'show']);
Route::post('/products-add', [ProductController::class, 'store']);
Route::post('/categories-add', [CategoryController::class, 'create']);


Route::post('users/{id}', function ($id) {
    
});

Route::controller('users', 'UserController');