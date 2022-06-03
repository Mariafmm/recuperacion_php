<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LIbrosPresentacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Titulo' =>$this->faker->sentence(),
            'Libro' =>$this->faker->text(),
            'id_users'=> '1'
        ];
        // por alguna razon los factorys hay que mandarlos a los seeders y comentarlos pero aun no termino de entender porque
    }
}
