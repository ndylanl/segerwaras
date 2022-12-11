<?php

namespace Database\Factories;

use App\Models\Distributor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'location'=>$this->faker->address(),
            'timeOpen'=>$this->faker->time(),
            'timeClosed'=>$this->faker->time(),
            'distributor_id'=>Distributor::all()->random()->id
        ];
    }
}
