<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;

class PersonasPresentacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'id'=>'1',
            'nombre'=> 'prueba',
            'email'=> 'prueba@gmail.com',
            'password'=> password_hash('prueba1',PASSWORD_DEFAULT)
        ]);
        // DB::table('users')->insert($PersonasFalsas);
    }
}
