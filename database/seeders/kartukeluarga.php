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
            'rw' => '1',
            'kelurahan' => 'mbokor',
            'kecamatan' => 'mbokor',
            'alamat' => 'perumahan Witwicky 3',
            'kabupaten' => 'malang',
            'provinsi' => 'jawa timur',
        ]);
        \App\Models\kartukeluargaModel::factory()->create([
            'no_kk' => '472233445',
            'kepala_keluarga' => 'Arsyinta',
            'rt' => '3',
            'rw' => '3',
            'kelurahan' => 'mbokor',
            'kecamatan' => 'mbokor',
            'alamat' => 'perumahan Witwicky 4',
            'kabupaten' => 'malang',
            'provinsi' => 'jawa timur',
        ]);
        
        \App\Models\kartukeluargaModel::factory()->create([
            'no_kk' => '472751887',
            'kepala_keluarga' => 'Budi',
            'rt' => '2',
            'rw' => '1',
            'kelurahan' => 'mbokor',
            'kecamatan' => 'mbokor',
            'alamat' => 'perumahan Witwicky 5',
            'kabupaten' => 'malang',
            'provinsi' => 'jawa timur',
        ]);

        \App\Models\kartukeluargaModel::factory()->create([
            'no_kk' => '472751894',
            'kepala_keluarga' => 'Rudi',
            'rt' => '1',
            'rw' => '1',
            'alamat' => 'perumahan Witwicky 5',
            'kelurahan' => 'mbokor',
            'kecamatan' => 'mbokor',
            'kabupaten' => 'malang',
            'provinsi' => 'jawa timur',
        ]);

        \App\Models\kartukeluargaModel::factory()->create([
            'no_kk' => '472751901',
            'kepala_keluarga' => 'Lia',
            'rt' => '2',
            'rw' => '1',
            'alamat' => 'perumahan Witwicky 5',
            'kelurahan' => 'mbokor',
            'kecamatan' => 'mbokor',
            'kabupaten' => 'malang',
            'provinsi' => 'jawa timur',
        ]);

        \App\Models\kartukeluargaModel::factory()->create([
            'no_kk' => '472751906',
            'kepala_keluarga' => 'Ahmad',
            'rt' => '3',
            'rw' => '1',
            'alamat' => 'perumahan Witwicky 5',
            'kelurahan' => 'mbokor',
            'kecamatan' => 'mbokor',
            'kabupaten' => 'malang',
            'provinsi' => 'jawa timur',
        ]);

        \App\Models\kartukeluargaModel::factory()->create([
            'no_kk' => '472751911',
            'kepala_keluarga' => 'Ali',
            'rt' => '1',
            'rw' => '1',
            'alamat' => 'perumahan Witwicky 5',
            'kelurahan' => 'mbokor',
            'kecamatan' => 'mbokor',
            'kabupaten' => 'malang',
            'provinsi' => 'jawa timur',
        ]);

    }
}
