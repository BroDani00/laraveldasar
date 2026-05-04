<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Men-generate angka acak 8 digit untuk NIM
            'nim' => fake()->unique()->numerify('########'),
            // Men-generate nama lengkap acak
            'nama' => fake()->name(),
            'program_studi' => 'Teknologi Informasi',
            // Memilih elemen acak dari array status
            'status' => fake()->randomElement(['Aktif', 'Cuti', 'Lulus']),
            // Men-generate alamat acak
            'alamat' => fake()->address(),
                        //
        ];
    }
}
