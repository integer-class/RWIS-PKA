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
        \App\Models\citizenModel::factory()->create([
            'nik' => '47101071',
            'agama' => 'Kristen',
            'nama' => 'Nanda',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '3',
            'jenis_kelamin' => 'L',
            'alamat' => 'mbokor',
            'domisili' => 'mbokor tengah',
            'golongan_darah' => 'B',
            'pekerjaan' => 'Mahasiswa',
            'no_kk' => '472751886',
            'tanggal_lahir' => "2004-01-18",
        ]);
         \App\Models\citizenModel::factory()->create([
            'nik' => '472233445',
            'agama' => 'islam',
            'nama' => 'Arsyinta',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '3',
            'jenis_kelamin' => 'L',
            'alamat' => 'mbokor',
            'domisili' => 'mbokor kulon',
            'golongan_darah' => 'O',
            'pekerjaan' => 'Mahasiswa',
            'no_kk' => '472751886',
            'tanggal_lahir' => "2004-10-11",
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751123',
            'agama' => 'Islam',
            'nama' => 'Firda',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Etan',
            'golongan_darah' => 'B',
            'pekerjaan' => 'Guru',
            'no_kk' => '472751886',
            'tanggal_lahir' => "1992-08-20",    
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751124',
            'agama' => 'Kristen',
            'nama' => 'Andi',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Etan',
            'golongan_darah' => 'AB',
            'pekerjaan' => 'PNS',
            'no_kk' => '472751886',
            'tanggal_lahir' => "1995-05-15",
            
        ]);

         //keluaraga 2
         \App\Models\citizenModel::factory()->create([
            'nik' => '472751887',
            'agama' => 'Islam',
            'nama' => 'Budi',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Tengah',
            'golongan_darah' => 'AB',
            'pekerjaan' => 'Guru',
            'no_kk' => '472751887',
            'tanggal_lahir' => "1990-01-01",   
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751125',
            'agama' => 'Kristen',
            'nama' => 'Siti',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Tengah',
            'golongan_darah' => 'A',
            'pekerjaan' => 'Dokter',
            'no_kk' => '472751887',
            'tanggal_lahir' => "1985-02-02",  
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751126',
            'agama' => 'Islam',
            'nama' => 'Dina',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Tengah',
            'golongan_darah' => 'O',
            'pekerjaan' => 'Wirausaha',
            'no_kk' => '472751887',
            'tanggal_lahir' => "1982-12-25",    
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751127',
            'agama' => 'Kristen',
            'nama' => 'Eva',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Tengah',
            'golongan_darah' => 'A',
            'pekerjaan' => 'Guru',
            'no_kk' => '472751887',
            'tanggal_lahir' => "1988-06-30", 
        ]);

        
    }
}
