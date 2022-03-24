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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');

Route::get('/permisos','PermisosController@index')->name('permisos');
Route::get('/permisos/create','PermisosController@create')->name('permisos.create');
Route::get('/permisos/edit/{prm_id}','PermisosController@edit')->name('permisos.edit');
Route::post('/permisos/store','PermisosController@store')->name('permisos.store');
Route::post('/permisos/update/{prm_id}','PermisosController@update')->name('permisos.update');
Route::post('/permisos/destroy/{prm_id}','PermisosController@destroy')->name('permisos.destroy');

Route::get('/ingresos','IngresosController@index')->name('ingresos');
Route::get('/ingresos/create','IngresosController@create')->name('ingresos.create');

Route::get('/tipoI','TipoIngresosController@index')->name('tipoI');
Route::get('/tipoI/create','TipoIngresosController@create')->name('tipoI.create');
Route::get('/tipoI/edit/{tpI_id}','TipoIngresosController@edit')->name('tipoI.edit');
Route::post('/tipoI/store','TipoIngresosController@store')->name('tipoI.store');
Route::post('/tipoI/update/{tpI_id}','TipoIngresosController@update')->name('tipoI.update');
Route::post('/tipoI/destroy/{tpI_id}','TipoIngresosController@destroy')->name('tipoI.destroy');