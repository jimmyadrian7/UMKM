<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UMKM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/template.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">

        <!-- Script -->
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg umkm-bg-green d-flex justify-content-between align-items-center px-4 sticky-top rounded_nav">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" height="80">
        </nav>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 border border-dark mt-5 shadow rounded-8">
                    <div class="p-5 d-flex justify-content-center">
                        <div class="text-center container align-content-center ">
                            <H1>Register</H1>
                            <input class="form-control form-control-lg rounded-8 mt-5" type="text" name="name" id="name" placeholder="Nama Lengkap">
                            <select name="catagories" id="catagories" class="form-control form-control-lg rounded-8 umkm-select mt-5">
                                <option value="" selected disabled>Kategori</option>
                            </select>
                            <input class="form-control form-control-lg rounded-8 mt-5" name="email" id="email" type="text" placeholder="Email">
                            <input class="form-control form-control-lg rounded-8 mt-5" name="phone" id="phone" type="text" placeholder="No. Handphone">
                            <input class="form-control form-control-lg rounded-8 mt-5" name="password" id="password" type="text" placeholder="Password">
                            <input class="form-control form-control-lg rounded-8 mt-5" name="repassword" id="repassword" type="text" placeholder="Re-Password">
                            <input class="rounded-8 mt-5" type="checkbox" id="tnc" name="tnc" required>
                            <label class="form-check-label" for="tnc">
                                Menyetujui <a href="#">Syarat & Ketentuan</a> yang Berlaku
                            </label>
                            <a href="/dashboard" class="btn umkm-bg-green btn-lg btn-block rounded-8 mt-3 text-white">Daftar</a>
                            <p class="mt-3">Sudah Punya Akun? <a href="/"><b>LOGIN</b></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
        <footer class="container-fluid bg-4 text-center text-white umkm-bg-green p-3 mt-5">
            <h3>2020 &copy; Trengglek Supported by Kantor Cabang BRI Trenggalek | <a href="#" class="text-white">Privacy & Policy</a></h3> 
          </footer>
    </body>
</html>
