<?php

namespace Database\Factories;

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
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'price'=>$this->faker->randomNumber(),
            'unitStock'=>$this->faker->numberBetween(1,50),
            'cover'=>"coverphoto.jpg",
            'isVisible'=>$this->faker->boolean()    
        ];
    }
}
