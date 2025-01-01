<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Studets;
use App\Models\User;
use Illuminate\Http\Request;

class StudetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ttlSiswaDftr = Daftar::count();
        $ttlSiswaAcc = User::count();
        $siswaDaftar = Daftar::orderByDesc('id')->paginate(8);
        $siswaAcc = User::orderByDesc('id')->where('role', 0)->paginate(8);
        return view('admin.siswa.index', compact('siswaDaftar', 'siswaAcc', 'ttlSiswaDftr', 'ttlSiswaAcc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Studets $studets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $studets = Daftar::find($id);
        $studets->status = 1;
        $studets->save();
        return response()->json([
            'success' => true,
            'message' => 'Murid berhasil terseleksi',
            'data' => $studets
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Studets $studets)
    {
        //
    }
}
