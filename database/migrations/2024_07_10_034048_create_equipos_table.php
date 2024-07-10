<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('tipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serial')->unique();
            $table->string('procesador');
            $table->string('ram');
            $table->string('storage');
            $table->string('so');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}