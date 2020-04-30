<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarLlavesForaneas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ad_logs', function(Blueprint $table){            
            $table->foreign('id_accion')->references('id')->on('ad_acciones');
        });
        Schema::table('ad_modulos', function(Blueprint $table){            
            $table->foreign('id_aplicacion')->references('id')->on('ad_aplicaciones');
        });
        Schema::table('ad_configuraciones_empresas', function(Blueprint $table){            
            $table->foreign('id_empresa')->references('id')->on('ad_empresas');
        });
        Schema::table('ad_opciones', function(Blueprint $table){            
            $table->foreign('id_modulo')->references('id')->on('ad_modulos');
        });
        Schema::table('ad_cargos', function(Blueprint $table){            
            $table->foreign('id_empresa')->references('id')->on('ad_empresas');
        });
        Schema::table('users', function(Blueprint $table){            
            $table->foreign('id_persona')->references('id')->on('ad_personas');
            $table->foreign('id_tipousuario')->references('id')->on('ad_tipousuarios');
        });
        Schema::table('ad_opciones_usuarios', function(Blueprint $table){            
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_opcion')->references('id')->on('ad_opciones');
            $table->foreign('id_logs')->references('id')->on('ad_logs');
        });
        Schema::table('ad_personas', function(Blueprint $table){            
            $table->foreign('id_empresa')->references('id')->on('ad_empresas');
            $table->foreign('id_aplicacion')->references('id')->on('ad_aplicaciones');
            $table->foreign('tipo_documento')->references('id')->on('ad_tipo_documentos');
            $table->foreign('id_cargo')->references('id')->on('ad_cargos');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ad_logs', function(Blueprint $table){
            $table->dropForeign(['id_accion']);            
        });
        Schema::table('ad_modulos', function(Blueprint $table){
            $table->dropForeign(['id_aplicacion']);            
        });
        Schema::table('ad_configuraciones_empresas', function(Blueprint $table){
            $table->dropForeign(['id_empresa']);            
        });
        Schema::table('ad_opciones', function(Blueprint $table){
            $table->dropForeign(['id_modulo']);            
        });
        Schema::table('ad_cargos', function(Blueprint $table){
            $table->dropForeign(['id_empresa']);            
        });
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign(['id_persona']);            
            $table->dropForeign(['id_tipousuario']); 
        });
        Schema::table('ad_opciones_usuarios', function(Blueprint $table){
            $table->dropForeign(['id_usuario']);            
            $table->dropForeign(['id_opcion']); 
            $table->dropForeign(['id_logs']); 
        });
        Schema::table('ad_personas', function(Blueprint $table){
            $table->dropForeign(['id_empresa']);            
            $table->dropForeign(['id_aplicacion']); 
            $table->dropForeign(['tipo_documento']); 
            $table->dropForeign(['id_cargo']); 
        });
    }
}
