<?php

use App\Http\Controllers\SuperAdminController;
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
//API
Route::post('/super_admin/api/register_user',[UserController::class,'registrarUsuario'])->name('sadmin_user_register');
Route::get('/super_admin/api/getUsuarios',[SuperAdminController::class,'getUsuarios'])->name('sadmin_get_usuarios');

