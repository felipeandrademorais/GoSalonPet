<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RacaTableSeeder::class);
        $this->call(ServicosTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
