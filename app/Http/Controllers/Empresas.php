<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empresa;

class Empresas extends Controller
{
    function save(Request $request)
    {
        $emp = new Empresa();
        $emp->nome = $request->nome;
        $emp->endereco = $request->endereco;
        return $emp->save();
    }
}
