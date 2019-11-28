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
        $this->call(eventosTableSeeder::class);
        $this->call(esportesTableSeeder::class);
        $this->call(atletasTableSeeder::class);
        $this->call(usuarioTableSeeder::class);


    }
}
