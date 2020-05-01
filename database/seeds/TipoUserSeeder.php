<?php
use \App\ad_tipousuarios;
use Illuminate\Database\Seeder;

class TipoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad_tipousuarios::create([
            'denominacion'=>'SUPER ADMINISTRADOR',
            'estado' => 'AC',            
        ]);
       ad_tipousuarios::create([
            'denominacion'=>'ADMINISTRADOR APLICACION',
            'estado' => 'AC',            
        ]);
        ad_tipousuarios::create([
            'denominacion'=>'OPERADOR VENTAS',
            'estado' => 'AC',            
        ]);
        ad_tipousuarios::create([
            'denominacion'=>'OPERADOR ALMACEN',
            'estado' => 'AC',            
        ]);
    }
}
