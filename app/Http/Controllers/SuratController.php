<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Jenissurat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    //ini buat nampilin view utama/home
    public function index(){
        $jenisSurat = JenisSurat::all();
        return view('user.index', $jenisSurat);
    }

    //nampilin form surat
    public function buatsurat(){
        $jenisSurat = Jenissurat::all();
        return view('user.inputsurat', $jenisSurat);
    }



    public function admin(){
        $user = User::all();
        $surat = Surat::all();

        $data = array('user' => $user, 'surat' => $surat);
        return view('admin.index', $data);

    }

    public function store(Request $request)
    {      
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'jenissurat' => 'required',
            'nik' => 'required|unique:users',
        ]);
         // Tambahkan kode surat acak
         $validateData['nomorSurat'] = Str::random(10);
        Surat::create($validateData);

        return redirect('/view-surat')->with('success',  'Surat berhasil dibuat');
    }



}
