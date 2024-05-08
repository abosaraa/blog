<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TagFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            // Add other fields as necessary
        ];
    }


}
