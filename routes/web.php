<?php

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

Route::get('/', function () {
    return Redirect::route('shop.index');;
});

Route::get('/', [App\Http\Controllers\ProductosController::class, 'index']);

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categorias', 'CategoriasController');

Route::resource('usuarios', 'UsersController');

Route::resource('filtros', 'FiltrosController');

Route::resource('clientes', 'ClientesController');

Route::resource('vehiculos', 'VehiculosController');
//Eliminar Imagenes
Route::get('productosRemove/{id}','VehiculosController@destroy_img')->name('deleteimage');



});

//Route::get('/shop', [App\Http\Controllers\ProductosController::class, 'index'])->name('shop');
//Route::get('/show/{$id}', [App\Http\Controllers\ProductosController::class, 'show'])->name('show');

Route::resource('/shop', 'ProductosController');

//Buscador de productos
Route::get('buscador/{text}', 'ProductosController@buscador');

Route::get('products_all','ProductosController@productos_all')->name('products_all');
