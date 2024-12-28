<?php

namespace App\Http\Controllers;

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
}
