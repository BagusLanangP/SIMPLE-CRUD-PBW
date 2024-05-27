@extends('layouts.mainlayouts')

@section('tittle', 'Input surat')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <hr>
            <table class="table table-striped table-hover shadow history-surat-content">
                <thead>
                    <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tgl</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $s)
                    <tr>
                        <th>{{ $s->kelas }}</th>
                        <td>{{ $s->jenissurat }}</td>
                        <td>{{ $s->name }}</td>
                        <td>sfsd</td>
                        <td>
                            <i data-feather="trash" class="icons-home"></i>
                            <i data-feather="eye" class="icons-home"></i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        
        
        
            </table>
        </div>
    </div>
    
@endsection