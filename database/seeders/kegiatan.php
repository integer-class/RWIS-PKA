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
            'deskripsi' => 'kerja bakti mingguan setiap hari sabtu pukul tuju minggu',
            'gambar' => 'kegiatanwarga.jpg',
            'persetujuan' => 'disetujui',
        ]);

        \App\Models\kegiatanModel::factory()->create([
            'tanggal' => '2024-12-12',
            'nama_kegiatan' => 'Senam Bersama',
            'deskripsi' => 'Senam aerobik bersama warga london',
            'gambar' => 'kegiatan warga 2.jpg',
            'persetujuan' => 'disetujui',
        ]);

        \App\Models\kegiatanModel::factory()->create([
            'tanggal' => '2024-12-12',
            'nama_kegiatan' => 'Posyandu',
            'deskripsi' => 'Pos pelayanan terpadu mbokor village',
            'gambar' => 'kegiatan warga 3.jpg',
            'persetujuan' => 'disetujui',

        ]);
        

        
    }
}
