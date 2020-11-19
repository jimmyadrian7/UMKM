@extends('template.PembeliTemplate')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/Product-Gallery-Image-Zoom/css/main.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('/assets/Product-Gallery-Image-Zoom/scripts/zoom-image.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('/assets/Product-Gallery-Image-Zoom/scripts/main.js') }}" defer></script>
@endpush

@section('content')

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
                <h6 class="mb-3">KEDAI CINCAOE VAN JAVA</h6>
                <h2 class="font-weight-bold">CINCAOE BIASA</h2>
                
                <hr class="border-dark">

                <div class="row">
                    <div class="mt-4 col-7">
                        <div class="text-gray">HARGA</div>
                        <h3 class="text-red text-center">Rp. 5000,-</h3>
                    </div>
                </div>

                <hr class="border-dark">

                <div class="row mt-4 umkm-flex-center">
                    <div class="col-7">
                        <div class="text-gray">JUMLAH</div>
                        <h3 class="text-red text-center">Rp. 5000,-</h3>
                    </div>
                    <div class="col-5 align-items-center d-flex justify-content-end">
                        <button class="btn umkm-btn-beli">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-dark">


        <div class="row mb-5">
            <h2 class="col-12 nav-link font-weight-bold">UMKM</h2>
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