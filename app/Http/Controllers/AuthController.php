<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if (Auth::user()->role == 0) {
                return redirect()->route('profil');
            } else {
                return redirect()->route('admin');
            }
        } else {
            return redirect()->route('login')->with('error', 'Data tidak ditemukan')->withInput();
        }
    }
    public function register()
    {
        return view('auth.register');
    }
    public function registerAction(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus valid',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        $nama_siswa = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $cekEmail = User::where('email', $email)->exists();
        if ($cekEmail) {
            return redirect()->route('register')->with('error', 'Email sudah terdaftar')->withInput();
        };
        $siswa = User::create([
            'name' => $nama_siswa,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        Auth::login($siswa);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
