<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaturalezaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturaleza', function (Blueprint $table) {
            $table->id();
            $table->string('naturaleza_nombre');
            $table->string('naturaleza_estado_id')->nullable();
            $table->string('naturaleza_usuario_creacion_id')->nullable();
            $table->string('naturaleza_usuario_modificacion_id')->nullable();
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
        Schema::dropIfExists('naturaleza');
    }
}
