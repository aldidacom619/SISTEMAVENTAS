<?php
use \App\ad_cargos;
use Illuminate\Database\Seeder;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         ad_cargos::create([            
            'id_empresa' => 1,
            'nombre_cargo'=>'GERENTE GENERAL',            
            'estado'=>'AC'
        ]);
    }
}
