<?php

use Illuminate\Database\Seeder;

class alunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        alunos::create([
            'nome' => 'João',
            'id_esporte' => '2',
            'genero' => 'M',            
        ]);
    }
}
