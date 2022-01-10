<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     *Migraciones Tarjetas
     * 
     * Corre las migraciones correspondientes para la tabla "Tarjetas"
     * en la base de datos (Adjunta los atributos correspondientes en la tabla).
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->string('Descripcion');
            $table->string('Link');
            $table->string('Archivo');
            $table->string('Modo');
            $table->timestamps();
        });
    }

    /**
     * Regresa las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
