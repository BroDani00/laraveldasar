<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen; // <-- Harus ada ini

class DosenSeeder extends Seeder {
    public function run(): void {
        Dosen::factory(15)->create(); 
    }
}