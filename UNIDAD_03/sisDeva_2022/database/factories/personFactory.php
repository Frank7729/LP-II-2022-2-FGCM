<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class personFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'fnacimiento' => $this->faker->date(),
            'sexo'=> $this->faker->randomElement(['Masculino', 'Femenino']),
            'celular'=> $this->faker->phoneNumber(),
        ];
    }
}
