@extends('template.PenjualTemplate')

@section('content')


    <div class="mb-4 umkm-title">PRODUK</div>

    <div class="row">
        <div class="col-12">
            
            <div class="card umkm-rounded shadow mb-5">
                <div class="card-body p-0">

                    <div class="umkm-flex-between py-3 border-bottom p-4">
                        <h4 class="nav-link font-weight-bold no-event">
                           Daftar Produk
                       </h4>
                       <a class="btn btn-dark rounded-pill py-2 px-4" href="/penjual/produk/tambah">
                           <i class="fa fa-plus"></i>
                           Tambah Produk
                       </a>
                    </div>

                    <div class="py-3 px-5 border-bottom">
                        <div class="rounded-pill border border-dark d-flex p-1 pr-4 align-items-center col-md-4">
                            <input type="text" name="tanggal" placeholder="Cari Nama Toko, Nomor Invoice..." class="form-control border-0 ml-2">
                            <i class="fa fa-search fa-lg no-event"></i>
                        </div>
                    </div>

                    <div class="p-3">
                        <table class="table table-borderless umkm-table">
                            <thead class="border-bottom border-dark">
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('/assets/images/sock.jpg') }}" alt="5 Packs Socks" height="50">
                                        5 Packs Socks
                                    </td>
                                    <td> Rp.179.000 </td>
                                    <td> 10 </td>
                                    <td> 
                                        <div class="dropdown">
                                            <button class="btn btn-dark" data-toggle="dropdown">Atur</button> 
                                            <div class="dropdown-menu p-0 border-0" style="background-color: transparent;">
                                                <a class="btn p-3 w-75 btn-dark umkm-rounded-top mb-0 border-top shadow" href="/penjual/produk/tambah">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit
                                                </a>
                                                <button class="btn p-3 w-75 btn-light umkm-rounded-bottom mt-0 border-bottom shadow" data-popup="penjual/delete_produk">
                                                    <i class="fa fa-trash"></i>
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('/assets/images/sock.jpg') }}" alt="5 Packs Socks" height="50">
                                        5 Packs Socks
                                    </td>
                                    <td> Rp.179.000 </td>
                                    <td> 10 </td>
                                    <td> <button class="btn btn-dark">Atur</button> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('/assets/images/sock.jpg') }}" alt="5 Packs Socks" height="50">
                                        5 Packs Socks
                                    </td>
                                    <td> Rp.179.000 </td>
                                    <td> 10 </td>
                                    <td> <button class="btn btn-dark">Atur</button> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('/assets/images/sock.jpg') }}" alt="5 Packs Socks" height="50">
                                        5 Packs Socks
                                    </td>
                                    <td> Rp.179.000 </td>
                                    <td> 10 </td>
                                    <td> <button class="btn btn-dark">Atur</button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection