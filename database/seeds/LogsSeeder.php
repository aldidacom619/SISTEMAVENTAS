<?php
use \App\ad_logs;
use Illuminate\Database\Seeder;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad_logs::create([
            'id_usuario'=>0,
            'id_accion'=>1,
            'fecha'=> now()           
        ]);
    }
}
