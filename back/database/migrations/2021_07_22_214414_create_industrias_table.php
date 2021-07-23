<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrias', function (Blueprint $table) {
            $table->id();
            $table->string('industria_nombre')->nullable();
            $table->char('industria_estado_id',1)->comment('0-Inactivo/1-Activo')->nullable();
            $table->string('industria_usuario_creacion_id')->nullable();
            $table->string('industria_usuario_modificacion_id')->nullable();
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
        Schema::dropIfExists('industrias');
    }
}
