<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(array ('A','B','C')),
			'license_number' => $this->faker->unique()->randomElement(array ('LN1253625','LN1263625','LN1273625')),
			'phone_number' => $this->faker->unique()->randomElement( array ('+941234567','+94123457','+94123458')),
        ];
    }
}
