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
            'nama' => 'Virza Schumacher',
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
            'nama' => 'Evangelion Neon',
            'no_kk' => '472751887',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Tengah',
            'rt' => '3',
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
            'nama' => 'Trafalgar Rizky',
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
        
        //keluarga3
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751896',
            'nama' => 'Monkey D sunardi',
            'no_kk' => '472751894',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Kulon',
            'rt' => '1',
            'agama' => 'Islam',
            'golongan_darah' => 'O',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'Wiraswasta',
            'tanggal_lahir' => "1982-04-15",
            'status' => 'miskin',
            'pendidikan' => 'SMP',
            'luas_rumah' => 75,
            'gaji' => '200.000-400.000',
            'skorbansos' => 250,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751128',
            'nama' => 'Kara',
            'no_kk' => '472751894',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Kulon',
            'rt' => '1',
            'agama' => 'Islam',
            'golongan_darah' => 'AB',
            'jenis_kelamin' => 'perempuan',
            'pekerjaan' => 'Guru',
            'tanggal_lahir' => "1987-09-20",
            'status' => 'sebatang kara',
            'pendidikan' => 'SMA',
            'luas_rumah' => 70,
            'gaji' => '400.000-600.000',
            'skorbansos' => 280,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751129',
            'nama' => 'Yoga',
            'no_kk' => '472751894',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Kulon',
            'rt' => '1',
            'agama' => 'Islam',
            'golongan_darah' => 'B',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'Dokter',
            'tanggal_lahir' => "1990-11-10",
            'status' => 'sakit parah',
            'pendidikan' => 'SMA',
            'luas_rumah' => 80,
            'gaji' => '600.000-1.000.000',
            'skorbansos' => 300,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751131',
            'nama' => 'Sandra',
            'no_kk' => '472751894',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Kulon',
            'rt' => '1',
            'agama' => 'Kristen',
            'golongan_darah' => 'O',
            'jenis_kelamin' => 'perempuan',
            'pekerjaan' => 'PNS',
            'tanggal_lahir' => "1995-03-25",
            'status' => 'miskin',
            'pendidikan' => 'SMP',
            'luas_rumah' => 65,
            'gaji' => '200.000-400.000',
            'skorbansos' => 260,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751132',
            'nama' => 'Agus',
            'no_kk' => '472751894',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Kulon',
            'rt' => '1',
            'agama' => 'Islam',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'Guru',
            'tanggal_lahir' => "1988-08-08",
            'status' => 'janda/duda',
            'pendidikan' => 'SD',
            'luas_rumah' => 90,
            'gaji' => '0-200.000',
            'skorbansos' => 240,
        ]);

        // keluarga 4
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751901',
            'nama' => 'Lia',
            'no_kk' => '472751901',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Wetan',
            'rt' => '2',
            'agama' => 'Islam',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'perempuan',
            'pekerjaan' => 'Wiraswasta',
            'tanggal_lahir' => "1990-05-20",
            'status' => 'miskin',
            'pendidikan' => 'SMP',
            'luas_rumah' => 85,
            'gaji' => '200.000-400.000',
            'skorbansos' => 250,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751133',
            'nama' => 'Rian',
            'no_kk' => '472751901',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Wetan',
            'rt' => '2',
            'agama' => 'Kristen',
            'golongan_darah' => 'B',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'PNS',
            'tanggal_lahir' => "1992-08-15",
            'status' => 'sebatang kara',
            'pendidikan' => 'SMA',
            'luas_rumah' => 70,
            'gaji' => '400.000-600.000',
            'skorbansos' => 280,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751134',
            'nama' => 'Rita',
            'no_kk' => '472751901',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Wetan',
            'rt' => '2',
            'agama' => 'Islam',
            'golongan_darah' => 'O',
            'jenis_kelamin' => 'perempuan',
            'pekerjaan' => 'Guru',
            'tanggal_lahir' => "1995-11-10",
            'status' => 'sakit parah',
            'pendidikan' => 'SMA',
            'luas_rumah' => 80,
            'gaji' => '600.000-1.000.000',
            'skorbansos' => 300,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751135',
            'nama' => 'Ridwan',
            'no_kk' => '472751901',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Wetan',
            'rt' => '2',
            'agama' => 'Kristen',
            'golongan_darah' => 'AB',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'Dokter',
            'tanggal_lahir' => "1988-02-28",
            'status' => 'miskin',
            'pendidikan' => 'SMP',
            'luas_rumah' => 65,
            'gaji' => '200.000-400.000',
            'skorbansos' => 260,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751136',
            'nama' => 'Rinas',
            'no_kk' => '472751901',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Wetan',
            'rt' => '2',
            'agama' => 'Islam',
            'golongan_darah' => 'B',
            'jenis_kelamin' => 'perempuan',
            'pekerjaan' => 'Wiraswasta',
            'tanggal_lahir' => "1990-01-01",
            'status' => 'janda/duda',
            'pendidikan' => 'SD',
            'luas_rumah' => 90,
            'gaji' => '0-200.000',
            'skorbansos' => 240,
        ]);


        // keluarga 6
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751911',
            'nama' => 'Ali',
            'no_kk' => '472751911',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Barat',
            'rt' => '1',
            'agama' => 'Islam',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'Wiraswasta',
            'tanggal_lahir' => "1980-03-20",
            'status' => 'miskin',
            'pendidikan' => 'SMP',
            'luas_rumah' => 85,
            'gaji' => '200.000-400.000',
            'skorbansos' => 250,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751141',
            'nama' => 'Aisyah',
            'no_kk' => '472751911',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Barat',
            'rt' => '1',
            'agama' => 'Islam',
            'golongan_darah' => 'B',
            'jenis_kelamin' => 'perempuan',
            'pekerjaan' => 'Guru',
            'tanggal_lahir' => "1982-11-15",
            'status' => 'sebatang kara',
            'pendidikan' => 'SMA',
            'luas_rumah' => 70,
            'gaji' => '400.000-600.000',
            'skorbansos' => 280,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751142',
            'nama' => 'Arhan',
            'no_kk' => '472751911',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Barat',
            'rt' => '1',
            'agama' => 'Islam',
            'golongan_darah' => 'O',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'PNS',
            'tanggal_lahir' => "1985-07-10",
            'status' => 'sakit parah',
            'pendidikan' => 'SMA',
            'luas_rumah' => 80,
            'gaji' => '600.000-1.000.000',
            'skorbansos' => 300,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751143',
            'nama' => 'Ani',
            'no_kk' => '472751911',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Barat',
            'rt' => '1',
            'agama' => 'Kristen',
            'golongan_darah' => 'AB',
            'jenis_kelamin' => 'perempuan',
            'pekerjaan' => 'Dokter',
            'tanggal_lahir' => "1988-04-25",
            'status' => 'miskin',
            'pendidikan' => 'SMP',
            'luas_rumah' => 65,
            'gaji' => '200.000-400.000',
            'skorbansos' => 260,
        ]);
        \App\Models\citizenModel::factory()->create([
            'nik' => '472751144',
            'nama' => 'Putra',
            'no_kk' => '472751911',
            'alamat' => 'Mbokor',
            'status_kependudukan' => 'Warga Tetap',
            'domisili' => 'Mbokor Barat',
            'rt' => '1',
            'agama' => 'Kristen',
            'golongan_darah' => 'A',
            'jenis_kelamin' => 'laki-laki',
            'pekerjaan' => 'Wiraswasta',
            'tanggal_lahir' => "1990-09-30",
            'status' => 'miskin',
            'pendidikan' => 'SMP',
            'luas_rumah' => 75,
            'gaji' => '200.000-400.000',
            'skorbansos' => 250,
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