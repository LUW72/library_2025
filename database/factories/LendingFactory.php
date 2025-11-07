<?php

namespace Database\Factories;

use App\Models\Copy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
<<<<<<< HEAD
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lening>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lending>
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
 */
class LendingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'copy_id' => Copy::all()->random()->id,
<<<<<<< HEAD
            'start' => fake()->date(),
            'end' => fake()->date(),
            'extension' =>rand(0, 1),
            'notice' => rand(0,3)
=======
            "start" => fake()->date(),
            "end" => fake()->date(),
            "extension" => rand(0, 1),
            "notice" => rand(0, 3)
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
        ];
    }
}
