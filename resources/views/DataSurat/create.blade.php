<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/datasurat" method="POST">
        @csrf
        @foreach ($DataColumns as $data)
            @if ($data->available == 1){
                <input type="hidden" id="{{ $data->name }}" name="{{ $data->name }}" value="{{ $DataProfil->{$data->name} }}">
            }
            @else{
                <label for="{{ $data->name }}">{{ $data->name }}</label>
                <input type="{{ $data->type }}" id="{{ $data->name }}" name="{{ $data->{$data->name} }}">
            }
            
            @endif  
        @endforeach
        <button type="submit" >Buat surat</button>
        
    </form>
</body>
</html>