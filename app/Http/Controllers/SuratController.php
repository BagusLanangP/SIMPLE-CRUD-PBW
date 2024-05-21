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
            'nik' => 'required'
            // 'nik' => 'required|unique:users',
        ]);
       
    
         // Tambahkan kode surat acak
        $validateData['nomorSurat'] = Str::random(10);
        Surat::create($validateData);
        

        return redirect('user.viewsurat');
    }



}
