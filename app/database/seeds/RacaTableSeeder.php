<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RacaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('racas')->insert([
            'nome' => 'Yorkshire',
            'tipo_raca' => 1,
        ]);

        DB::table('racas')->insert([
            'nome' => 'Poodle',
            'tipo_raca' => 2,
        ]);

        DB::table('racas')->insert([
            'nome' => 'Dogue Alemão',
            'tipo_raca' => 3,
        ]);

         echo "Registros de raças criados no sistema";
    }
}
