<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = "daftars";
    protected $fillable = ['user_id', 'jurusan', 'angakatan', 'nis', 'alamat', 'nomorhp', 'jenis_kelamin', 'tanggal_lahir'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
