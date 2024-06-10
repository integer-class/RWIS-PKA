<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\citizenModel::factory(10)->create();

        \App\Models\UserModel::factory()->create([
            'nik' => '472751886',
            'role' => '1',
            'password' =>  Hash::make('123'),
        ]);
        \App\Models\UserModel::factory()->create([
            'nik' => '12341234',
            'role' => '3',
            'password' =>  Hash::make('123'),
        ]);
        \App\Models\UserModel::factory()->create([
            'nik' => '123456789',
            'role' => '2',
            'password' =>  Hash::make('123'),
        ]);
        \App\Models\UserModel::factory()->create([
            'nik' => '12341234',
            'role' => '2',
            'password' =>  Hash::make('123'),
        ]);
        \App\Models\UserModel::factory()->create([
            'nik' => '472751896',
            'role' => '2',
            'password' =>  Hash::make('123'),
        ]);
        

    }
}
