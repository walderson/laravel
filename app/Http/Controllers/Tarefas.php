<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tarefas extends Controller
{
    function index(Request $request)
    {
        if (session()->has('tarefas'))
        {
            $tarefas = session('tarefas');
            $tarefas[] = $request->input('tarefa');
        } else {
            $tarefas = [$request->input('tarefa')];
        }
        session()->put('tarefas', $tarefas);
        $request->session()->flash('mensagem', 'Tarefa foi adicionada');
        return redirect('tarefas');
    }
}
