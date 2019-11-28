<?php

use Illuminate\Database\Seeder;
use App\eventos;

class eventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        eventos::create([
            'titulo' => 'Amistoso ifrs',
            'local' => 'Sertão',
            'data' => '2018-09-01 13:15:00',
        ]);

    }
}
