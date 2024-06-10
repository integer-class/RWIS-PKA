<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\keuanganModel;
class keuangan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\keuanganModel::factory(50)->create();// i want the amount of data using pengeluaran is less than pemasukan

        
        $totalEntries = 1000;
        $pemasukanEntries = (int) ($totalEntries * 0.7); // 70% pemasukan
        $pengeluaranEntries = $totalEntries - $pemasukanEntries; // 30% pengeluaran

        // Create pemasukan entries
        KeuanganModel::factory($pemasukanEntries)->create([
            'jenis_data' => 'pemasukan'
        ]);

        // Create pengeluaran entries
        KeuanganModel::factory($pengeluaranEntries)->create([
            'jenis_data' => 'pengeluaran'
        ]);
        
    }
}
