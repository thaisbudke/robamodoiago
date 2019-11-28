<?php

use Illuminate\Database\Seeder;
use App\atletas;

class atletasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        atletas::create([
            'esportes_id' => '1',        
            'nome' => 'João', 
        ]);

        atletas::create([
            'esportes_id' => '1',         
            'nome' => 'Pedro', 
        ]);

    }
}
