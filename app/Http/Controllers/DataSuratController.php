<?php

namespace App\Http\Controllers;

use App\Models\FormInput;
use App\Models\Profil;
use Illuminate\Http\Request;

class DataSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
        @dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(FormInput $FormInput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormInput $FormInput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormInput $FormInput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormInput $FormInput)
    {
        //
    }

    public function pilih($id)
    {
        $user = auth()->user()->id;
        $dataProfil = Profil::where('user_id', $user)->first();
        $DataColumns = FormInput::where('jenissurats_id', $id)->get();
        return view('DataSurat.create', ['DataColumns' => $DataColumns], ['DataProfil' => $dataProfil]);
    }
}
