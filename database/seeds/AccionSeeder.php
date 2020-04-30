<?php
use \App\ad_acciones;
use Illuminate\Database\Seeder;

class AccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad_acciones::create([
            'descripcion'=>'REGISTRO DE USUARIOS',
            'abreviatura'=>'RU',
            'nombre'=>'REGISTRO DE USUARIOS',
            'estado' => 'AC',            
        ]);
        ad_acciones::create([
            'descripcion'=>'AGREGAR ROLES',
            'abreviatura'=>'AR',
            'nombre'=>'AGREGAR ROLES',
            'estado' => 'AC',            
        ]);
    }
}
