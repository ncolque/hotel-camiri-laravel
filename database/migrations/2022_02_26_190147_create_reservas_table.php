<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('fch_reserva');
            $table->date('fch_desde');
            $table->date('fch_hasta');
            $table->foreignId('habitacion_id')->nullable()->constrained()->onDelete('SET NULL');
            $table->foreignId('cliente_id')->nullable()->constrained()->onDelete('SET NULL');
            /* $table->timestamps(); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
