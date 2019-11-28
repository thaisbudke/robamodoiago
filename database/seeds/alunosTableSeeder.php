<?php

use Illuminate\Database\Seeder;
use App\alunos;

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
            'email' => 'teste1@teste1',            
        ]);
    }
}
