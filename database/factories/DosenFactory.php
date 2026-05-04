<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nidn' => fake()->unique()->numerify('##########'), // 10 digit unik
            'nama_lengkap' => fake()->name(),
            'keahlian' => fake()->randomElement(['Pemrograman Web', 'Jaringan Komputer', 'Kecerdasan Buatan', 'Basis Data']),
            'no_telepon' => fake()->phoneNumber(),
        ];
    }
}
