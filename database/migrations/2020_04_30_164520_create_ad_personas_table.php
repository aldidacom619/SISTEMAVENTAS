<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_empresa')->unsigned();          
            $table->bigInteger('id_aplicacion')->unsigned();
            $table->bigInteger('id_logs')->unsigned();
            $table->string('nombres',250);
            $table->string('apellidos',250);
            $table->string('nro_documento',50);
            $table->bigInteger('tipo_documento')->unsigned();            
            $table->string('direccion',250);
            $table->string('tel_cel',50);
            $table->date('fecha_nacimiento');
            $table->bigInteger('id_cargo')->unsigned();
            $table->dateTime('fecha_registro');
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
        Schema::dropIfExists('ad_personas');
    }
}
