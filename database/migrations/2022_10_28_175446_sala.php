<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->string('nro_sala')->nullable();
            $table->string('insumos')->nullable();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            // $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            // $table->string('campo2')->nullable();
            // $table->timestamps();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('tecnico_id')->nullable();

            $table->foreign('cliente_id')->references('id')->on('persona');
            $table->foreign('tecnico_id')->references('id')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sala');
    }
}
