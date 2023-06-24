<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->date('fecha')->nullable();
            $table->enum('hora', ['00hrs','07hrs','08hrs' ,'09hrs', '10hrs', '11hrs', '12hrs', '13hrs', '14hrs', '15hrs', '16hrs', '17hrs', '18hrs', '19hrs', '20hrs', '21hrs', '22hrs'])->default('00hrs')->nullable();
            // $table->time('hora')->nullable();
            // $table->string('numero')->nullable();
            // $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            // $table->softDeletes();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('tecnico_id')->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->unsignedBigInteger('sala_id')->nullable();

            $table->foreign('cliente_id')->references('id')->on('persona');
            $table->foreign('tecnico_id')->references('id')->on('persona');
            $table->foreign('servicio_id')->references('id')->on('servicio');
            $table->foreign('sala_id')->references('id')->on('sala');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
