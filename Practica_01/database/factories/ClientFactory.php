<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname'=>$this->faker->unique->words(2, true),
            'lastname'=>$this->faker->unique->words(2, true),
            'direction'=>$this->faker->unique->words(2, true),
            'document'=>$this->faker->unique->words(2, true),
            'cellphone'=>$this->faker->unique->words(2, true),
            'email'=>$this->faker->unique->safeEmail()
        ];
    }
}
