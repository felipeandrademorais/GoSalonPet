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
        ]);

        DB::table('racas')->insert([
            'nome' => 'Poodle',
        ]);

        DB::table('racas')->insert([
            'nome' => 'Dogue Alemão',
        ]);

         echo "Registros de raças criados no sistema";
    }
}
