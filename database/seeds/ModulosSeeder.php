<?php
use \App\ad_modulos;
use Illuminate\Database\Seeder;

class ModulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad_modulos::create([            
            'id_aplicacion' => 1,
            'descripcion'=>'REGISTRO DE EMPRESAS',
            'abreviatura'=>'RDE',
            'nombre'=>'EMPRESAS',
            'estado'=>'AC'
        ]);
        ad_modulos::create([            
            'id_aplicacion' => 1,
            'descripcion'=>'GESTION DE USUARIOS',
            'abreviatura'=>'GDU',
            'nombre'=>'USUARIOS',
            'estado'=>'AC'
        ]);
    }
}
