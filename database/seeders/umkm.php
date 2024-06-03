<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class umkm extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\citizenModel::factory(10)->create();

        \App\Models\umkmModel::factory()->create([
            'nama_pemilik' => 'Virza',
            'nama_umkm' => 'Susu Sapi Asli',
            'deskripsi'=> 'Susu sapi asli dari peternak lokal',
            'no_telpon'=> '081217498866',
            'alamat' =>'Jalan Mbokor',
            'gambar'=>'default.png',
        ]);

        
    }
}
