<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->increments('id'); //código identificador
            $table->integer('esportes_id')->unsigned();          //nome do atletas

            $table->string('nome');            //nome do atletas
            $table->timestamps();

        });

        Schema::table('atletas', function($table){
            $table->foreign('esportes_id')->references('id')->on('esportes');
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
