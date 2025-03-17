<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plate_number' => $this->faker->unique()->randomElement(array ('A123-5862-5852','B123-5862-5852','C123-5862-5852')),
			'brand' => $this->faker->unique()->randomElement(array ('benz','mercedes','bmw')),
			'model' => $this->faker->unique()->randomElement( array ('cl1','cl2','cl3')),
			'year' => $this->faker->unique()->randomElement( array ('2020','2021','2022')),
        ];
    }
}
