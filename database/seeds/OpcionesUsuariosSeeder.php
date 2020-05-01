<?php
use \App\ad_opciones_usuarios;
use Illuminate\Database\Seeder;

class OpcionesUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad_opciones_usuarios::create([            
            'id_usuario' => 1,
            'id_opcion'=> 1,
            'id_logs'=> 1,            
            'estado'=>'AC'
        ]);
        ad_opciones_usuarios::create([            
            'id_usuario' => 1,
            'id_opcion'=> 2,
            'id_logs'=> 1,            
            'estado'=>'AC'
        ]);
        ad_opciones_usuarios::create([            
            'id_usuario' => 1,
            'id_opcion'=> 3,
            'id_logs'=> 1,            
            'estado'=>'AC'
        ]);
        ad_opciones_usuarios::create([            
            'id_usuario' => 1,
            'id_opcion'=> 4,
            'id_logs'=> 1,            
            'estado'=>'AC'
        ]);
    }
}
