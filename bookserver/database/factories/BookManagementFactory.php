<?php

namespace Database\Factories;

use App\Models\BookManagement;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Boolean;

class BookManagementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = BookManagement::class;

    public function definition()
    {
//        $ran = rand(-200, 0);

        $date = $this->faker->dateTimeBetween('-200 day');

        return [
            'title' => $this->faker->word(),
            'author' => $this->faker->word(),
            'text' => $this->faker->text(),
            'isbn' => $this->faker->unique()->isbn13(),
            'image' => null,
            'user_id' => $this->user->id,
            'created_at' => $date,
            'updated_at' => $date,
        ];

    }
}
