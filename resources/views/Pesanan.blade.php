@extends('template.MasterTemplate')

@section('content')


    <div class="mb-4 font-weight-bold">PESANAN</div>

    <div class="row">
        <div class="col-12">
            
            <div class="card umkm-rounded shadow">
                <div class="card-body">

                    <ul class="nav nav-tabs border-0 mb-3 row">
                       <li class="nav-item">
                           <h4 class="nav-link font-weight-bold no-event">
                               STATUS
                           </h4>
                       </li> 
                       <li class="nav-item">
                           <a href="#semua_pesanan" data-toggle="tab" class="nav-link umkm-nav rounded-pill text-dark active">
                               Semua Pesanan
                           </a>
                       </li> 
                       <li class="nav-item">
                           <a href="#pesanan_baru" data-toggle="tab" class="nav-link umkm-nav rounded-pill text-dark">
                               Pesanan Baru
                           </a>
                       </li> 
                       <li class="nav-item">
                           <a href="#pesanan_dikirim" data-toggle="tab" class="nav-link umkm-nav rounded-pill text-dark">
                               Pesanan Dikirim
                           </a>
                       </li> 
                       <li class="nav-item">
                           <a href="#pesanan_selesai" data-toggle="tab" class="nav-link umkm-nav rounded-pill text-dark">
                               Pesanan Selesai
                           </a>
                       </li> 
                    </ul>

                    <div class="tab-content mb-3">
                        <div class="tab-pane fade show active" id="semua_pesanan">
                            <div class="row">
                                <div class="col-5">
                                    <div class="rounded-pill shadow umkm-border-green shadow d-flex p-1 align-items-center">
                                        <img src="{{ asset('/assets/images/icon/bell.png') }}" alt="calendar icon" width="30" class="mr-2">
                                        <input type="text" name="tanggal" placeholder="17 Desember 2020 - 20 Desember 2020" class="form-control border-0 mr-2">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="rounded-pill shadow umkm-border-green shadow d-flex p-1 align-items-center">
                                        <input type="text" name="tanggal" placeholder="Cari Nama Toko, Nomor Invoice..." class="form-control border-0 ml-2">
                                        <img src="{{ asset('/assets/images/icon/bell.png') }}" alt="calendar icon" width="30" class="mr-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="pesanan_baru">
                            <div class="row">
                                <div class="col-5">
                                    <div class="rounded-pill shadow umkm-border-green shadow d-flex p-1 align-items-center">
                                        <img src="{{ asset('/assets/images/icon/bell.png') }}" alt="calendar icon" width="30" class="mr-2">
                                        <input type="text" name="tanggal" placeholder="17 Desember 2020 - 20 Desember 2020" class="form-control border-0 mr-2">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="rounded-pill shadow umkm-border-green shadow d-flex p-1 align-items-center">
                                        <input type="text" name="tanggal" placeholder="Cari Nama Toko, Nomor Invoice..." class="form-control border-0 ml-2">
                                        <img src="{{ asset('/assets/images/icon/bell.png') }}" alt="calendar icon" width="30" class="mr-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        
        <div class="col-12">
            <div class="card umkm-rounded shadow">
                <div class="card-body p-0">

                    <div class="umkm-header umkm-bg-creme text-white py-2 px-4 d-flex align-items-center">
                        <div class="white-box mr-2">&nbsp;</div>
                        <span>234gH79A</span>
                    </div>
                    
                    <div class="row px-1 py-3 d-flex flex-wrap">
                        <div class="col-sm-5 border-right d-flex">
                            <div class="col-4">
                                <img src="{{ asset('/assets/images/pixie.jpg') }}" alt="Sample Images" class="w-100">
                            </div>
                            <div class="col-8 text-uppercase">
                                <div class="umkm-header">
                                    Endang Kitchen Set
                                </div>
                                <div class="small text-muted">
                                    1 Product @ Rp.99.000,-
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="card-title text-uppercase">
                                Pembeli
                            </div>
                            <div class="small text-muted">
                                Endang Sukamto <br>
                                Jl. Kenangan 9 No. 5, Ikat Kasih <br>
                                Jakarta 14045 <br>
                                08765432167
                            </div>
                        </div>
                        <div class="col-sm-1 d-flex align-items-end">
                            <button class="btn btn-default shadow rounded-pill text-uppercase px-4 umkm-border-creme">
                                Delivery
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection