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

    function funcoes()
    {
        $where = Produto::where('userid', '1')->get();
        $orderBy = Produto::where('userid', '1')->orderBy('nome', 'asc')->get();
        $min = Produto::min('id');
        $max = Produto::max('id');
        $sum = Produto::sum('id');
        $count = Produto::count('id');
        $avg = Produto::avg('id');
        echo '<pre>';
        echo 'WHERE: '.$where."\n";
        echo 'ORDER BY: '.$orderBy."\n";
        echo 'MIN: '.$min."\n";
        echo 'MAX: '.$max."\n";
        echo 'SUM: '.$sum."\n";
        echo 'COUNT: '.$count."\n";
        echo 'AVG: '.$avg."\n";
        echo '</pre>';
    }
}
