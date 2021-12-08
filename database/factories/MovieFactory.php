<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'movie_rating' => $this->faker->numberBetween(1,5),
            'movie_id' =>$this->faker->numberBetween(1,100000),
            'user_id' =>$this->faker->numberBetween(1,100000),
        ];
    }
}
