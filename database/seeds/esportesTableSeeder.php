<?php

use Illuminate\Database\Seeder;
use \App\esportes;

class esportesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        esportes::create([
            'evento_id' => '1',
            'nome' => 'Futebol',
            'descricao' => 'Futebol masculino 2019',
            'data' => '2018-09-01 13:15:00',
            'genero' => 'M',
            'resultado' => '12 x 10',
        ]);

        esportes::create([
            'evento_id' => '1',
            'nome' => 'Handebol',
            'descricao' => 'Futebol masculino 2019',
            'data' => '2018-09-01 13:15:00',
            'genero' => 'M',
            'resultado' => '15 x 25',
        ]);

        esportes::create([
            'evento_id' => '1',
            'nome' => 'Volei',
            'descricao' => 'Volei masculino 2019',
            'data' => '2018-09-01 13:15:00',
            'genero' => 'M',
            'resultado' => '25 x 21',
        ]);

        esportes::create([
            'evento_id' => '1',
            'nome' => 'Basquete',
            'descricao' => 'Basquete masculino 2019',
            'data' => '2018-09-01 13:15:00',
            'genero' => 'M',
            'resultado' => '25 x 21',
        ]);
    }
}
