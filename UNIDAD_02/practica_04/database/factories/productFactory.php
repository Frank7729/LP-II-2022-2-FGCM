<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
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
            'description'=>$this->faker->unique()->text(250),
            'price'=>$this->faker->unique()->randomFloat(),
            'stock'=>$this->faker->unique()->randomNumber(),
            'category_id'=>category::all()->random()->id,
            'supplier_id'=>supplier::all()->random()->id
        ];
    }
}
