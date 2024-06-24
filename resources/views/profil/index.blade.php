<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($data){
    <h1>Nama Lengkap : {{ $data->namaLengkap }}</h1>
    
    <h2><a href="/profil/{{ $data->id }}">Show</a></h2>
    <h2><a href="/profil/{{ $data->id }}/edit">Edit</a></h2>
    }@else
        <p>Data profil tidak ditemukan.</p>
    @endif
</body>
</html>