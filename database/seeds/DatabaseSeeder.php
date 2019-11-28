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
        $this->call(alunosTableSeeder::class);
        $this->call(artigoTableSeeder::class);
        $this->call(usuarioTableSeeder::class);


    }
}
