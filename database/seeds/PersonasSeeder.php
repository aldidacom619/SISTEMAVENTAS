<?php

use \App\ad_personas;
use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad_personas::create([            
            'id_empresa' => 1,            
            'id_aplicacion' => 1,
            'id_logs' => 1,
            'nombres' => 'ALVARO DIEGO',
            'primer_apellido' => 'DAZA',
            'segundo_apellido' => 'ALCARAZ',
            'nro_documento' => '6703132',
            'tipo_documento' => 1,
            'direccion' => 'LA PAZ',
            'tel_cel' => '78720504',
            'fecha_nacimiento' => '1989-11-26',
            'id_cargo' => 1,
            'fecha_registro' => now(),
            'estado'=>'AC'
        ]);
    }
}
