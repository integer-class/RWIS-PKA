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
            'agama' => 'islam',
            'nama' => 'teo',
            'status_kependudukan' => 'Warga Kontrak',
            'rt' => '1',
            'jenis_kelamin' => 'L',
            'alamat' => 'mbokor',
            'domisili' => 'mbokor etan',
            'golongan_darah' => 'A',
            'pekerjaan' => 'petani',
            'no_kk' => '472751886',
            'tanggal_lahir' => "2012-12-12",
        ]);


    }
}
