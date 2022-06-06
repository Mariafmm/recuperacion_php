<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Libro;
use Database\Factories\LIbrosPresentacionFactory;

class LibrosPresentacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

            Libro::create([
            'id'=>'1',
            'Titulo' => 'El conejito soñador',
            'Libro' => 'Había una vez un conejito soñador que vivía en una casita en medio del bosque, rodeado de libros y fantasía, pero no tenía amigos. Todos le habían dado de lado porque se pasaba el día contando historias imaginarias sobre hazañas caballerescas, aventuras submarinas y expediciones extraterrestres. Siempre estaba inventando aventuras como si las hubiera vivido de verdad, hasta que sus amigos se cansaron de escucharle y acabó quedándose solo.',
            'id_users'=> '1'
            
            ]);
            Libro::create([   
            'id'=>'2',
            'Titulo' => 'El conejito soñador',
            'Libro' => 'Había una vez un conejito soñador que vivía en una casita en medio del bosque, rodeado de libros y fantasía, pero no tenía amigos. Todos le habían dado de lado porque se pasaba el día contando historias imaginarias sobre hazañas caballerescas, aventuras submarinas y expediciones extraterrestres. Siempre estaba inventando aventuras como si las hubiera vivido de verdad, hasta que sus amigos se cansaron de escucharle y acabó quedándose solo.',
            'id_users'=> '1'
            ]);
    
        
            Libro::factory()->count(5)->create();
    }
}
