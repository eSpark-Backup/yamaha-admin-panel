<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Group;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'group_id' => null,
            'prefecture_id' => null,
            'department_id' => null,
            'name' => $this->faker->word(),
            'code' => $this->faker->numberBetween(2000),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->city(),
            'zip' => $this->faker->postcode(),
            'phone' => $this->faker->phoneNumber(),
            'fax' => $this->faker->phoneNumber(),
            'business_hours' => $this->faker->paragraph(),
            'regular_holidays' => $this->faker->paragraph(),
            'access' => $this->faker->paragraph(),
            'established_at' => $this->faker->dateTime(),
            'status' => 0
        ];
    }
}
