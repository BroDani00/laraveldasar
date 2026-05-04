<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Method untuk halaman daftar dosen
    public function index()
    {
        return "Berikut adalah daftar dosen Fakultas Sains dan Teknologi UIN Salatiga";
    }

    // Method untuk halaman detail dosen dengan parameter
    public function detail()
    {
        return "Menampilkan profil dosen dengan NIDN: 037";
    }
}