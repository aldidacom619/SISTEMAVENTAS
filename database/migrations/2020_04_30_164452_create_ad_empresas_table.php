<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_aplicacion');
            $table->string('denominacion',100);
            $table->string('correo',100);
            $table->string('abreviatura',100);
            $table->string('propietario',100);
            $table->string('telefono',100);
            $table->string('direccion',100);
            $table->string('descripcion_empresa',200);
            $table->date('fecha');
            $table->Integer('valoracion_producto');
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
        Schema::dropIfExists('ad_empresas');
    }
}
