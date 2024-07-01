@extends('layouts.mainlayouts')

@section('tittle', 'Input surat')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto form-surat-box shadow rounded p-5">
            <h2 class="text-center">FORM BUAT SURAT</h2>
            <p class="text-center">Isi form untuk membuat surat</p>
            <hr>
            <form id="suratForm" method="post" action="/simpansurat">
                <h3>Surat {{$jenisSurat->namaJenisSurat }}</h3>
                @csrf
                <div class="mb-3">
                    @foreach($inputFormSurat as $input)
                        <label for="{{ $input->field }}">{{ ucfirst($input->field) }}</label>
                        <input type="{{ $input->type }}" class="form-control {{ old($input->field, $profil->{$input->field}) ? 'has-value' : '' }}" id="{{ $input->field }}" name="{{ $input->field }}"  value="{{ old($input->field, $profil->{$input->field})}}" 
                        placeholder=" {{ $input->field }}" required>
                    @endforeach
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="jenisSurat_id" value="{{$inputFormSurat->first()->jenisSurat_id }}">
                <a href="/buatsurat">back</a>
                <button type="submit" class="btn btn-primary">Buat surat</button>
            </form>
        </div>
    </div>
  </div>



@endsection()