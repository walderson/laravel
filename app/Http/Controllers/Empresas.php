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

    function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('empresa-edit', ['id'=>$id, 'empresa'=>$empresa]);
    }

    function update(Request $request, $id)
    {
        $empresa = Empresa::find($id);
        $empresa->nome = $request->nome;
        $empresa->endereco = $request->endereco;
        return $empresa->save();
    }
}
