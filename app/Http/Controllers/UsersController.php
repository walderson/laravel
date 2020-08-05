<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index()
    {
        $dados = [
            'nome'=>'Albert',
            'sobrenome'=>'Einstein',
            'email'=>'albert@einstein.nom',
            'endereco'=>'em algum lugar'
        ];
        return view('user', ['dados'=>$dados]);
    }
}
