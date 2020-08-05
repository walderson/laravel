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
Route::get('perfil', function () {
    if (!session()->has('dados'))
    {
        return redirect('login');
    }
    return view('perfil');
});
Route::get('logout', 'Autenticacao@logout');
