<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/profil" method="POST">
        @csrf
        <label for="namaLengkap">Nama Lengkap:</label><br>
        <input type="text" id="namaLengkap" name="namaLengkap" value="{{ old('namaLengkap') }}" required>
        @error('namaLengkap')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="tempatLahir">Tempat Lahir:</label><br>
        <input type="text" id="tempatLahir" name="tempatLahir" value="{{ old('tempatLahir') }}" required>
        @error('tempatLahir')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="tanggalLahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggalLahir" name="tanggalLahir" value="{{ old('tanggalLahir') }}" required>
        @error('tanggalLahir')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="warganegara">Warga Negara:</label><br>
        <input type="text" id="warganegara" name="warganegara" value="{{ old('warganegara') }}" required>
        @error('warganegara')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="jenisKelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="jenisKelamin1" name="jenisKelamin" value="Laki - Laki" {{ old('jenisKelamin') == 1 ? 'checked' : '' }} required>Laki-laki
        <input type="radio" id="jenisKelamin2" name="jenisKelamin" value="Perempuan" {{ old('jenisKelamin') == 2 ? 'checked' : '' }} required>Perempuan
        @error('jenisKelamin')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="pekerjaan">Pekerjaan:</label><br>
        <input type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
        @error('pekerjaan')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="agama">Agama:</label><br>
        <input type="text" id="agama" name="agama" value="{{ old('agama') }}" required>
        @error('agama')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="nik">NIK:</label><br>
        <input type="text" id="nik" name="nik" value="{{ old('nik') }}" required>
        @error('nik')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="nomorKk">Nomor KK:</label><br>
        <input type="text" id="nomorKk" name="nomorKk" value="{{ old('nomorKk') }}" required>
        @error('nomorKk')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="golonganDarah">Golongan Darah:</label><br>
        <input type="text" id="golonganDarah" name="golonganDarah" value="{{ old('golonganDarah') }}" required>
        @error('golonganDarah')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        {{-- Optional fields, uncomment if needed
        <label for="rt">RT:</label><br>
        <input type="text" id="rt" name="rt" value="{{ old('rt') }}" required>
        @error('rt')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="rw">RW:</label><br>
        <input type="text" id="rw" name="rw" value="{{ old('rw') }}" required>
        @error('rw')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="banjar">Banjar:</label><br>
        <input type="text" id="banjar" name="banjar" value="{{ old('banjar') }}" required>
        @error('banjar')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="desa">Desa:</label><br>
        <input type="text" id="desa" name="desa" value="{{ old('desa') }}" required>
        @error('desa')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="kecamatan">Kecamatan:</label><br>
        <input type="text" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}" required>
        @error('kecamatan')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="kabupaten">Kabupaten:</label><br>
        <input type="text" id="kabupaten" name="kabupaten" value="{{ old('kabupaten') }}" required>
        @error('kabupaten')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="provinsi">Provinsi:</label><br>
        <input type="text" id="provinsi" name="provinsi" value="{{ old('provinsi') }}" required>
        @error('provinsi')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>
        --}}

        <input type="submit" value="Submit">
    </form>
</body>
</html>
