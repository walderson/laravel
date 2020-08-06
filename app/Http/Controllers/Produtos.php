<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;

class Produtos extends Controller
{
    function index()
    {
        return Produto::all();
    }
}
