->unsigned()<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdOpcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_opciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_modulo')->unsigned();
            $table->bigInteger('id_opcion')->unsigned();
            $table->string('opcion',20);
            $table->string('descripcion',250);
            $table->string('link',250);
            $table->string('icono',50);
            $table->Integer('nivel');
            $table->Integer('orden');
            $table->string('estado',10);
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
        Schema::dropIfExists('ad_opciones');
    }
}
