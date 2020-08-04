<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index(Request $request)
    {
        echo 'Olá, Controller!<br>';
        echo 'Path: '.$request->path().'<br>';
        echo 'URL: '.$request->url().'<br>';
        echo 'Método: '.$request->method().'<br>';
        echo 'e-mail: '.$request->input('email').'<br>';
        dd($request->input());
    }
}
