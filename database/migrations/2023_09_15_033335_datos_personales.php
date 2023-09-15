<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosPersonales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('datosPersonales', function (Blueprint $table) {
            $table->bigIncrements('idDatosPersonales');
            $table->string('Nombres');
            $table->unsignedBigInteger('idTipoDocumento'); 
            $table->unsignedBigInteger('idGenero'); 
            $table->string('idCiudad'); 
            $table->unsignedBigInteger('idTipoProfesion'); 
            $table->unsignedBigInteger('idTipoVinculacion'); 
            $table->date('fechaNacimiento');
            $table->date('fechaVinculacion');
            $table->boolean('estado');
            $table->date('fechaCreacion');
        });

        Schema::table('datosPersonales', function (Blueprint $table) {
            $table->foreign('idTipoDocumento')->references('idTipoDocumento')->on('tipoDocumento');
            $table->foreign('idGenero')->references('idGenero')->on('genero');
            $table->foreign('idCiudad')->references('idCiudad')->on('ciudad');
            $table->foreign('idTipoProfesion')->references('idTipoProfesion')->on('tipoProfesion');
            $table->foreign('idTipoVinculacion')->references('idTipoVinculacion')->on('tipoVinculacion');
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
