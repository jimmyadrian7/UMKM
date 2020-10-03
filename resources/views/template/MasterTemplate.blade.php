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
        <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/template.css') }}">

        <!-- Script -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/js/select2.min.js') }}" defer="true"></script>

        <script src="{{ asset('/assets/js/popup.js') }}" defer="true"></script>
        {{-- <script src="{{ asset('/assets/js/select.js') }}" defer="true"></script> --}}
        
    </head>
    <body>

        <div class="container-fluid h-100 d-flex flex-column">

            <nav class="row navbar navbar-expand-lg umkm-bg-green d-flex justify-content-between align-items-center px-4 sticky-top">
                <a href="navbar-brand" href="#">
                    <img src="{{ asset('/assets/images/icon/list_rotate.png') }}" alt="hamburger list" height="40">
                    <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" height="40">
                </a>
                <div class="d-flex align-items-center col-4">
                    <input type="text" name="search" class="form-control rounded-pill border-0" placeholder="search...">
                </div>
                <div class="button-group">
                    <button class="btn btn-default"><img src="{{ asset('/assets/images/icon/bell.png') }}" alt="bell" height="40"></button>
                    <button class="btn btn-default rounded-circle p-0">
                        <img src="{{ asset('/assets/images/pixie.jpg') }}" alt="profile picture" height="40" class="rounded-circle">
                    </button>
                </div>
            </nav>

            <div class="row umkm-flex-grow">
                <div class="col-md-2">
                </div>
                <div class="col-md-2 umkm-left-navbar mt-2">
                    <a class="row umkm-list {{$active == 'dashboard'? 'active':''}}" href="/dashboard">
                        <div class="col-4">
                            {{-- <img src="{{ asset('/assets/images/icon/home.svg') }}" alt="Dashboard Icon" height="40"> --}}
                            <i class="fa fa-home fa-3x"></i>
                        </div>
                        <div class="col-8 font-weight-bold">
                            DASHBOARD
                        </div>
                    </a>
                    <a class="row umkm-list pt-2 {{$active == 'pesanan'? 'active':''}}" href="/pesanan">
                        <div class="col-4">
                            <img src="{{ asset('/assets/images/icon/pesanan.svg') }}" alt="Pesanan Icon" height="40">
                        </div>
                        <div class="col-8 font-weight-bold">
                            PESANAN
                        </div>
                    </a>
                    <a class="row umkm-list {{$active == 'pengiriman'? 'active':''}}" href="/pengiriman">
                        <div class="col-4">
                            {{-- <img src="{{ asset('/assets/images/icon/trolley.svg') }}" alt="Pengiriman Icon" height="40"> --}}
                            <i class="fa fa-paper-plane fa-3x"></i>
                        </div>
                        <div class="col-8 font-weight-bold">
                            PENGIRIMAN
                        </div>
                    </a>
                    <a class="row umkm-list {{$active == 'akses'? 'active':''}}" href="/akses">
                        <div class="col-4">
                            {{-- <img src="{{ asset('/assets/images/icon/user.png') }}" alt="Akses Icon" height="40"> --}}
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <div class="col-8 font-weight-bold">
                            KELOLA AKSES
                        </div>
                    </a>
                </div>

                <div class="col-md-10 px-4 py-2 umkm-bg-light-green h-100">
                    @yield('content')
                </div>

            </div>
        </div>

    </body>
</html>
