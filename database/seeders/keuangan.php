<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class keuangan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\keuanganModel::factory()->create([
            'tanggal' => '2024-12-12',
            'jenis_iuran' => 'iuran kematian',
            'jenis_data' => 'pemasukan',
            'jumlah' => '500000',
            'nama' => 'antonio'
        ]);
        
        \App\Models\keuanganModel::factory()->create([
            'tanggal' => '2024-12-12',
            'jenis_iuran' => 'iuran PHB',
            'jenis_data' => 'pemasukan',
            'jumlah' => '500000',
            'nama' => 'antonio'
        ]);

        \App\Models\keuanganModel::factory()->create([
            'tanggal' => '2024-12-12',
            'jenis_iuran' => 'iuran kematian',
            'jenis_data' => 'pemasukan',
            'jumlah' => '500000',
            'nama' => 'antonio'
        ]);
        
    }
}
