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
    		'name'=>'ADMIN ADMIN',
            'email'=>'admin@admin',
            'password' => bcrypt('12345678')
        ]);
    }
}
