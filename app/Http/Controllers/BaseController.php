<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BaseController extends Controller
{
    public function profil()
    {
        return view('profil.index');
    }


    public function daftar()
    {
        $cekdata = Daftar::where('user_id', Auth::user()->id)->exists();
        return view('daftar.index', compact('cekdata'));
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
            'angakatan.required' => 'Angkatan wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'nomorhp.required' => 'Nomor HP wajib diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi'
        ]);
        Daftar::create($val);
        return back()->with('success', 'Berhasil daftar, kami akan menginfokan lagi');
    }
}
