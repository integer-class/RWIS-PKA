<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KKmodel>
 */
class KKmodelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_kk' => $this->faker->unique()->randomNumber(9),
            'alamat' => $this->faker->address(),
            'rt' => $this->faker->numberBetween(1, 10),
            'rw' => $this->faker->randomNumber(3),
            'kecamatan' => $this->faker->city(),
            'kabupaten' => $this->faker->city(),
        ];
    }
}