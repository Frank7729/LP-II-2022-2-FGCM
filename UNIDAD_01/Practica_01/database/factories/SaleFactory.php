<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'amount'=>$this->faker->unique->randomNumber(),
            'total'=>$this->faker->unique->randomNumber(),
            'invoice_id'=>Invoice::all()->random()->id,
            'product_id'=>Product::all()->random()->id
        ];
    }
}
