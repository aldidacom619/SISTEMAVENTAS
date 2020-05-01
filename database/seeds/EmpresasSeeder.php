<?php
use \App\ad_empresas;
use Illuminate\Database\Seeder;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {         
        ad_empresas::create([            
            'id_aplicacion' => 1,
            'denominacion'=>'EMPRESA ALDIDACOM',
            'correo'=>'aldidacom@gmail.com',
            'abreviatura'=>'EAL',
            'propietario'=>'ALVARO DIEGO DAZA ALCARAZ',
            'telefono'=>'78720504',
            'direccion'=>'LA PAZ',
            'descripcion_empresa'=>'EMPRESA PROPIETARIA DEL SISTEMA',
            'fecha'=>'2020-05-05',
            'valoracion_producto'=>1,
            'estado'=>'AC'
        ]);
    }
}
