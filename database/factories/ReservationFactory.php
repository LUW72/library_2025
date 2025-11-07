<?php

namespace Database\Factories;

use App\Models\Book;
<<<<<<< HEAD
use App\Models\Copy;
=======
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::all()->random()->id,
            'user_id' => User::all()->random()->id,
<<<<<<< HEAD
            'start' => fake()->date(),
            'message' =>rand(0, 1)
=======
            "start" => fake()->date(),
            "message" => rand(0, 1)
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
        ];
    }
}
