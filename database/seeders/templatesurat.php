<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class templatesurat extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\citizenModel::factory(10)->create();

        \App\Models\templatesuratModel::factory()->create([
            'tanggal' => '2024-12-12',
            'nama_surat' => 'Contoh surat',
            'surat' => 'default.docx'
            
        ]);

        
    }
}
