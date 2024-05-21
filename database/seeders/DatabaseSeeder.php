<?php

namespace Database\Seeders;

use App\Models\KKmodel;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


       
        $this->call(citizen::class);
        $this->call(user::class);


       
    }
}
