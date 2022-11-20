<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Waiter>
 */
class WaiterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cedula_mesero' => $this->faker->numerify("###-######-####") . $this->faker->randomLetter(CASE_UPPER),
            'primer_nombre' => $this->faker->firstName(),
            'segundo_nombre' => null,
            'primer_apellido' => $this->faker->lastName(),
            'segundo_apellido' => null,
            'numero_telefono' => $this->faker->phoneNumber('####-####'),
        ];
    }
}
