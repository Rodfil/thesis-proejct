<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);

Route::get('/dashboard', [MainController::class, 'dashboard']);

Route::get('/notification', [MainController::class, 'notification']);

Route::post('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login']);

Route::get('/register', [UserController::class, 'register']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);