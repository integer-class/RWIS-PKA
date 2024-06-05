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

         //keluarga 3
         \App\Models\citizenModel::factory()->create([ 
            'nik' => '472751896',
            'agama' => 'Islam',
            'nama' => 'Rudi',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Kulon',
            'golongan_darah' => 'O',
            'pekerjaan' => 'Wiraswasta',
            'no_kk' => '472751894',
            'tanggal_lahir' => "1982-04-15", 
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751128',
            'agama' => 'Islam',
            'nama' => 'Kara',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Kulon',
            'golongan_darah' => 'AB',
            'pekerjaan' => 'Guru',
            'no_kk' => '472751894',
            'tanggal_lahir' => "1987-09-20",  
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751129',
            'agama' => 'islam',
            'nama' => 'Yoga',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Kulon',
            'golongan_darah' => 'B',
            'pekerjaan' => 'Dokter',
            'no_kk' => '472751894',
            'tanggal_lahir' => "1990-11-10", 
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751131',
            'agama' => 'Kristen',
            'nama' => 'Sandra',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Kulon',
            'golongan_darah' => 'O',
            'pekerjaan' => 'PNS',
            'no_kk' => '472751894',
            'tanggal_lahir' => "1995-03-25",  
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751132',
            'agama' => 'Islam',
            'nama' => 'Agus',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Kulon',
            'golongan_darah' => 'A',
            'pekerjaan' => 'Guru',
            'no_kk' => '472751894',
            'tanggal_lahir' => "1988-08-08",    
        ]);

        //keluarga 4
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751901',
            'agama' => 'Islam',
            'nama' => 'Lia',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Wetan',
            'golongan_darah' => 'A',
            'pekerjaan' => 'Wiraswasta',
            'no_kk' => '472751901',
            'tanggal_lahir' => "1990-05-20", 
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751133',
            'agama' => 'Kristen',
            'nama' => 'Rian',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Wetan',
            'golongan_darah' => 'B',
            'pekerjaan' => 'PNS',
            'no_kk' => '472751901',
            'tanggal_lahir' => "1992-08-15",
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751134',
            'agama' => 'Islam',
            'nama' => 'Rita',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Wetan',
            'golongan_darah' => 'O',
            'pekerjaan' => 'Guru',
            'no_kk' => '472751901',
            'tanggal_lahir' => "1995-11-10",
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751135',
            'agama' => 'Kristen',
            'nama' => 'Ridwan',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Wetan',
            'golongan_darah' => 'AB',
            'pekerjaan' => 'Dokter',
            'no_kk' => '472751901',
            'tanggal_lahir' => "1988-02-28",
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751136',
            'agama' => 'Islam',
            'nama' => 'Rinas',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '2',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Wetan',
            'golongan_darah' => 'B',
            'pekerjaan' => 'Wiraswasta',
            'no_kk' => '472751901',
            'tanggal_lahir' => "1993-06-12",
        ]);

        //keluarga 5
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751906',
            'agama' => 'Islam',
            'nama' => 'Ahmad',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '3',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Timur',
            'golongan_darah' => 'A',
            'pekerjaan' => 'Wiraswasta',
            'no_kk' => '472751906',
            'tanggal_lahir' => "1980-03-20",
            
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751137',
            'agama' => 'Islam',
            'nama' => 'Fatimah',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '3',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Timur',
            'golongan_darah' => 'B',
            'pekerjaan' => 'Guru',
            'no_kk' => '472751906',
            'tanggal_lahir' => "1982-11-15",
            
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751138',
            'agama' => 'Islam',
            'nama' => 'Abdul',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '3',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Timur',
            'golongan_darah' => 'O',
            'pekerjaan' => 'PNS',
            'no_kk' => '472751906',
            'tanggal_lahir' => "1985-07-10",
            
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751139',
            'agama' => 'Kristen',
            'nama' => 'Anna',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '3',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Timur',
            'golongan_darah' => 'AB',
            'pekerjaan' => 'Dokter',
            'no_kk' => '472751906',
            'tanggal_lahir' => "1988-04-25",
            
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751140',
            'agama' => 'Kristen',
            'nama' => 'Yosef',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '3',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Timur',
            'golongan_darah' => 'A',
            'pekerjaan' => 'Wiraswasta',
            'no_kk' => '472751906',
            'tanggal_lahir' => "1990-09-30",
            
        ]);

        //keluarga 6
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751911',
            'agama' => 'Islam',
            'nama' => 'Ali',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Barat',
            'golongan_darah' => 'A',
            'pekerjaan' => 'Wiraswasta',
            'no_kk' => '472751911',
            'tanggal_lahir' => "1980-03-20",
            
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751141',
            'agama' => 'Islam',
            'nama' => 'Aisyah',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Barat',
            'golongan_darah' => 'B',
            'pekerjaan' => 'Guru',
            'no_kk' => '472751911',
            'tanggal_lahir' => "1982-11-15",
            
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751142',
            'agama' => 'Islam',
            'nama' => 'Arhan',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Barat',
            'golongan_darah' => 'O',
            'pekerjaan' => 'PNS',
            'no_kk' => '472751911',
            'tanggal_lahir' => "1985-07-10",
            
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751143',
            'agama' => 'Kristen',
            'nama' => 'Ani',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'P',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Barat',
            'golongan_darah' => 'AB',
            'pekerjaan' => 'Dokter',
            'no_kk' => '472751911',
            'tanggal_lahir' => "1988-04-25",
            
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751144',
            'agama' => 'Kristen',
            'nama' => 'Putra',
            'status_kependudukan' => 'Warga Tetap',
            'rt' => '1',
            'jenis_kelamin' => 'L',
            'alamat' => 'Mbokor',
            'domisili' => 'Mbokor Barat',
            'golongan_darah' => 'A',
            'pekerjaan' => 'Wiraswasta',
            'no_kk' => '472751911',
            'tanggal_lahir' => "1990-09-30",
            
        ]);


        
    }
}
