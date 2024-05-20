<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Jenissurat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(){
        $jenisSurat = JenisSurat::all();
        return view('user.index', $jenisSurat);
    }

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
       
        $validatedData = $request->validate([
            'nama' => 'required|max:50',
            'email' => 'required|email:dns|unique:konsultans',
            'phone' => 'required|min:10',
            'keahlian' => 'required',
            'alamat' => 'required',
            'pengalaman' =>'required',
            'deskripsi' =>'required',
            'foto' => 'image|file',
            'foto_cv' => 'image|file',    
        ]);
        // $this->validate($request, [
        //     'nama' => 'required|max:50',
        //     'email' => 'required|email:dns|unique:konsultans',
        //     'phone' => 'required|min:10',
        //     'keahlian' => 'required',
        //     'alamat' => 'required',
        //     'pengalaman' =>'required',
        //     'deskripsi' =>'required',
        //     'foto' => 'image|file',
        //     'foto_cv' => 'image|file',    
        // ]);
        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('konsultan-foto');
        }

        if($request->file('foto_cv')){
            $validatedData['foto_cv'] = $request->file('foto_cv')->store('konsultan-foto-cv');
        }
        $itemuser = $request->user();
        $validatedData['user_id'] = $itemuser->id;
        //ambil data user yang login
       
        
        Konsultan::create($validatedData);

        

        return redirect('/Konsultan')->with('success',  'Data Anda Tersimpan');
    }



}
