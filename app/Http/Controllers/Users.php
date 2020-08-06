<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    function index()
    {
        $qtd = DB::table('users')->count();
        $soma = DB::table('users')->sum('id');
        $media = DB::table('users')->avg('id');
        return ['qtd'=>$qtd, 'soma'=>$soma, 'media'=>$media];
    }
}
