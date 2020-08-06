<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Galeria extends Controller
{
    function store(Request $request)
    {
        //Salvar na pasta storage/app/fotos
        $path = $request->file('foto')->store('fotos');
        return ['path'=>$path];
    }
}
