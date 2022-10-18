<?php

namespace Database\Factories;

use App\Models\Genero;
use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GenerosGrupo>
 */
class GenerosGrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'grupo_id'=>Grupo::all()->random()->id,
            'genero_id'=>Genero::all()->random()->id
        ];
    }
}
