<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdConfiguracionesEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_configuraciones_empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_empresa')->unsigned();            
            $table->string('concepto',250);
            $table->string('valor1',250);
            $table->string('valor2',250);
            $table->date('fecha');
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
        Schema::dropIfExists('ad_configuraciones_empresas');
    }
}
