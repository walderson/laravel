<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    function index()
    {
        $dados = DB::table('users')
            ->select('users.name', 'produtos.categoria', 'produtos.nome')
            ->leftjoin('produtos', 'users.id', 'produtos.userid')
            ->where('users.name', 'Chuck Norris')
            ->get();
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
    }
}
