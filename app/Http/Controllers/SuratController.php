<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use App\Models\Profil;
use App\Models\Jenissurat;
use App\Models\DetailSurat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\InputFormSurat;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    //ini buat nampilin view utama/home
    public function index()
    {
        $jenisSurat = Jenissurat::all();
        return view('user.index', $jenisSurat);
    }

    //nampilin form surat
    public function buatsurat(Request $request, Surat $surat){
        if (!Auth::check()) {
             return redirect()->intended('/login');
        }
        $jenisSurat = Jenissurat::all();
        $data = array('jenisSurat' => $jenisSurat);
        return view('Homepage.BuatSurat.index', $data);

    }

    public function inputanSurat(Request $request){
        $user = Auth::user();
        $isiProfil = $user->profil;
        // Mengecek apakah user sudah mengisi Profile 
        if (!$isiProfil){
            return redirect('/profil');
        }

        $jenissurat = $request->input('jenissurat');
        $inputFormSurat = InputFormSurat::where('jenisSurat_id', $jenissurat)->get();
        $profil = Profil::where('user_id', auth()->user()->id)->first();

        // Ambil nama jenis surat
        $jenisSurat = Jenissurat::find($jenissurat);

        $data = [
            'inputFormSurat' => $inputFormSurat,
            'jenisSurat' => $jenisSurat
        ];
        return view('Homepage.inputSurat.index',  compact('inputFormSurat', 'jenisSurat', 'profil'));
        // return view('Homepage.inputSurat.index', $data);
    }

    public function submitSurat(Request $request){
        // return $request;
        $request->validate([
            'jenisSurat_id' => 'required|exists:jenissurats,id',
            //tambahkan validasi untuk user
        ]);

        $inputFormSurat = InputFormSurat::where('jenisSurat_id', $request->input('jenisSurat_id'))->get();
        $nomorSurat = '001';
        $surat = Surat::create([
            'jenisSurat_id' => $request->input('jenisSurat_id'),
            'nomorSurat' => $nomorSurat,
            'user_id' => $request->input('user_id'), // Mengambil nilai dari inputan tersembunyi
            'validate' => false,
        ]);

        // Simpan detail surat
        foreach ($inputFormSurat as $input) {
            DetailSurat::create([
                'surat_id' => $surat->id,
                'field' => $input->field,
                'value' => $request->input($input->field),
            ]);
        }

        return redirect('/')->with('success', 'Surat berhasil dibuat!');

    }

    public function HistorySuratUser(){
        //view untuk nampilin surat2 user
        if(Auth::check()) {
            // User is logged in, proceed to fetch data
            $user = Auth::user();
            $surat = Surat::where('user_id', $user->id)->with('jenisSurat')->get();
            


            // Kirim data surat ke view
           // Kirim data surat ke view
            return view('Homepage.RiwayatSurat.index', ['surat' => $surat]);
        } else {
            // User belum login, bisa redirect atau tampilkan pesan error
            return redirect()->route('login');
        }
    }

    public function detail($id){
        $surat = Surat::with('jenisSurat')->findOrFail($id);
        $kategori = $surat->id;
        $jenisSurat = $surat->jenisSurat->namaJenisSurat;
        $detailSurat = DetailSurat::where('surat_id', $surat->id)->get();
        switch ($jenisSurat) {
            case 'Biodata Penduduk':
                return view('user.surat_biodata', compact('surat', 'detailSurat', 'jenisSurat', 'kategori'));
            case 'Surat Izin':
                return view('surat.izin', compact('surat'));
            // Tambahkan kasus lainnya sesuai dengan jenis surat yang ada
            default:
                return view('surat.default', compact('surat'));}

        

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

    public function generatePDF($id){
        $surat = Surat::with('jenisSurat')->findOrFail($id);
        $jenisSurat = $surat->jenisSurat->namaJenisSurat;
        $detailSurat = DetailSurat::where('surat_id', $surat->id)->get();
        switch ($jenisSurat) {
            case 'Biodata Penduduk':
                $pdf = pdf::loadView('user.surat_biodata_Print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream('test.pdf');
            case 'Surat Izin':
                $pdf = pdf::loadView('user.surat_biodata', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream('test.pdf');
                return view('surat.izin', compact('surat'));
            // Tambahkan kasus lainnya sesuai dengan jenis surat yang ada
            default:
                return view('surat.default', compact('surat'));}


        $pdf = pdf::loadView('user.print');
        return $pdf->stream('test.pdf');
           
    }

    

}
