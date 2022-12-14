<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emploiye>
 */
class EmploiyeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // -----------------Poure les donner du factory : ---------------

         return [
        'fullname' => $this->faker->name(),
        'registration_number' => $this->faker->randomDigit(),
        'hire_date' => $this->faker->date(),
        'depart' => $this->faker->word(),
        'address' => $this->faker->address(),
        'phone' => $this->faker->numberBetween(),
        'city' => $this->faker->city(),
    ];

        
    }
}
