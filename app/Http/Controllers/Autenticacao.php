<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Autenticacao extends Controller
{
    function login(Request $request)
    {
        $request->session()->put('dados', $request->input());
        return view('perfil');
    }

    function logout()
    {
        session()->forget('dados');
        return view('login');
    }
}
