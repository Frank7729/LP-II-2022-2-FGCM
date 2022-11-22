<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\supplier>
 */
class supplierFactory extends Factory
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
            'name'=>$name,
            'slug'=>Str::slug($name),
            'direction'=>$this->faker->unique()->word(50),
            'phone'=>$this->faker->unique()->phoneNumber(),
            'email'=>$this->faker->unique()->email(),
            'web'=>$this->faker->unique()->word(50)
        ];
    }
}
