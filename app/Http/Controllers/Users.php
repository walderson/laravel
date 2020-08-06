<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    function index()
    {
        //Aqui podemos também aplicar filtros, usar funções agregadoras,
        //inserir, atualizar e excluir registros
        return DB::table('users')->get();
    }
}
