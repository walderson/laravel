<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    function index()
    {
        return ['name'=>'Osmar Contato'];
    }

    function show($id)
    {
        return "Olá, ".$id;
    }
}
