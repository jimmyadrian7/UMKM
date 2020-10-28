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
        <link rel="stylesheet" href="{{ asset('/assets/css/ion.rangeSlider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/DataTables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/jquery-labelauty-master/jquery-labelauty.css') }}">
        
        <link rel="stylesheet" href="{{ asset('/assets/css/template.css') }}">
        @stack('styles')

        <!-- Script -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/js/popper.min.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/js/select2.min.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/js/ion.rangeSlider.min.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/DataTables/datatables.min.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/jquery-labelauty-master/jquery-labelauty.js') }}" defer="true"></script>

        <script src="{{ asset('/assets/js/popup.js') }}" defer="true"></script>
        <script src="{{ asset('/assets/js/data.tables.js') }}" defer="true"></script>
        @stack('scripts')
        
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
                <div class="d-flex">
                    <div class="dropdown mr-2">
                        <button class="btn btn-default" data-toggle="dropdown" >
                            <img src="{{ asset('/assets/images/icons/alarm.svg') }}" alt="bell" height="40">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right umkm-rounded p-0" style="width: 300px">
                            <div class="umkm-header bg-dark text-white p-2 text-center">Pemberitahuan</div>
                            <div class="card umkm-shadow">
                                <div class="row no-gutters">
                                    <div class="col-md-3 d-flex umkm-flex-center align-items-center">
                                        <i class="fa fa-check-circle fa-3x"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body px-2">
                                            <div class="card-title small">22 Januari 2020</div>
                                            <div class="card-text small">Pesanan ID 234 Telah Diterima!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-3 d-flex umkm-flex-center align-items-center">
                                        <i class="fa fa-map-marker fa-3x"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body p-2">
                                            <div class="card-title small">22 Januari 2020</div>
                                            <div class="card-text small">Kurir pickup pesanan ID 235!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-3 d-flex umkm-flex-center align-items-center">
                                        <i class="fa fa-inbox fa-3x"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body p-2">
                                            <div class="card-title small">22 Januari 2020</div>
                                            <div class="card-text small">Toko buah menerima pesanan baru!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mb-3"></div> --}}
                        </div>
                    </div>

                    <button class="btn btn-default rounded-circle p-0">
                        <img src="{{ asset('/assets/images/pixie.jpg') }}" alt="profile picture" height="40" class="rounded-circle">
                    </button>
                </div>
            </nav>

            @yield('Parentcontent')
            
        </div>

    </body>
</html>
