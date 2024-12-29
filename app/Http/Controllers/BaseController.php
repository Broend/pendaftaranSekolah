<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;


class BaseController extends Controller
{
    public function profil()
    {
        return view('profil.index');
    }

    public function daftar()
    {
        return view('daftar.index');
    }

    public function daftarFunc(Request $request)
    {
        $val = $request->validate([
            'nis' => 'required',
            'user_id' => 'required',
            'jurusan' => 'required',
            'angakatan' => 'required',
            'alamat' => 'required',
            'nomorhp' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required'
        ], [
            'nis.required' => 'NIS wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi',
            'angkatan.required' => 'Angkatan wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'nomorhp.required' => 'Nomor HP wajib diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi'
        ]);
        toastr()->success('Berhasil daftar, kami akan menginfokan lagi');
        Daftar::create($val);
        return back()->with('success', 'Berhasil daftar, kami akan menginfokan lagi');
    }
}
