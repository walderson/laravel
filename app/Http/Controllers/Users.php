<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    function index()
    {
        return view('exemplo', ['name'=>'Osmar Contato']);
    }
}
