<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'key' => $this->faker->word(),
            'value' => $this->faker->words(4, true),
            'field' => $this->faker->word(),
            'options' => \json_encode([])
        ];
    }
}
