<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEsportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esportes', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->integer('evento_id')->unsigned();   //código identificador de evento
            $table->string('nome');            //título da atividade
            $table->string('descricao');      //descrição da atividade
            $table->dateTime('data');       //agendado para
            $table->string('genero');      //genero do esporte
            $table->longText('resultado');	//resultados
            $table->timestamps();

        });

        Schema::table('esportes', function($table){
            $table->foreign('evento_id')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
