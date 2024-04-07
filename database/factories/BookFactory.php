<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_book' => $this->faker->sentence(),
            'author_name' => $this->faker->name(),
            'editorial_name' => $this->faker->company(),
            'number_pages' => $this->faker->numberBetween(100, 500),
            'number_chapters' => $this->faker->numberBetween(10, 40),
            'publication_date' => $this->faker->date(),
            'synopsis' => $this->faker->paragraph(),
            'available' => $this->faker->boolean(75),
        ];
    }
}
