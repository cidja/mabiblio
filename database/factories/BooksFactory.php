<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /* 'title' => $this->faker->name(),
            'author_firstname' => $this->faker->firstName(),
            'author_lastname'  => $this->faker->lastName(),
            'isbn' => $this->faker->unique()->Str::random(19),
            'pages_nb'  => $this->faker->Str::random(3), */
            
        ];
    }
}
