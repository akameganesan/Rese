<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\UserController;

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


Route::get('/', [ShopController::class, 'index']);
Route::post('/', [ShopController::class, 'index']);

Route::get('/create', [FavoriteController::class, 'create']);
Route::post('/create', [FavoriteController::class, 'create']);

Route::get('/menu', [AuthController::class, 'menu']);
Route::post('/menu', [AuthController::class, 'menu']);

Route::get('/registered', [AuthController::class, 'registered']);
Route::post('/registered', [AuthController::class, 'registered']);

Route::get('/register', [AuthController::class, 'register']);
;

Route::get('/login', [AuthController::class, 'login']);

Route::get('/menu', [AuthController::class, 'menu']);
Route::post('/menu', [AuthController::class, 'menu']);


Route::post('/add', [FavoriteController::class, 'create']);

Route::post('/area', [ShopController::class, 'area']);

Route::post('/genre', [ShopController::class, 'genre']);

Route::post('/search', [ShopController::class, 'search']);

Route::get('/remove', [FavoriteController::class, 'remove']);
Route::post('/remove', [FavoriteController::class, 'remove']);

Route::get('/detail', [ShopController::class, 'detail']);
Route::post('/detail', [ShopController::class, 'detail']);

Route::get('/day', [UserController::class, 'day']);
Route::post('/day', [UserController::class, 'day']);

Route::get('/time', [UserController::class, 'time']);
Route::post('/time', [UserController::class, 'time']);

Route::get('/num', [UserController::class, 'num']);
Route::post('/num', [UserController::class, 'num']);

Route::get('/res', [UserController::class, 'res']);
Route::post('/res', [UserController::class, 'res']);

Route::get('/reservation', [UserController::class, 'reservation']);
Route::post('/reservation', [UserController::class, 'reservation']);

Route::get('/reg', [UserController::class, 'reg']);
Route::post('/reg', [UserController::class, 'reg']);

Route::get('/done', [UserController::class, 'done']);
Route::post('/done', [UserController::class, 'done']);

Route::get('/mypage', [UserController::class, 'mypage']);
Route::post('/mypage', [UserController::class, 'mypage']);

Route::get('/delete', [UserController::class, 'delete']);
Route::post('/delete', [UserController::class, 'delete']);





