<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Method untuk halaman daftar mahasiswa
    public function index()
    {
        //Data yang dikirim ke view
        $mahasiswa = [
            ['nim' => '123', 'nama' => 'Dani', 'status' => 'Aktif'],
            ['nim' => '124', 'nama' => 'Siti', 'status' => 'Cuti'],
            ['nim' => '125', 'nama' => 'Budi', 'status' => 'Aktif'],
        ];

        //Mengembalikan view 'mahasiswa' dan mengirimkan data key 'dataMahasiswa' dengan nilai $mahasiswa
        return view('mahasiswa', ['dataMahasiswa' => $mahasiswa]);
    }

    // Method untuk halaman detail mahasiswa dengan parameter
    public function detail($nim)
    {
        return "Menampilkan detail data mahasiswa dengan NIM: " . $nim;
    }
}