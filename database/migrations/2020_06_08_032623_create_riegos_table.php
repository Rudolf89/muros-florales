<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('activo');
            $table->integer('duracion_riego');
            $table->integer('activaciones_id');
            $table->boolean('encendido');
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
        Schema::dropIfExists('riegos');
    }
}
