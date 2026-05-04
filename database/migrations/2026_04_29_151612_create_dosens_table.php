<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nidn', 20)->unique(); // NIDN, max 20, Unik
            $table->string('nama_lengkap', 100); // Nama Lengkap, max 100
            $table->string('keahlian', 50); // Keahlian, max 50
            $table->string('no_telepon', 15)->nullable(); // No Telepon, max 15, Boleh Kosong
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
