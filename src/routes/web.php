<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;

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


//Route::get('/', [AuthController::class, 'index']);


//Route::middleware('auth')->group(function () {
//    Route::get('/', [AuthController::class, 'index']);
//});


Route::get('/', [AuthController::class, 'index']);




Route::get('/menu', [AuthController::class, 'menu']);
Route::post('/menu', [AuthController::class, 'menu']);



Route::get('/register', [AuthController::class, 'register']);
//Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'login']);
//Route::post('/login', [AuthController::class, 'login']);


Route::get('/menu', [AuthController::class, 'menu']);
Route::post('/menu', [AuthController::class, 'menu']);

//Route::get('/index', [ShopController::class, 'index']);
//Route::post('/index', [ShopController::class, 'index']);