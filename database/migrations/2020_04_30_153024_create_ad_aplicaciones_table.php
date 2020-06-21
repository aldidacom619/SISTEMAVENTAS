<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdAplicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_aplicaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion',250)->unique();
            $table->string('abreviatura',20)->unique();
            $table->string('nombre_aplicacion',250)->unique();
            $table->string('useradministrador',4);
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
        Schema::dropIfExists('ad_aplicaciones');
    }
}
