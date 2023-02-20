<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('aerolinea_id')->unsigned(); //relaciona con aerolíneas
            $table->foreign('aerolinea_id')->references('id')->on('aerolineas')->onDelete("cascade");
            $table->string('salida');
            $table->bigInteger('destino_id')->unsigned(); //relaciona destino
            $table->foreign('destino_id')->references('id')->on('destinos')->onDelete("cascade");
            $table->string('avion');
            $table->string('embarque');
            $table->string('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
