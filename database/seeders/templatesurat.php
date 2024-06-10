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
            'deskripsi_surat' => 'Berisi keterangan ktp dalam proses',
            'nama_surat' => 'Surat Keterangan KTP dalam Proses',
            'nama_file_surat' => 'surat keterangan KTP dalam proses.doc'
            
        ]);
        \App\Models\templatesuratModel::factory()->create([
            'deskripsi_surat' => 'Surat untuk membuat acara geden',
            'nama_surat' => 'Surat Izin Keramaian',
            'nama_file_surat' => 'surat izin keramaian.doc'
            
        ]);
        \App\Models\templatesuratModel::factory()->create([
            'deskripsi_surat' => 'Surat untuk keterangan tempat usaha',
            'nama_surat' => 'Surat Domisili Usaha',
            'nama_file_surat' => 'surat domisili usaha.doc'
            
        ]);
        \App\Models\templatesuratModel::factory()->create([
            'deskripsi_surat' => 'Surat untuk keterangan kependudukan',
            'nama_surat' => 'Surat Keterangan Penduduk',
            'nama_file_surat' => 'Surat keterangan penduduk.doc'
            
        ]);
        \App\Models\templatesuratModel::factory()->create([
            'deskripsi_surat' => 'Mau nikah bang?',
            'nama_surat' => 'Surat Keterangan Nikah',
            'nama_file_surat' => 'surat keterangan nikah.doc'
            
        ]);
        \App\Models\templatesuratModel::factory()->create([
            'deskripsi_surat' => 'Emang kamu beneran ga mampu?',
            'nama_surat' => 'Surat Keterangan tidak Mampu',
            'nama_file_surat' => 'surat keterangan tidak mampu.doc'
            
        ]);

        
    }
}
