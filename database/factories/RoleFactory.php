<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $title =  $this->faker->word(),
            'slug' => Str::lower($title),
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
