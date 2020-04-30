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
            $table->Integer('id_empresa');          
            $table->Integer('id_aplicacion');
            $table->Integer('id_logs');
            $table->string('nombres',250);
            $table->string('apellidos',250);
            $table->string('nro_documento',50);
            $table->Integer('tipo_documento');            
            $table->string('direccion',250);
            $table->string('tel_cel',50);
            $table->date('fecha_nacimiento');
            $table->Integer('id_cargo');
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
