@extends('template.MasterTemplate')

@section('Parentcontent')

    <div class="row umkm-flex-grow">
        <div class="col-md-3 col-lg-2">
        </div>
        <div class="col-md-3 col-lg-2 umkm-left-navbar mt-2">
            <a class="row umkm-list {{$active == 'dashboard'? 'active':''}}" href="/admin/dashboard">
                <div class="col-4">
    				<img src="{{ asset('/assets/images/icons/home.svg') }}" height="40"/>
                </div>
                <div class="col-8 font-weight-bold">
                    DASHBOARD
                </div>
            </a>
            <a class="row umkm-list pt-2 {{$active == 'pesanan'? 'active':''}}" href="/admin/pesanan">
                <div class="col-4">
                    <img src="{{ asset('/assets/images/icon/pesanan.svg') }}" alt="Pesanan Icon" height="40">
                </div>
                <div class="col-8 font-weight-bold">
                    PESANAN
                </div>
            </a>
            <a class="row umkm-list {{$active == 'pengiriman'? 'active':''}}" href="/admin/pengiriman">
                <div class="col-4">
                    <img src="{{ asset('/assets/images/icons/paper-plane-1.svg') }}" alt="Pengiriman Icon" height="40">
                </div>
                <div class="col-8 font-weight-bold">
                    PENGIRIMAN
                </div>
            </a>
            <a class="row umkm-list {{$active == 'akses'? 'active':''}}" href="/admin/akses">
                <div class="col-4">
                    {{-- <img src="{{ asset('/assets/images/icon/user.png') }}" alt="Akses Icon" height="40"> --}}
                    <i class="fa fa-users fa-3x"></i>
                </div>
                <div class="col-8 font-weight-bold">
                    KELOLA AKSES
                </div>
            </a>
        </div>

        <div class="col-md-9 col-lg-10 px-4 py-2 umkm-bg-light-green h-100">
            @yield('content')
        </div>
    </div>

@endsection