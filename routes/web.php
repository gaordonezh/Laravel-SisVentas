<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\UsuarioController;

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
    return view('auth/login');
});

//Route::resource('/almacen/categoria','App\Http\Controllers\CategoriaController');
Route::resource('/almacen/categoria', CategoriaController::class);
Route::resource('/almacen/articulo', ArticuloController::class);
Route::resource('/ventas/cliente', ClienteController::class);
Route::resource('/compras/proveedor', ProveedorController::class);
Route::resource('/compras/ingreso', IngresoController::class);
Route::resource('/ventas/venta', VentaController::class);
Route::resource('/seguridad/usuario', UsuarioController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/{slug?}', function(){
    return view('/dashboard');
});