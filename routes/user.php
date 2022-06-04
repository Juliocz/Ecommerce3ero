<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::post('/user/register',[UserController::class,'registrarUsuario'])->name('user_register');
Route::post('/user/login',[UserController::class,'loginUsuario'])->name('user_login');
Route::get('/user/logout',[UserController::class,'logoutUsuario'])->name('user_logout');
