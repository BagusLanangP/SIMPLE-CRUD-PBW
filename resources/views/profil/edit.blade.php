<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profil</title>
</head>
<body>
    <h1>Edit Profil</h1>

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profil.update', $data->user_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="namaLengkap">Nama Lengkap:</label><br>
        <input type="text" id="namaLengkap" name="namaLengkap" value="{{ old('namaLengkap', $data->namaLengkap) }}" required>
        @error('namaLengkap')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="tempatLahir">Tempat Lahir:</label><br>
        <input type="text" id="tempatLahir" name="tempatLahir" value="{{ old('tempatLahir', $data->tempatLahir) }}" required>
        @error('tempatLahir')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="tanggalLahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggalLahir" name="tanggalLahir" value="{{ old('tanggalLahir', $data->tanggalLahir) }}" required>
        @error('tanggalLahir')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="wargaNegara">Warga Negara:</label><br>
        <input type="text" id="wargaNegara" name="wargaNegara" value="{{ old('wargaNegara', $data->wargaNegara) }}" required>
        @error('wargaNegara')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="jenisKelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="jenisKelamin1" name="jenisKelamin" value="Laki - Laki" {{ old('jenisKelamin', $data->jenisKelamin) == 'Laki - Laki' ? 'checked' : '' }} required>Laki-laki
        <input type="radio" id="jenisKelamin2" name="jenisKelamin" value="Perempuan" {{ old('jenisKelamin', $data->jenisKelamin) == 'Perempuan' ? 'checked' : '' }} required>Perempuan
        @error('jenisKelamin')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="pekerjaan">Pekerjaan:</label><br>
        <input type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan', $data->pekerjaan) }}" required>
        @error('pekerjaan')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="agama">Agama:</label><br>
        <input type="text" id="agama" name="agama" value="{{ old('agama', $data->agama) }}" required>
        @error('agama')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="nik">NIK:</label><br>
        <input type="text" id="nik" name="nik" value="{{ old('nik', $data->nik) }}" required>
        @error('nik')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="nomorKk">Nomor KK:</label><br>
        <input type="text" id="nomorKk" name="nomorKk" value="{{ old('nomorKk', $data->nomorKk) }}" required>
        @error('nomorKk')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="golonganDarah">Golongan Darah:</label><br>
        <input type="text" id="golonganDarah" name="golonganDarah" value="{{ old('golonganDarah', $data->golonganDarah) }}" required>
        @error('golonganDarah')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
