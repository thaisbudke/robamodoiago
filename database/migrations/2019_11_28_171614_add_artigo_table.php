<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArtigoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigo', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->string('titulo');
            $table->string('descricao');
            $table->dateTime('data');
            $table->string('orientador');
            $table->string('banca1');
            $table->string('banca2');
            $table->integer('resultado');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artigo', function (Blueprint $table) {
            //
        });
    }
}
