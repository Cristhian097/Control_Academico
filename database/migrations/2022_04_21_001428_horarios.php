<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('horarios', function (Blueprint $table) {
            $table->bengine="InnoDB";
            $table->bigIncrements('id');
            $table->string('jornada');
            $table->bigInteger('id_hora')->unsigned();
            $table->timestamps();
            $table->foreign('id_hora')->references('id')->on('horas')->onDelete("cascade");
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
