<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pengguna</title>
</head>
<body>
    <h1>Profil Pengguna</h1>
    @if ($data)
        <h1>Nama Lengkap: {{ $data->namaLengkap }}</h1>
        <p>Tempat Lahir: {{ $data->tempatLahir }}</p>
        <p>Tanggal Lahir: {{ $data->tanggal }} {{ $data->bulan }} {{ $data->tahun }}</p>
        <p>Warga Negara: {{ $data->warganegara }}</p>
        <p>Jenis Kelamin: {{ $data->jenisKelamin == 1 ? 'Laki-laki' : 'Perempuan' }}</p>
        <p>Pekerjaan: {{ $data->pekerjaan }}</p>
        <p>Agama: {{ $data->agama }}</p>
        <p>NIK: {{ $data->nik }}</p>
        <p>Nomor KK: {{ $data->no_KK }}</p>
        <p>Keperluan: {{ $data->keperluan }}</p>
        <p>Golongan Darah: {{ $data->golonganDarah }}</p>
        <p>RT: {{ $data->rt }}</p>
        <p>RW: {{ $data->rw }}</p>
        <p>Banjar: {{ $data->banjar }}</p>
        <p>Desa: {{ $data->desa }}</p>
        <p>Kecamatan: {{ $data->kecamatan }}</p>
        <p>Kabupaten: {{ $data->kabupaten }}</p>
        <p>Provinsi: {{ $data->provinsi }}</p>
    @else
        <p>Data profil tidak ditemukan.</p>
    @endif
</body>
</html>
