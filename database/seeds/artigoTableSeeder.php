<?php

use Illuminate\Database\Seeder;
use App\artigo;

class artigoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        artigo::create([
            'titulo' => 'primeiro teste',
            'descricao' => 'bla bla bla',
            'data' => '2018-09-01 13:15:00',
            'orientador' => 'orientador',
            'banca1' => 'banca1',
            'banca2' => 'banca2',
            'resultado' => '9',
        ]);
    }
}
