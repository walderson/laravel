<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            ['nome'=>'Computador', 'categoria'=>'Informática', 'userid'=>1],
            ['nome'=>'Celular', 'categoria'=>'Telefonia', 'userid'=>1],
            ['nome'=>'Mouse', 'categoria'=>'Informática', 'userid'=>2],
            ['nome'=>'Caneta', 'categoria'=>'Papelaria', 'userid'=>2],
            ['nome'=>'Geladeira', 'categoria'=>'Eletrodoméstico', 'userid'=>1],
        ]);
    }
}
