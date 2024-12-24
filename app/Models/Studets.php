<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studets extends Model
{
    protected $fillable = ['name', 'nomorHp', 'email', 'asalSekolah', 'jurusan', 'tanggalLahir', 'alamat'];
}
