<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_propietario');
            $table->string('marca_vehiculo');
            $table->string('modelo_vehiculo');
            $table->datetime('fecha_entrada');
            $table->string('numero_chasis');
            $table->string('trabajo');
            $table->datetime('fecha_salida');
            $table->double('mano_obra');
            $table->string('estado');
            
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
        Schema::dropIfExists('mantenimientos');
    }
}
