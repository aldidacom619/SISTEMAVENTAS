<?php
use \App\ad_opciones;
use Illuminate\Database\Seeder;

class OpcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad_opciones::create([                        
            'id_modulo' => 1,
            'id_opcion' => 1,
            'opcion' => 'EMPRESAS',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 1,
            'orden' => 0,
            'estado'=>'AC'
        ]);
        ad_opciones::create([                        
            'id_modulo' => 1,
            'id_opcion' => 1,
            'opcion' => 'Nueva Empresa',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 2,
            'orden' => 1,
            'estado'=>'AC'
        ]);
        ad_opciones::create([                        
            'id_modulo' => 1,
            'id_opcion' => 1,
            'opcion' => 'Lista Empresa',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 2,
            'orden' => 2,
            'estado'=>'AC'
        ]);
        ad_opciones::create([                        
            'id_modulo' => 1,
            'id_opcion' => 1,
            'opcion' => 'Desactivar Empresa',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 2,
            'orden' => 3,
            'estado'=>'AC'
        ]);
        ad_opciones::create([                        
            'id_modulo' => 2,
            'id_opcion' => 5,
            'opcion' => 'USUARIOS',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 1,
            'orden' => 0,
            'estado'=>'AC'
        ]);
        ad_opciones::create([                        
            'id_modulo' => 2,
            'id_opcion' => 5,
            'opcion' => 'Nueva Usuario',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 2,
            'orden' => 1,
            'estado'=>'AC'
        ]);
        ad_opciones::create([                        
            'id_modulo' => 2,
            'id_opcion' => 5,
            'opcion' => 'Lista Usuario',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 2,
            'orden' => 2,
            'estado'=>'AC'
        ]);
        ad_opciones::create([                        
            'id_modulo' => 2,
            'id_opcion' => 5,
            'opcion' => 'Roles Usuario',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 2,
            'orden' => 3,
            'estado'=>'AC'
        ]);
        ad_opciones::create([                        
            'id_modulo' => 2,
            'id_opcion' => 5,
            'opcion' => 'Desactivar Usuario',
            'descripcion' => '',
            'link' => '',
            'icono' => '',
            'nivel' => 2,
            'orden' => 4,
            'estado'=>'AC'
        ]);
    }
}
