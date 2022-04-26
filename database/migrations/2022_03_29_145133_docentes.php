<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Docentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('docentes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Directiva');
            $table->string('Nombre');
            $table->string('Cedula');
            $table->string('Email');
            $table->string('Telefono');
            $table->string('Titulo');
            $table->string('Cargo');
            $table->string('Fecha_de_Nacimiento');
            $table->string('Foto');
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
        //
    }
}
