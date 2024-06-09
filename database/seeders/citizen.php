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
            'nama' => 'teo',
            'no_kk' => '472751886',
            'alamat' => 'mbokor',
            'status_kependudukan' => 'Warga Kontrak',
            'domisili' => 'mbokor etan',
            'rt' => '1',
            'agama' => 'islam',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'petani',
            'tanggal_lahir' => "2012-12-12",
            'status' => "janda/duda",
            'pendidikan' => "SMA",
            'luas_rumah' => "90",
            'gaji' => "200.000-400.000",
            'skorbansos' => 290,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '123456789',
            'nama' => 'Eva',
            'no_kk' => '472751887',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Tengah',
            'rt' => '2',
            'agama' => 'Hindu',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'Guru',
            'tanggal_lahir' => "1988-06-30",
            'status' => "janda/duda", 
            'pendidikan' => "SD",
            'luas_rumah' => "65",
            'gaji' => "600.000-1.000.000",
            'skorbansos' => 290
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '12341234',
            'nama' => 'Uzi',
            'no_kk' => '472751887',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Tengah',
            'rt' => '2',
            'agama' => 'Ateis',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'webdeveloper',
            'tanggal_lahir' => "1988-06-30",
            'status' => "janda/duda", 
            'pendidikan' => "SD",
            'luas_rumah' => "65",
            'gaji' => "0-200.000",
            'skorbansos' =>290,
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

            // 'nik' => $this->faker->unique()->randomNumber(9),
            // 'nama' => $this->faker->name(),
            // 'no_kk' => $this->faker->unique()->randomNumber(9),
            // 'alamat' => $this->faker->address(),
            // 'status_kependudukan' => $this->faker->randomElement(['Warga kontrak','warga Tetap']),
            // 'domisili' => $this->faker->address(),
            // 'rt' => $this->faker->unique()->randomNumber(1),            
            // 'agama' => $this->faker->address(),
            // 'golongan_darah' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            // 'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            // 'pekerjaan' => $this->faker->jobTitle(),
            // 'status' => $this->faker->randomElement('janda/duda','miskin','sakit parah','sebatang kara'),
            // 'tanggal_lahir' => $this->faker->date(),
            // 'pendidikan' => $this->faker->randomElement('sd','smp','sma','tidak sekolah'),
            // 'luas_rumah' => $this->faker->randomNumber(3),
            // 'gaji' => $this->faker->randomNumber(7),