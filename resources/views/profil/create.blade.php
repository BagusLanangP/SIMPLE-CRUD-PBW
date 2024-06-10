<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/profil" method="POST">
        @csrf
        <label for="namaLengkap">Nama Lengkap:</label><br>
        <input type="text" id="namaLengkap" name="namaLengkap" required><br><br>

        <label for="tempatLahir">Tempat Lahir:</label><br>
        <input type="text" id="tempatLahir" name="tempatLahir" required><br><br>

        <label for="tanggal">Tanggal Lahir:</label><br>
        <input type="number" id="tanggal" name="tanggal" required><br><br>

        <label for="bulan">Bulan Lahir:</label><br>
        <select id="bulan" name="bulan" required>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select><br><br>

        <label for="tahun">Tahun Lahir:</label><br>
        <input type="number" id="tahun" name="tahun" required><br><br>

        <label for="warganegara">Warga Negara:</label><br>
        <input type="text" id="warganegara" name="warganegara" required><br><br>

        <label for="jenisKelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="jenisKelamin1" name="jenisKelamin" value="1" required>Laki-laki
        <input type="radio" id="jenisKelamin2" name="jenisKelamin" value="2" required>Perempuan<br><br>

        <label for="pekerjaan">Pekerjaan:</label><br>
        <input type="text" id="pekerjaan" name="pekerjaan" required><br><br>

        <label for="agama">Agama:</label><br>
        <input type="text" id="agama" name="agama" required><br><br>

        <label for="nik">NIK:</label><br>
        <input type="number" id="nik" name="nik" required><br><br>

        <label for="no_KK">Nomor KK:</label><br>
        <input type="number" id="no_KK" name="no_KK" required><br><br>

        <label for="keperluan">Keperluan:</label><br>
        <input type="text" id="keperluan" name="keperluan" required><br><br>

        <label for="golonganDarah">Golongan Darah:</label><br>
        <input type="text" id="golonganDarah" name="golonganDarah" required><br><br>

        <label for="rt">RT:</label><br>
        <input type="text" id="rt" name="rt" required><br><br>

        <label for="rw">RW:</label><br>
        <input type="text" id="rw" name="rw" required><br><br>

        <label for="banjar">Banjar:</label><br>
        <input type="text" id="banjar" name="banjar" required><br><br>

        <label for="desa">Desa:</label><br>
        <input type="text" id="desa" name="desa" required><br><br>

        <label for="kecamatan">Kecamatan:</label><br>
        <input type="text" id="kecamatan" name="kecamatan" required><br><br>

        <label for="kabupaten">Kabupaten:</label><br>
        <input type="text" id="kabupaten" name="kabupaten" required><br><br>

        <label for="provinsi">Provinsi:</label><br>
        <input type="text" id="provinsi" name="provinsi" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>