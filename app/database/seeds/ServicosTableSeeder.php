<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('servicos')->insert([
            'id_raca' => 1,
            'nome' => 'Tosa e Banho',
            'descricao' => 'Um relaxante banho e um boa tosa',
            'preco' => 15.50,
            'tempo' => 2,
            'unidade_tempo' => 'Hrs'
        ]);

        DB::table('servicos')->insert([
            'id_raca' => 2,
            'nome' => 'Massagem',
            'descricao' => 'Uma relaxante massagem',
            'preco' => 20,
            'tempo' => 1,
            'unidade_tempo' => 'Hrs'
        ]);

        DB::table('servicos')->insert([
            'id_raca' => 3,
            'nome' => 'Tosa e Banho',
            'descricao' => 'Um relazante banho e um boa tosa',
            'preco' => 30,
            'tempo' => 4,
            'unidade_tempo' => 'Hrs'
        ]);

         echo "Registros de serviços criados no sistema";
    }
}
