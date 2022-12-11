<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'score'=>$this->faker->randomFloat(null,1,5),
            'content'=>$this->faker->paragraph(),
            'user_id'=>User::all()->where('isAdmin', false)->random()->id,
            'product_id'=>Product::all()->random()->id
        ];
    }
}
