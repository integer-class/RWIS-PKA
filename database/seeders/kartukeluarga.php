<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kartukeluarga extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\citizenModel::factory(10)->create();

        \App\Models\kartukeluargaModel::factory()->create([
            'no_kk' => '472751886',
            'kepala_keluarga' => 'teo',
            'rt' => '1',
            'rw' => 'A',
            'kelurahan' => 'L',
            'kecamatan' => 'mbokor',
            'kabupaten' => 'mbokor etan',
            'provinsi' => 'petani',
        ]);

        
    }
}
