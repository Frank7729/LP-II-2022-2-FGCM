<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->unique->sentence(),
            'date'=>$this->faker->date(),
            'description'=>$this->faker->text(2000),
            'status'=>$this->faker->randomElement(['publicado', 'revisión']),
            'user_id'=>User::all()->random()->id,
            'category_id'=>Category::all()->random()->id
        ];
    }
}
