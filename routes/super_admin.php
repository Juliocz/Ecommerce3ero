<?php

use App\Http\Controllers\CategoriaController;
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
//usuarios
Route::post('/super_admin/api/register_user',[UserController::class,'registrarUsuario'])->name('sadmin_user_register');
Route::post('/super_admin/api/mod_user',[UserController::class,'modificarUsuario'])->name('sadmin_user_mod');
Route::post('/super_admin/api/delete_user',[UserController::class,'deleteUsuario'])->name('sadmin_user_delete');
Route::get('/super_admin/api/getUsuarios',[SuperAdminController::class,'getUsuarios'])->name('sadmin_get_usuarios');
//categorias
Route::get('/super_admin/api/getCategorias',[CategoriaController::class,'getCategorias'])->name('sadmin_get_categorias');
Route::post('/super_admin/api/registrarCategoria',[CategoriaController::class,'registrarCategoria'])->name('sadmin_registrar_categorias');
Route::post('/super_admin/api/modificarCategoria',[CategoriaController::class,'modificarCategoria'])->name('sadmin_modificar_categorias');
Route::post('/super_admin/api/eliminarCategoria',[CategoriaController::class,'eliminarCategoria'])->name('sadmin_categoria_delete');
