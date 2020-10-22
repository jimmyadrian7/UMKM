@extends('template.MasterTemplate')

@section('Parentcontent')

    <div class="row umkm-flex-grow">
        <div class="col-md-3 col-lg-2">
        </div>
        <div class="col-md-3 col-lg-2 umkm-left-navbar mt-2">
            <a class="row umkm-list {{$active == 'dashboard'? 'active':''}}" href="/penjual/dashboard">
                <div class="col-4">
                    <img src="{{ asset('/assets/images/icons/home.svg') }}" height="40"/>
                </div>
                <div class="col-8 font-weight-bold">
                    DASHBOARD
                </div>
            </a>
            <a class="row umkm-list pt-2 {{$active == 'produk'? 'active':''}}" href="/penjual/produk">
                <div class="col-4">
                    <img src="{{ asset('/assets/images/icon/pesanan.svg') }}" alt="Produk Icon" height="40">
                </div>
                <div class="col-8 font-weight-bold">
                    PRODUK
                </div>
            </a>
            <a class="row umkm-list {{$active == 'penjualan'? 'active':''}}" href="/penjual/penjualan">
                <div class="col-4">
                    <img src="{{ asset('/assets/images/icons/paper-plane-1.svg') }}" alt="Penjualan Icon" height="40">
                </div>
                <div class="col-8 font-weight-bold">
                    PENJUALAN
                </div>
            </a>
            <a class="row umkm-list {{$active == 'pengaturan'? 'active':''}}" href="/penjual/pengaturan">
                <div class="col-4">
                    <img src="{{ asset('/assets/images/icons/settings-5.svg') }}" alt="Settings Icon" height="40">
                </div>
                <div class="col-8 font-weight-bold">
                    PENGATURAN
                </div>
            </a>
        </div>

        <div class="col-md-9 col-lg-10 px-4 py-2 umkm-bg-light-green h-100">
            @yield('content')
        </div>
    </div>

@endsection