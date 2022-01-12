<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoEmpresasTable extends Migration
{
    /**Migraciones Grupo Empresa
     * 
     * Corre las migraciones correspondientes para la tabla "grupo empresas"
     * en la base de datos (Adjunta los atributos correspondientes en la tabla).
     *
     * @return void
     */
    public function up()
    {
        /**
         * Definimos los atributos para la tabla "grupoempresas"
         */
        Schema::create('grupo_empresas', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('NombreCorto');
            $table->string('TipoSociedad');
            $table->string('Logo');
            $table->string('Correo');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Representante');
            $table->string('Socio1');
            $table->string('Socio2');
            $table->string('Socio3')->nullable();
            $table->string('Socio4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Funcion que regresa las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_empresas');
    }
}
