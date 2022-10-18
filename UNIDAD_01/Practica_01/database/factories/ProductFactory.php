<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'description'=>$this->faker->unique->words(2, true),
            'price'=>$this->faker->unique->randomNumber(),
            'stock'=>$this->faker->unique->randomNumber(),
            'supplier_id'=>Supplier::all()->random()->id,
            'category_id'=>Category::all()->random()->id
        ];
    }
}
