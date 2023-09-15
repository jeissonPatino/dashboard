<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosContables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('datosContables', function(Blueprint $table){
            $table->bigIncrements('idDatosContables');
            $table->unsignedBigInteger('idDatosPersonales'); 
            $table->integer('activo');
            $table->integer('pasivo');
            $table->integer('patrimonio');
            $table->integer('ingresos');
            $table->integer('egresos');
            $table->date('fechaCreacion');
        });

        Schema::table('datosContables', function (Blueprint $table) {
            $table->foreign('idDatosPersonales')->references('idDatosPersonales')->on('datosPersonales');
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
