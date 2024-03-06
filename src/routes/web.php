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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', [AuthController::class, 'index']);


//Route::middleware('auth')->group(function () {
//    Route::get('/', [AuthController::class, 'index']);
//});


Route::get('/', [ShopController::class, 'index']);
Route::post('/', [ShopController::class, 'index']);

Route::post('/create', [FavoriteController::class, 'create']);


Route::get('/menu', [AuthController::class, 'menu']);
Route::post('/menu', [AuthController::class, 'menu']);

Route::get('/registered', [AuthController::class, 'registered']);
Route::post('/registered', [AuthController::class, 'registered']);



Route::get('/register', [AuthController::class, 'register']);
//Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'login']);
//Route::post('/login', [AuthController::class, 'login']);


Route::get('/menu', [AuthController::class, 'menu']);
Route::post('/menu', [AuthController::class, 'menu']);

//Route::get('/index', [ShopController::class, 'index']);
//Route::post('/index', [ShopController::class, 'index']);



Route::get('/create3', [FavoriteController::class, 'create3']);
Route::post('/create3', [FavoriteController::class, 'create3']);


//Route::get('/create3', [UserController::class, 'test']);
//Route::post('/create3', [UserController::class, 'test']);




Route::post('/add', [FavoriteController::class, 'create']);
//Route::get('/', [FavoriteController::class, 'index']);


Route::post('/area', [ShopController::class, 'area']);

Route::post('/genre', [ShopController::class, 'genre']);

Route::post('/search', [ShopController::class, 'search']);


Route::get('/remove', [FavoriteController::class, 'remove']);
Route::post('/remove', [FavoriteController::class, 'remove']);


Route::get('/index2', [ShopController::class, 'index2']);
Route::post('/index2', [ShopController::class, 'index2']);


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

Route::get('/test', [UserController::class, 'test']);
Route::post('test', [UserController::class, 'test']);

Route::get('/reg', [UserController::class, 'reg']);
Route::post('/reg', [UserController::class, 'reg']);


Route::get('/done', [UserController::class, 'done']);
Route::post('/done', [UserController::class, 'done']);


Route::get('/mypage', [UserController::class, 'mypage']);
Route::post('/mypage', [UserController::class, 'mypage']);


Route::get('/delete', [UserController::class, 'delete']);
Route::post('/delete', [UserController::class, 'delete']);



Route::get('/day1', [UserController::class, 'day1']);
Route::post('/day1', [UserController::class, 'day1']);

Route::get('/time1', [UserController::class, 'time1']);
Route::post('/time1', [UserController::class, 'time1']);

Route::get('/num1', [UserController::class, 'num1']);
Route::post('/num1', [UserController::class, 'num1']);



