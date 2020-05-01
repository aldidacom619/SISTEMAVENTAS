<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncatetables(['ad_tipousuarios','ad_acciones','ad_logs','ad_tipo_documentos','ad_aplicaciones']);

        $this->call(AccionSeeder::class); 
        $this->call(LogsSeeder::class); 
        $this->call(TipoUserSeeder::class);        
        $this->call(TipoDocumentoSeeder::class);    
        $this->call(AplicacionesSeeder::class);    

        

    }
    protected function truncatetables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0'); //DESACTIVA LA REVISION DE LLAVES FORANEAS
    	foreach ($tables as $table) {
    		DB::table($table)->truncate(); //borra primero todos los datos
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1'); //ACTIVA LA REVISION DE LLAVES FORANEAS
    }
}
