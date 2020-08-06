<?php

use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            ['nome'=>'Petrobrás', 'endereco'=>'Rio de Janeiro'],
            ['nome'=>'Itaú', 'endereco'=>'São Paulo'],
            ['nome'=>'Bradesco', 'endereco'=>'Brasília'],
            ['nome'=>'Vale', 'endereco'=>'Vale Encantado'],
            ['nome'=>'Banco do Brasil', 'endereco'=>'Caixa Forte'],
            ['nome'=>'Eletrobrás', 'endereco'=>'Parintins'],
            ['nome'=>'JBS', 'endereco'=>'Rua do Matadouro'],
            ['nome'=>'Google', 'endereco'=>'Vale do Silício'],
        ]);
    }
}
