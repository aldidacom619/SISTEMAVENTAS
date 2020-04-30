<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdOpcionesUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_opciones_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_usuario');            
            $table->Integer('id_opcion');
            $table->Integer('id_logs');            
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
        Schema::dropIfExists('ad_opciones_usuarios');
    }
}
