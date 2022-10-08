<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     *
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->unique->name(),
            'description'=>$this->faker->unique->text(2000),
            'dateinit'=>$this->faker->unique->dateTime(),
            'dateend'=>$this->faker->unique->dateTime(),
            'status'=>$this->faker->randomElement(['1', '2', '0']),
            'rules'=>$this->faker->unique->words(20, true)
        ];
    }
}
