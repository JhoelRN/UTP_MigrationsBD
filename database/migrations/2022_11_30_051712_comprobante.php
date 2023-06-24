<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comprobante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->string('numero')->nullable();
            $table->string('serie')->nullable();
            $table->enum('tipo', ['factura', 'boleta'])->default('boleta');
            // $table->string('tipo')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            // $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            // $table->softDeletes();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->unsignedBigInteger('persona_id')->nullable();
            // $table->unsignedBigInteger('direccion_id')->nullable();

            $table->foreign('persona_id')->references('id')->on('persona');
            // $table->foreign('direccion_id')->references('id')->on('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprobante');
    }
}
