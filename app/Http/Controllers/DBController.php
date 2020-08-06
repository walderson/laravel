<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    function index()
    {
        //Lista as tabelas do MySQL
        return DB::select('show tables');
    }
}
