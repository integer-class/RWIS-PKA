<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class citizen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\citizenModel::factory(10)->create();

        \App\Models\citizenModel::factory()->create([
            'nik' => '472751886',
            'nama' => 'teo',
            'no_kk' => '472751886',
            'alamat' => 'mbokor',
            'status_kependudukan' => 'Warga Kontrak',
            'domisili' => 'mbokor etan',
            'rt' => '1',
            'agama' => 'islam',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'petani',
            'tanggal_lahir' => "2012-12-12",
            'status' => "janda/duda",
            'pendidikan' => "SMA",
            'luas_rumah' => "90",
            'gaji' => "200.000-400.000",
            'skorbansos' => 290,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '123456789',
            'nama' => 'Eva',
            'no_kk' => '472751887',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Tengah',
            'rt' => '2',
            'agama' => 'Hindu',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'Guru',
            'tanggal_lahir' => "1988-06-30",
            'status' => "janda/duda", 
            'pendidikan' => "SD",
            'luas_rumah' => "65",
            'gaji' => "600.000-1.000.000",
            'skorbansos' => 290
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '12341234',
            'nama' => 'Uzi',
            'no_kk' => '472751887',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Tengah',
            'rt' => '2',
            'agama' => 'Ateis',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'webdeveloper',
            'tanggal_lahir' => "1988-06-30",
            'status' => "janda/duda", 
            'pendidikan' => "SD",
            'luas_rumah' => "65",
            'gaji' => "0-200.000",
            'skorbansos' =>290,
        ]);
        

        
    }
}

            // 'nik' => $this->faker->unique()->randomNumber(9),
            // 'nama' => $this->faker->name(),
            // 'no_kk' => $this->faker->unique()->randomNumber(9),
            // 'alamat' => $this->faker->address(),
            // 'status_kependudukan' => $this->faker->randomElement(['Warga kontrak','warga Tetap']),
            // 'domisili' => $this->faker->address(),
            // 'rt' => $this->faker->unique()->randomNumber(1),            
            // 'agama' => $this->faker->address(),
            // 'golongan_darah' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            // 'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            // 'pekerjaan' => $this->faker->jobTitle(),
            // 'status' => $this->faker->randomElement('janda/duda','miskin','sakit parah','sebatang kara'),
            // 'tanggal_lahir' => $this->faker->date(),
            // 'pendidikan' => $this->faker->randomElement('sd','smp','sma','tidak sekolah'),
            // 'luas_rumah' => $this->faker->randomNumber(3),
            // 'gaji' => $this->faker->randomNumber(7),