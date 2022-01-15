<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatakuliahModel extends Model
{
    use HasFactory;
     protected $table = "matakuliah";
    protected $fillable = ["id_matakuliah", "kode_program_studi", "kode_matakuliah", "nama_matakuliah", "sks_teori", "sks_praktek", "sks_praktikum"];
}
