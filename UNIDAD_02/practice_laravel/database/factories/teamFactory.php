<?php

namespace Database\Factories;

use App\Models\cycle;
use App\Models\school;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\team>
 */
class teamFactory extends Factory
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
            'description'=>$this->faker->text(250),
            'type'=>$this->faker->randomElement([1,2]),
            'color'=>$this->faker->word(30),
            'status'=>$this->faker->randomElement([1,2]),
            'school_id'=>school::all()->random()->id,
            'cycle_id'=>cycle::all()->random()->id,
        ];
    }
}
