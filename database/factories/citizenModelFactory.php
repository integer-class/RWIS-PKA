<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\citizenModel>
 */
class citizenModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => $this->faker->unique()->randomNumber(9),
            'agama' => $this->faker->address(),
            'nama' => $this->faker->address(),
            'rt' => $this->faker->unique()->randomNumber(1),            
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'alamat' => $this->faker->address(),
            'golongan_darah' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'pekerjaan' => $this->faker->jobTitle(),
            'no_kk' => $this->faker->unique()->randomNumber(9),
        ];
    }
}
