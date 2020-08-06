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

Route::get('list', 'Users@index');
Route::get('produtos', 'Produtos@index');
Route::get('funcoes', 'Produtos@funcoes');
Route::view('novo', 'empresa-novo');
Route::post('empresas', 'Empresas@save');
Route::get('empresas/{id}/edit', 'Empresas@edit');
Route::patch('empresas/{id}', 'Empresas@update')->name('empresa.update');
