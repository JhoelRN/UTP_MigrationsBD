<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            // $table->uuid('unique_id')->unique()->nullable($value = true)->default(DB::raw('uuid()'));
            $table->uuid('unique_id')->unique()->default(DB::raw('uuid()'));
            $table->string('descripcion')->nullable();
            // $table->softDeletes();
            // $table->enum('estado', ['activo','inactivo','eliminado'])->nullable($value = true)->default('activo');
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
    }
}
