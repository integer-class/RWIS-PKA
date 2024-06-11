<?php

namespace Database\Factories;

use App\Models\CitizenModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeuanganModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Ensure citizens are loaded once and used across calls

        // Modify this to join the user and citizen tables correctly
        $users = UserModel::where('role', '!=', '3')->pluck('nik')->toArray();
        $ketua = CitizenModel::whereIn('nik', $users)->pluck('nama')->toArray();
        $citizen = CitizenModel::pluck('nama')->toArray();



        // Generate the amount for pemasukan first
        $pemasukanAmount = $this->faker->numberBetween(10, 99) * 1000;

        // Generate the amount for pengeluaran which is less than pemasukan
        $pengeluaranAmount = $this->faker->numberBetween(10, ($pemasukanAmount / 1000) - 1) * 1000;

        // Decide the jenis_data
        $jenisData = $this->faker->randomElement(['pemasukan', 'pengeluaran']);
        
        // Set jumlah based on jenis_data
        $jumlah = $jenisData === 'pemasukan' ? $pemasukanAmount : $pengeluaranAmount;
        
        //i want if the jenis_data is pemasukan then nama is $citizen
        //i want if the jenis_data is pengeluaran then nama is $ketua
        $nama = $jenisData === 'pemasukan' ? $this->faker->randomElement($citizen) : $this->faker->randomElement($ketua);

        return [
            'tanggal' => $this->faker->dateTimeBetween('2024-01-01', 'now'),
            'jenis_iuran' => $this->faker->randomElement(['iuran PHB', 'iuran kematian', 'iuran sampah', 'iuran listrik']),
            'jenis_data' => $jenisData,
            'jumlah' => $jumlah, // 5 digit numbers but in thousands
            'nama' => $nama, // Randomize from nama column from citizen table
            'rt' => $this->faker->randomElement(['1', '2', '3']),
        ];
    }
}

            // 'tanggal' 
            // 'jenis_iuran'
            // 'jenis_data' 
            // 'jumlah' 
            // 'nama' 
            // 'rt'
