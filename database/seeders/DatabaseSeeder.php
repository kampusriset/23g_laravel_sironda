<?php

namespace Database\Seeders;

use App\Models\Petugas;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        petugas::factory(10)->count(1)->create();
        
        $this->call(PetugasSeeder::class);
    }
}
