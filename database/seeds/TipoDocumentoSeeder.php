<?php
use \App\ad_tipo_documentos;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad_tipo_documentos::create([
            'nombre_documento'=>'CEDULA DE IDENTIDAD',
            'abreviatura'=>'C.I.',
            'estado' => 'AC',            
        ]);
    }
}
