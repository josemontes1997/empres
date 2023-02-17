<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('tipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('ticket');
            $table->string('serie');
            $table->string('n_producto');
            $table->string('so');
            $table->string('procesador');
            $table->string('hdd');
            $table->string('ssd');
            $table->string('ram');
            $table->string('mantenimiento');
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
        Schema::dropIfExists('empresas');
    }
}
