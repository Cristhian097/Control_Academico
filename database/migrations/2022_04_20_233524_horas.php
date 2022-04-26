<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Horas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('horas', function (Blueprint $table) {
            $table->bengine="InnoDB";
            $table->bigIncrements('id');
            $table->string('dia');
            $table->string('hora_ini');
            $table->string('hora_fin');
            
            
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
