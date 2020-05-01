<?php
use \App\ad_aplicaciones;
use Illuminate\Database\Seeder;

class AplicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        ad_aplicaciones::create([
            'descripcion'=>'APLICACION PRINCIPAL',
            'abreviatura'=>'AP',
            'nombre_aplicacion'=>'SISTEMA DE ADMINISTRACION',
            'useradministrador'=>'NO',
            'estado' => 'AC',            
        ]);
        ad_aplicaciones::create([
            'descripcion'=>'SISTEMA DE VENTAS',
            'abreviatura'=>'SV',
            'nombre_aplicacion'=>'SISTEMA DE VENTAS FARMACIA',
            'useradministrador'=>'SI',
            'estado' => 'AC',            
        ]);
    }
}
