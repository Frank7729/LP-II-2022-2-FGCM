<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'code'=>$this->faker->randomNumber(),
            'user_id'=>User::all()->random()->id,
            'category_id'=>Category::all()->random()->id
        ];
    }
}
