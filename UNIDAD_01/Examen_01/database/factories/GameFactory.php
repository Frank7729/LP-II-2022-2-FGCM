<?php

namespace Database\Factories;

use App\Models\Place;
use App\Models\Tournament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'local'=>$this->faker->unique->words(3, true),
            'visitor'=>$this->faker->unique->words(5, true),
            'datetime'=>$this->faker->unique->dateTime(),
            'global'=>$this->faker->unique->randomNumber(),
            'gvisitante'=>$this->faker->unique->randomNumber(),
            'status'=>$this->faker->randomElement(['activo', 'inactivo']),
            'winner'=>$this->faker->unique->words(2, true),
            'tournament_id'=>Tournament::all()->random()->id,
            'place_id'=>Place::all()->random()->id
        ];
    }
}
