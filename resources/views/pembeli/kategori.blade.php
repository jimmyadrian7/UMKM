@extends('template.PembeliTemplate')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/slick-1.8.1/slick.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('/assets/slick-1.8.1/slick.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('/assets/js/slideshow.js') }}" defer></script>
@endpush

@section('content')

    <div class="mt-2 px-0 py-5" style="background-color: #e4dddd;">
        <div class="col-12 px-0 center">
            <div class="card umkm-rounded mr-5 umkm-shadow">
                <div class="card-body py-0 home-banner">
                    <img src="{{asset('/assets/images/misini.jpg')}}" class="w-100">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="shadow my-5 card umkm-rounded border-0">
            <div class="card-body">
                <h4 class="nav-link">Kategori</h4>
                <div class="d-flex flex-wrap mt-2">
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori mr-4 mb-3">Alat Dapur</a>
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori mr-4 mb-3">Bahan Pokok</a>
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori mr-4 mb-3">Buah</a>
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori mr-4 mb-3">Daging</a>
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori mr-4 mb-3">Fashion</a>
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori mr-4 mb-3">Handphone</a>
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori mr-4 mb-3">Ikan</a>
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori active mr-4 mb-3">Makanan & Minuman</a>
                    <a href="/pembeli/kategori" class="btn umkm-btn-kategori mr-4 mb-3">Office & Stationary</a>
                </div>
            </div>
        </div>

        <hr class="umkm-border-green">

        <div class="row mb-5">
            <div class="umkm-flex-between mt-4 mb-5 w-100">
                <div class="bold uppsercase h2">Makanan & Minuman</div>
                <div class="input-search-container d-flex">
                    <input type="text" name="search" class="form-control input-search" placeholder="Search ...">
                    <div class="umkm-bg-green umkm-flex-between text-white px-2 umkm-radius-right"><i class="fa fa-search"></i></div>
                </div>
            </div>
            
            <div class="row">
                <a href="/pembeli/produk/detail" class="umkm-flex-center col-sm-3 mb-5 btn">
                    <div class="card umkm-rounded border-0 shadow col-12 p-0">
                        <div class="card-body p-0">
                            <img src="{{asset('/assets/images/misini.jpg')}}" class="umkm-rounded-top w-100">
                            <div class="px-3 py-4 text-dark text-left">
                                <div class="uppsercase text-center">Es Krim Misini</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="umkm-flex-right col-12">
                <div class="btn-group">
                    <button class="btn btn-sm umkm-border-green rounded-0"><i class="fa fa-angle-double-left"></i></button>
                    <button class="btn btn-sm umkm-border-green active rounded-0">1</button>
                    <button class="btn btn-sm umkm-border-green rounded-0">2</button>
                    <button class="btn btn-sm umkm-border-green rounded-0"><i class="fa fa-angle-double-right"></i></button>
                </div>
            </div>            
        </div>

    </div>

    <footer class="text-center umkm-bg-green text-white p-3 umkm-rounded-top">
        2020&copy; Pasar Trenggalek Supported by Kantor Cabang BRI Trenggalek | Kebijakan & Privasi
    </footer>

@endsection