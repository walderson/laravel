<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index(Request $request)
    {
        $request->validate([
            'email'=>'required | email',
            'endereco'=>'required | min: 3 | max: 10'
        ]);
        return $request->input();
    }
}
