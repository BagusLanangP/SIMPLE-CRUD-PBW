<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Jenissurat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    //ini buat nampilin view utama/home
    public function index(){
        $jenisSurat = Jenissurat::all();
        return view('user.index', $jenisSurat);
    }

    //nampilin form surat
    public function buatsurat(){
        $jenisSurat = Jenissurat::all();
        $data = array('jenisSurat' => $jenisSurat);
        return view('user.inputsurat', $data);
    }

    public function HistorySuratUser(){
        //ini view nya masi nampilin untuk semua user, karna belom ada regis sama logn
        $surat = Surat::all();
        $data = array('surat' => $surat);
        return view('Homepage.historySurat', $data);
    }

    public function destroy($id)
{
    $surat = Surat::find($id);
    if ($surat) {
        $surat->delete();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false]);
}



    public function admin(){
        $user = User::all();
        $surat = Surat::all();

        $data = array('user' => $user, 'surat' => $surat);
        return view('admin.index', $data);

    }

    public function store(Request $request, Surat $surat)
    {  
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'jenissurat' => 'required',
            'kelas' => 'required',
            'prodi' => 'required'
            // 'nik' => 'required|unique:users',
        ]);
       
        
    
         // Tambahkan kode surat acak
        // $validateData['nomorSurat'] = Str::random(10);
        Surat::create($validateData);
        

        
    }

    public function show(Surat $surat){
        $surat = Surat::latest()->first();
        $data = array('s' => $surat);
        return view('user.viewsurat', $data);
    }


}
