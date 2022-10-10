<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname'=>$this->faker->unique->words(2, true),
            'direction'=>$this->faker->unique->words(2, true),
            'phone'=>$this->faker->unique->phoneNumber(),
            'email'=>$this->faker->unique->safeEmail(),
            'web'=>$this->faker->unique->words(2, true),
        ];
    }
}
