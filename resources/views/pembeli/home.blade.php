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
            @foreach ($banner as $banner)
                <div class="card umkm-rounded mr-5 shadow">
                    <div class="card-body py-0 home-banner">
                        <img src="{{$banner->BannerImage}}" class="w-100">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        
        <div class="shadow my-5 card umkm-rounded border-0">
            <div class="card-body">
                <h4 class="nav-link">Kategori</h4>
                <div class="d-flex flex-wrap mt-2">
                    @if ($categories->count() > 0)
                        @foreach ($categories as $item)
                        <a href="#"><button class="btn umkm-btn-kategori mr-4 mb-3">{{$item->CategoryName}}</button></a>
                        {{-- <a href="#"><button class="btn umkm-btn-kategori mr-4 mb-3">Alat Dapur</button></a> --}}
                        {{-- <button class="btn umkm-btn-kategori mr-4 mb-3">Bahan Pokok</button>
                        <button class="btn umkm-btn-kategori mr-4 mb-3">Buah</button>
                        <button class="btn umkm-btn-kategori mr-4 mb-3">Daging</button>
                        <button class="btn umkm-btn-kategori mr-4 mb-3">Fashion</button>
                        <button class="btn umkm-btn-kategori mr-4 mb-3">Handphone</button>
                        <button class="btn umkm-btn-kategori mr-4 mb-3">Ikan</button>
                        <button class="btn umkm-btn-kategori mr-4 mb-3">Makanan & Minuman</button>
                        <button class="btn umkm-btn-kategori mr-4 mb-3">Office & Stationary</button> --}}
                        @endforeach
                    @else
                        <div class="text-muted">
                            Maaf tidak ada kategori yang tersedia
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <hr class="border-dark">

        <div class="row mb-5">
            <h2 class="col-12 nav-link font-weight-bold">UMKM</h2>
            <div class="row">
                @foreach ($barang as $barang)
                <a href="#" class="umkm-flex-center col-sm-3 mb-5 btn">
                    <div class="card umkm-rounded border-0 shadow col-12 p-0">
                        <div class="card-body p-0">
                            <img src="{{asset('/assets/images/misini.jpg')}}" class="umkm-rounded-top w-100">
                            <div class="px-3 py-4 text-dark text-left">
                                <div class="mb-3">{{$barang->ProductName}}</div>
                                <div>{{'Rp. ' . number_format(strval($barang->ProductPrice)) . ",-"}}</div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            @if ($barang->count() == 8)
                <div class="umkm-flex-right col-12">
                    <button class="btn btn-dark rounded-pill py-2 px-4">Lihat Lebih Banyak</button>
                </div>
            @endif
            
            @if($barang->count() >= 0)
                <div class="col-12">
                    <div class="col-12 text-muted">
                        Maaf tidak ada produk yang tersedia
                    </div>
                </div>
            @endif
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