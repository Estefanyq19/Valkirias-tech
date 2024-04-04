<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidad', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habitaciones_id')->references('id')->on('habitaciones');
            // $table->foreignId('reserva_id')->references('id')->on('reserva');
            $table->date('fecha_inicio');
            $table->date('fecha_salida');
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
        Schema::dropIfExists('disponibilidad');
    }
};
