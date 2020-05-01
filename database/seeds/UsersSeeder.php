<?php
use \App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // es necesario importar

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'id_persona'=>1,
            'name'=>'ALVARO DIEGO DAZA ALCARAZ',
            'email'=>'admin@admin',
            'password' => bcrypt('12345678'),
            'id_tipousuario'=>1,
        ]);
    }
}
