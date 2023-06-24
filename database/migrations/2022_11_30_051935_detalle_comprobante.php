<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleComprobante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('detalle_comprobante', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->integer('cantidad')->nullable();
            $table->double('precio')->nullable();
            $table->double('subtotal')->nullable();
            $table->double('igv')->nullable();
            $table->double('total')->nullable();
            // $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->unsignedBigInteger('comprobante_id')->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();
            // $table->unsignedBigInteger('prenda_id')->nullable();

            $table->foreign('comprobante_id')->references('id')->on('comprobante');
            $table->foreign('servicio_id')->references('id')->on('servicio');
            // $table->foreign('prenda_id')->references('id')->on('prenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_comprobante');
    }
}
