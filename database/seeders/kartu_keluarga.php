<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kartu_keluarga extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\KKmodel::factory(10)->create();

        
        \App\Models\KKmodel::factory()->create([
            'no_kk' => '472751886',
            'alamat' => 'Jl. Test No. 1',
            'rt' => '001', // contoh nomor RT
            'rw' => '002', // contoh nomor RW
            // 'kelurahan' => 'Nama Kelurahan',
            'kecamatan' => 'Nama Kecamatan',
            'kabupaten' => 'Nama Kabupaten',
            // 'provinsi' => 'Nama Provinsi',
        ]);
    }
}
