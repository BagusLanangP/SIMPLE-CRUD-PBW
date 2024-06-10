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
        <p>{{ session('error') }}</p>
    @endif

    @if ($errors->any())
        <div>
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
        <input type="text" id="namaLengkap" name="namaLengkap" value="{{ $data->namaLengkap }}" required><br><br>

        <label for="tempatLahir">Tempat Lahir:</label><br>
        <input type="text" id="tempatLahir" name="tempatLahir" value="{{ $data->tempatLahir }}" required><br><br>

        <label for="tanggal">Tanggal Lahir:</label><br>
        <input type="number" id="tanggal" name="tanggal" value="{{ $data->tanggal }}" required><br><br>

        <label for="bulan">Bulan Lahir:</label><br>
        <select id="bulan" name="bulan" required>
            @foreach(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $bulan)
                <option value="{{ $bulan }}" {{ $data->bulan == $bulan ? 'selected' : '' }}>{{ $bulan }}</option>
            @endforeach
        </select><br><br>

        <label for="tahun">Tahun Lahir:</label><br>
        <input type="number" id="tahun" name="tahun" value="{{ $data->tahun }}" required><br><br>

        <label for="warganegara">Warga Negara:</label><br>
        <input type="text" id="warganegara" name="warganegara" value="{{ $data->warganegara }}" required><br><br>

        <label for="jenisKelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="jenisKelamin1" name="jenisKelamin" value="1" {{ $data->jenisKelamin == 1 ? 'checked' : '' }} required>Laki-laki
        <input type="radio" id="jenisKelamin2" name="jenisKelamin" value="2" {{ $data->jenisKelamin == 2 ? 'checked' : '' }} required>Perempuan<br><br>

        <label for="pekerjaan">Pekerjaan:</label><br>
        <input type="text" id="pekerjaan" name="pekerjaan" value="{{ $data->pekerjaan }}" required><br><br>

        <label for="agama">Agama:</label><br>
        <input type="text" id="agama" name="agama" value="{{ $data->agama }}" required><br><br>

        <label for="nik">NIK:</label><br>
        <input type="text" id="nik" name="nik" value="{{ $data->nik }}" required><br><br>

        <label for="no_KK">Nomor KK:</label><br>
        <input type="text" id="no_KK" name="no_KK" value="{{ $data->no_KK }}" required><br><br>

        <label for="keperluan">Keperluan:</label><br>
        <input type="text" id="keperluan" name="keperluan" value="{{ $data->keperluan }}" required><br><br>

        <label for="golonganDarah">Golongan Darah:</label><br>
        <input type="text" id="golonganDarah" name="golonganDarah" value="{{ $data->golonganDarah }}" required><br><br>

        <label for="rt">RT:</label><br>
        <input type="text" id="rt" name="rt" value="{{ $data->rt }}" required><br><br>

        <label for="rw">RW:</label><br>
        <input type="text" id="rw" name="rw" value="{{ $data->rw }}" required><br><br>

        <label for="banjar">Banjar:</label><br>
        <input type="text" id="banjar" name="banjar" value="{{ $data->banjar }}" required><br><br>

        <label for="desa">Desa:</label><br>
        <input type="text" id="desa" name="desa" value="{{ $data->desa }}" required><br><br>

        <label for="kecamatan">Kecamatan:</label><br>
        <input type="text" id="kecamatan" name="kecamatan" value="{{ $data->kecamatan }}" required><br><br>

        <label for="kabupaten">Kabupaten:</label><br>
        <input type="text" id="kabupaten" name="kabupaten" value="{{ $data->kabupaten }}" required><br><br>

        <label for="provinsi">Provinsi:</label><br>
        <input type="text" id="provinsi" name="provinsi" value="{{ $data->provinsi }}" required><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
