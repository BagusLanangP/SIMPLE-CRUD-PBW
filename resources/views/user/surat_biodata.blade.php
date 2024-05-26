<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Surat</title>
    <style>
        /* INI Style nya */
        .kop-surat {
            text-align: center;
            margin-bottom: 2em;
        }
        .kop-surat h1 {
            font-size: 24px;
            font-weight: bold;
        }
        .kop-surat h2 {
            font-size: 20px;
        }
        .kop-surat h4 {
            font-size: 16px;
        }
        .judul-surat {
            text-align: center;
            margin: 2em 0;
        }
        .judul-surat h2 {
            font-size: 22px;
            font-weight: bold;
        }
        .judul-surat h4 {
            font-size: 18px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
        <div class="col-8 shadow-lg mt-4 mb-4 p-5">
        <!-- INI Kopsurat -->
        <div class="kop-surat">
            <h1>Pemerintah Kabupaten {{ kabupaten }}</h1>
            <h2>Kecamatan {{ kecamatan }}</h2>
            <h2>Desa {{ desa }}</h2>
            <h4>Alamat Desa {{ alamat_desa }}</h4>
        </div>
        <table class="table">
            <tr>
                <td>{{ kode_desa }}</td>
                <td></td>
                <td>{{ kode_surat }}</td>
            </tr>
        </table>
        <!-- INI Judul Surat -->
        <div class="judul-surat">
            <h2>{{ judul_surat }}</h2>
            <h4>Nomor: {{ nomor }}/{{ tahun }}</h4>
        </div>
        
        <p>Yang bertanda tangan di bawah ini kami Desa {{ nama_desa }}, Kecamatan {{ nama_kec }}, Kabupaten {{ nama_kab }}, menerangkan dengan sebenarnya bahwa:</p>
        
        <table>
            <tr>
                <td style="width: 200px;">Nama</td>
                <td>:</td>
                <td>{{ s.name }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td>{{ s.ttl }}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{ s.umur }}</td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td>:</td>
                <td>{{ s.warga_negara }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ s.agama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ s.jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ s.pekerjaan }}</td>
            </tr>
            <tr>
                <td>Tempat Tinggal</td>
                <td>:</td>
                <td>{{ s.tempat_tinggal }}</td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td>:</td>
                <td>{{ s.ktp }}</td>
            </tr>
            <tr>
                <td>Nomor KK</td>
                <td>:</td>
                <td>{{ s.kk }}</td>
            </tr>
            <tr>
                <td>Keperluan</td>
                <td>:</td>
                <td>{{ s.keperluan }}</td>
            </tr>
            <tr>
                <td>Berlaku</td>
                <td>:</td>
                <td>{{ s.berlaku }}</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>:</td>
                <td>{{ s.golongan_darah }}</td>
            </tr>
        </table>

        <p>Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>

        <div class="row mt-5">
            <div class="col-6 text-center">
                <p>Mengetahui,</p>
                <p><strong>{{ pejabat }}</strong></p>
                <p>{{ jabatan }}</p>
            </div>
            <div class="col-6 text-center">
                <p>{{ tempat }}, {{ tanggal }}</p>
                <p><strong>{{ kepala_desa }}</strong></p>
                <p>Kepala Desa {{ desa }}</p>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    </div>
</body>
</html>
