<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa; // Pastikan Model di-import


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\/ Menginstruksikan factory untuk membuat 50 baris data
        Mahasiswa::factory(50)->create();
    }
}
