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
            'author' => fake("hu_HU")->name(),
            'title' => fake()->sentence()
<<<<<<< HEAD
=======
            
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
        ];
    }
}
