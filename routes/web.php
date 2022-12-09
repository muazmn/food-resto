<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [HomeController::class, "index"]);
// Route::get('/category', [CategoryController::class, 'index']);
Route::resource('/menu', MenuController::class);
Route::resource('/table', TableController::class);
Route::resource('/reservation', ReservationController::class);
// Route::post('/category', [CategoryController::class, 'store']);
Route::resource('/category', CategoryController::class);

Route::resource('/register', LoginController::class);


// Route::get('/category/create', [CategoryController::class, 'create']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::get('/table/create', [TableController::class, 'createe']);
Route::get('/reservation/create', [ReservationController::class, 'create']);
Route::get('/thankyou', [WelcomeController::class, 'thankyou']);
