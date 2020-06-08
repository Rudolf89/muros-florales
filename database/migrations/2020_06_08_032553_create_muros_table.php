<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muros', function (Blueprint $table) {
            $table->id();
            $table->integer('humedad');
            $table->integer('temperatura');
            $table->double('latitud');
            $table->double('longitud');
            $table->boolean('permanente');
            $table->integer('riego_id');
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
        Schema::dropIfExists('muros');
    }
}
