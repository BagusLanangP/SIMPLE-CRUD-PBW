<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Profil $profil)
    {
    $user = auth()->user();
    $data = Profil::where($user, 'user_id');


    if ($user) {
        $p = $user->profil;

        if ($p == 0) {
            return view('profil.create');
        }

        return view('profil.index', $data);
    }

    // Jika tidak ada pengguna yang sedang login, redirect ke halaman login
    return redirect()->route('login');
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
        $validated = $request->validate([
            'namaLengkap' => 'required|string|max:255',
            'tempatLahir' => 'required|string|max:255',
            'tanggal' => 'required|integer|min:1|max:31',
            'bulan' => 'required|string|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'warganegara' => 'required|string|max:255',
            'jenisKelamin' => 'required|integer|in:1,2',
            'pekerjaan' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'nik' => 'required|digits:16|unique:penduduks,nik',
            'no_KK' => 'required|digits:16|unique:penduduks,no_KK',
            'keperluan' => 'required|string|max:255',
            'golonganDarah' => 'required|string|max:2',
            'rt' => 'required|string|max:10',
            'rw' => 'required|string|max:10',
            'banjar' => 'required|string|max:255',
            'desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
        ]);

        Profil::create($validated);

        return redirect('/profil')->with('success',  'Registration succesfuly!, Please Login');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
