<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_logs', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->integer('id_usuario');
            $table->bigInteger('id_accion')->unsigned();            
            $table->dateTime('fecha');
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
        Schema::dropIfExists('ad_logs');
    }
}
