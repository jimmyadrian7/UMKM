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
            @for ($i = 0; $i < 3; $i++)
                <div class="card umkm-rounded mr-5 shadow">
                    <div class="card-body py-0">
                        <div class="row">
                            <div class="col-sm-5 pl-5 py-5 small">
                                <img src="{{asset('/assets/images/pixie.jpg')}}" width="100">
                                <ul class="mt-2 pl-3">
                                    <li>Cari barang kebutuhan</li>
                                    <li>Cari dari pasar setempat agar hemat ongkir</li>
                                    <li>Chat langsung dengan penjual melalui whatsapp</li>
                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <img src="{{asset('/assets/images/pixie.jpg')}}" width="100" class="mt-4">
                            </div>
                            <div class="col-sm-5 small umkm-flex-right">
                                <div class="col-12 text-right">
                                    <img src="{{asset('/assets/images/pixie.jpg')}}" width="100" class="pull-right">
                                </div>
                                <ul class="mt-2 pl-3">
                                    <li>Menawarkan barang dan harga dengan pembeli</li>
                                    <li>Langsung Pick-up jasa antar barang</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="container">
        
        <div class="shadow my-5 card umkm-rounded border-0">
            <div class="card-body">
                <h4 class="nav-link">Kategori</h4>
                <div class="d-flex flex-wrap mt-2">
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Alat Dapur</button>
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Bahan Pokok</button>
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Buah</button>
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Daging</button>
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Fashion</button>
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Handphone</button>
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Ikan</button>
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Makanan & Minuman</button>
                    <button class="btn umkm-btn-kategori mr-4 mb-3">Office & Stationary</button>
                </div>
            </div>
        </div>

        <hr class="border-dark">

        <div class="row mb-5">
            <h2 class="col-12 nav-link font-weight-bold">UMKM</h2>
            <div class="row">
                @for ($i = 0; $i < 8; $i++)
                    <a href="/pembeli/produk/detail" class="umkm-flex-center col-sm-3 mb-5 btn">
                        <div class="card umkm-rounded border-0 shadow col-12 p-0">
                            <div class="card-body p-0">
                                <img src="{{asset('/assets/images/misini.jpg')}}" class="umkm-rounded-top w-100">
                                <div class="px-3 py-4 text-dark">ES KRIM MISINI</div>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
            <div class="umkm-flex-right col-12">
                <button class="btn btn-dark rounded-pill py-2 px-4">Lihat Lebih Banyak</button>
            </div>
        </div>

        <hr class="border-dark">


        <div class="row mb-5">
            <h2 class="col-12 nav-link font-weight-bold">Produk Terlaris</h2>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <a href="#" class="umkm-flex-center col-sm-3 mb-5 btn">
                        <div class="card umkm-rounded border-0 shadow col-12 p-0">
                            <div class="card-body p-0">
                                <img src="{{asset('/assets/images/misini.jpg')}}" class="umkm-rounded-top w-100">
                                <div class="px-3 py-4 text-dark text-left">
                                    <div class="mb-3">ES KRIM MISINI</div>
                                    <div>Rp. 10.000,-</div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>

    </div>

    <footer class="text-center umkm-bg-green text-white p-3 umkm-rounded-top">
        2020&copy; Pasar Trenggalek Supported by Kantor Cabang BRI Trenggalek | Kebijakan & Privasi
    </footer>

@endsection