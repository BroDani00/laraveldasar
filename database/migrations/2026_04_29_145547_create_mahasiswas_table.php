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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 15)->unique(); // Kolom NIM, tipe varchar(15), 
            $table->string('nama', 100); // Kolom Nama, tipe varchar(100)
            $table->string('program_studi', 50)->default('Teknologi Informasi');
            $table->enum('status', ['Aktif', 'Cuti', 'Lulus'])->default('Aktif');
            $table->text('alamat')->nullable(); // Kolom alamat, boleh kosong (null)
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
