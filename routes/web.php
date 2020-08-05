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

Route::view('login', 'login');
Route::post('login', 'Autenticacao@login');
Route::get('logout', 'Autenticacao@logout');

Route::group(['middleware'=>'customAuth'], function () {
    Route::get('perfil', function () {
        return view('perfil');
    });
});