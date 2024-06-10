<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Profil $profil)
    {
    $user = auth()->user();


    if ($user) {
        $p = $user->profil;

        if ($p == 0) {
            return view('profil.create');
        }
        $data = Profil::where('user_id', $user->id )->first();
        return view('profil.index', ['data' => $data]);
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
        $userID = auth()->user()->id;
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
            'nik' => 'required|unique:profils,nik',
            'no_KK' => 'required|unique:profils,no_KK',
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
        $validated['user_id'] = $userID;


        DB::table('users')->where('id', $userID)->update(['profil' => 1]);

        DB::table('profils')->insert($validated);

        // Profil::create($validated);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Profil::findOrFail($id);
        return view('profil.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = auth()->user();
        $data = Profil::where('user_id', $user->id)->first();

        if (!$data) {
            return redirect('/profil')->with('error', 'Data profil tidak ditemukan.');
        }

        return view('profil.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data = Profil::where('user_id', $id)->first();

    if (!$data) {
        return redirect('/profil')->with('error', 'Data profil tidak ditemukan.');
    }

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
        'nik' => 'required|digits:16|unique:profils,nik,' . $data->id,
        'no_KK' => 'required|digits:16|unique:profils,no_KK,' . $data->id,
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

    $data->update($validated);

    return redirect('/profil')->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
