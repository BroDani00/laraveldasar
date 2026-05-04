<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    // Melindungi dari celah keamanan Mass Assignment
    protected $fillable = [
    'nim',
    'nama',
    'program_studi',
    'status',
    'alamat',
    ];


    //
}
