<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_modulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_aplicacion')->unsigned();
            $table->string('descripcion',100);
            $table->string('abreviatura',20);
            $table->string('nombre',100);
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
        Schema::dropIfExists('ad_modulos');
    }
}
