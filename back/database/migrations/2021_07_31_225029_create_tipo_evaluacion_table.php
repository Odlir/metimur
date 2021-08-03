<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_evaluacion', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_evaluacion_nombre');
            $table->string('tipo_evaluacion_estado_id')->nullable();
            $table->string('tipo_evaluacion_usuario_creacion_id')->nullable();
            $table->string('tipo_evaluacion_usuario_modificacion_id')->nullable();
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
        Schema::dropIfExists('tipo_evaluacion');
    }
}
