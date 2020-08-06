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
            ->orderBy('users.name', 'asc')
            ->orderBy('produtos.categoria', 'asc')
            ->orderBy('produtos.nome', 'asc')
            ->get();
        return view('user', ['dados'=>$dados]);
    }
}
