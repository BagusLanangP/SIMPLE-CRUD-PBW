<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Dokumen</title>
  <link rel="stylesheet" href="{{ asset('css/view-surat.css') }}">

</head>

<body>

  <div class="book">
    <div class="page" id="result">
        <h2 style="text-align: center;">SURAT PERNYATAAN</h2>
      <p style="margin-top: 50px; margin-bottom: 30px;">Saya yang bertanda tangan dibawah ini:</p>
      <table>
        <tr>
          <td style="width: 100px;">Nama </td>
          <td>:</td>
          <td>&nbsp;{{ $s->name }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">kelas</td>
          <td>:</td>
          <td>&nbsp;{{ $s->kelas }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">Prodi</td>
          <td>:</td>
          <td>&nbsp;{{ $s->prodi }}</td>
        </tr>
      </table>
      <p style="margin-top: 30px;line-height:1.5;">Dengan ini saya menyatakan bahwa data saya yang tercantum pada Pusat Data &nbsp;{{ $s->prodi }} tidak benar. 
        Maka dengan surat ini saya mengajukan untuk mengubah data tersebut dengan data yang benar. Saya memohon kesediaan Bapak/Ibu untuk meluangkan waktu untuk mengubah data saya di Pusat Data  &nbsp;{{ $s->prodi }}. 
        Saya ucapkan terima kasih.</p>
      <div style="margin-top: 80px;float:right">
        <div style="width: 250px;text-align: left;">
          <p>Jimbaran , <span id="date"></span> <span id="month"></span> <span id="year"></span></p>
          <p>Pengirim</p>
          <p style="margin-top: 80px;">&nbsp;{{ $s->name }}</p>
        </div>
      </div>
    </div>
  </div>

  
<script src="{{ asset('JS/view-surat.js') }}"></script>
</body>

</html>