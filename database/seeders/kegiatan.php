<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kegiatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\citizenModel::factory(10)->create();

        \App\Models\kegiatanModel::factory()->create([
            'tanggal' => '2024-12-12',
            'nama_kegiatan' => 'Kerja Bakti mingguan',
            'deskripsi' => 'kerja bakti mingguan setiap hari sabtu pukul tuju malam minggu',
            'gambar' => 'default.jpg',
            'persetujuan' => 'belum disetujui',
        ]);

        
    }
}
