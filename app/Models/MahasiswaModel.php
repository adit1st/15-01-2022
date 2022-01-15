<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $fillable = ["nim", "program_studi_kode", "nama_mahasiswa"];
}
