<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookMangementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {

        $date = $this->faker->dateTimeBetween('-1000 day');

        return [
            'title' => $this->faker->word(),
            'author' => $this->faker->word(),
            'text' => $this->faker->text(),
            'isbn' => $this->faker->unique()->isbn13(),
            'image' => null,
            'user_id' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
