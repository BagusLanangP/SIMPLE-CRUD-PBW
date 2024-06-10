<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tittle')</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons">
        
    </script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- Untuk form validation with jquery --}}
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.2/jquery.validate.min.js"></script>

    <!-- CSS untuk menyembunyikan elemen -->
    <style>
        .form-surat-box {
            display: none;
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        feather.replace();
        $(document).ready(function() {
            // Fade in saat halaman dimuat
            $(".form-surat-box").fadeIn(800);
            $(".history-surat-content").fadeIn(800);
            $('.linkCreateSurat').animate({
            left: '0'
            }, 500); // Durasi animasi dalam milidetik (1000ms = 1 detik)
            $('.linkViewAllSurat').animate({
                right: '0'
            }, 500); // Durasi animasi dalam milidetik (1000ms = 1 detik)
        

            // Validasi form (MASIH EROR)
            // $("#suratForm").validate({
            //     rules: {
            //         jenissurat: {
            //             required: true
            //         },
            //         name: {
            //             required: true,
            //             minlength: 2
            //         },
            //         kelas: {
            //             required: true
            //         },
            //         prodi: {
            //             required: true
            //         }
            //     },
            //     messages: {
            //         jenissurat: {
            //             required: "Pilih jenis surat"
            //         },
            //         name: {
            //             required: "Nama wajib diisi",
            //             minlength: "Nama harus terdiri dari minimal 2 karakter"
            //         },
            //         kelas: {
            //             required: "Kelas wajib diisi"
            //         },
            //         prodi: {
            //             required: "Prodi wajib diisi"
            //         }
            //     },
            //     errorElement: "div",
            //     errorPlacement: function(error, element) {
            //         error.addClass('invalid-feedback');
            //         if (element.prop('type') === 'checkbox') {
            //             error.insertAfter(element.siblings('label'));
            //         } else {
            //             error.insertAfter(element);
            //         }
            //     },
            //     highlight: function(element, errorClass, validClass) {
            //         $(element).addClass('is-invalid').removeClass('is-valid');
            //     },
            //     unhighlight: function(element, errorClass, validClass) {
            //         $(element).addClass('is-valid').removeClass('is-invalid');
            //     }
            // });

            // Fade out saat meninggalkan halaman
            $(window).on('beforeunload', function() {
                $('.form-surat-box').fadeOut(1000);
            });
            $(window).on('beforeunload', function() {
                $('.history-surat-content').fadeOut(1000);
            });
        });
    </script>
</body>
</html>
