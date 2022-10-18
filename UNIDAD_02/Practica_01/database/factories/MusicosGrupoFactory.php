<?php

namespace Database\Factories;

use App\Models\Grupo;
use App\Models\Musico;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MusicosGrupo>
 */
class MusicosGrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'instrumento'=>$this->faker->words(1, true),
            'fechainicio'=>$this->faker->date(),
            'fechafin'=>$this->faker->date(),
            'grupo_id'=>Grupo::all()->random()->id,
            'musico_id'=>Musico::all()->random()->id
        ];
    }
}
