<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Musico>
 */
class MusicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->word(20);
        return [
            'nombre'=>$name,
            'instrumento'=>$this->faker->words(1, true),
            'lugarnacimiento'=>$this->faker->city(),
            'fechanacimiento'=>$this->faker->date(),
            'fechamuerte'=>$this->faker->date(),
        ];
    }
}
