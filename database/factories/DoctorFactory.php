<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(1),
            'surname' => $this->faker->word(1),
            'patrname' => $this->faker->word(1),
            'age' => random_int(25, 65),
            'is_visible' => random_int(0, 1),
        ];
    }
}
