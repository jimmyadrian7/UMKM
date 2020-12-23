@extends('template.PembeliTemplate')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/Product-Gallery-Image-Zoom/css/main.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('/assets/Product-Gallery-Image-Zoom/scripts/zoom-image.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('/assets/Product-Gallery-Image-Zoom/scripts/main.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('/assets/js/input.js') }}" defer></script>
@endpush

@section('content')

    <div class="container">
        
        <!-- <div class="umkm-shadow my-5 card umkm-rounded border-0">
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
        </div> -->

        <!-- <hr class="umkm-border-green"> -->

        <div class="row py-5">
            <div class="col-md-5">
                <div class="container">
                    <div class="show" href="{{asset('/assets/images/misini.jpg')}}">
                        <img src="{{asset('/assets/images/misini.jpg')}}" class="border-0 umkm-rounded" id="show-img">
                    </div>
                    <div class="small-img">
                        <i class="fa fa-chevron-right icon-left" id="prev-img"></i>
                        <div class="small-container">
                            <div id="small-img-roll">
                                <img src="{{asset('/assets/images/misini.jpg')}}" class="show-small-img border-0 umkm-rounded" alt="">
                                <img src="{{asset('/assets/images/pixie.jpg')}}" class="show-small-img border-0 umkm-rounded" alt="">
                                <img src="{{asset('/assets/images/misini.jpg')}}" class="show-small-img border-0 umkm-rounded" alt="">
                                <img src="{{asset('/assets/images/sock.jpg')}}" class="show-small-img border-0 umkm-rounded" alt="">
                                <img src="{{asset('/assets/images/misini.jpg')}}" class="show-small-img border-0 umkm-rounded" alt="">
                            </div>
                        </div>
                        <i class="fa fa-chevron-right icon-right" id="next-img"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-7"> 
                <h5 class="text-green font-weight-bold">KEDAI CINCAOE VAN JAVA</h5>
                <div class="small text-muted">Perumahan sumberingin indah Blok B-4 Kec Karangan</div>
                <h2 class="font-weight-bold py-4">CINCAOE BIASA</h2>
                
                <hr class="border-dark">

                <div class="row">
                    <div class="mt-4 col-7">
                        <div class="text-green font-weight-bold">HARGA</div>
                        <h3 class="">Rp. 5000,-</h3>
                    </div>
                </div>

                <hr class="border-dark">

                <div class="row mt-4 umkm-flex-center">
                    <div class="col-7">
                        <div class="text-green font-weight-bold">JUMLAH</div>
                        <div class="d-flex justify-content-center">
                            <button class="btn umkm-btn-gray btn-remove rounded-circle"><i class="fa fa-minus"></i></button>
                            <input type="text" name="jumlah" class="form-control umkm-text-jumlah" value="1">
                            <button class="btn umkm-bg-green btn-add text-white rounded-circle"><i class="fa fa-plus"></i></button>
                        </div>
                        <div class="text-green small font-italic text-center mt-2">Pembelian Minimal 1 Pcs</div>
                    </div>
                    <div class="col-5 align-items-center d-flex justify-content-end">
                        <button class="btn umkm-btn-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="umkm-border-green">
        <h4 class="bold mt-4">Deskripsi Produk</h4>
        <hr class="umkm-border-light-green">
        <p class="mb-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <hr class="umkm-border-green">

        <div class="row mb-5">
            <h2 class="col-12 nav-link font-weight-bold">UMKM Lainnya</h2>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <a href="#" class="umkm-flex-center col-sm-3 mb-5 btn">
                        <div class="card umkm-rounded border-0 shadow col-12 p-0">
                            <div class="card-body p-0">
                                <img src="{{asset('/assets/images/misini.jpg')}}" class="umkm-rounded-top w-100">
                                <div class="px-3 py-4 text-dark text-left">
                                    <div class="mb-3 bold">ES KRIM MISINI</div>
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