<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number'=>$this->faker->unique->randomNumber(),
            'date'=>$this->faker->unique->date(),
            'total'=>$this->faker->unique->randomNumber(),
            'client_id'=>Client::all()->random()->id
        ];
    }
}
