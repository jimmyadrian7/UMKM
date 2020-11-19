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
                       <a class="btn btn-dark rounded-pill py-2 px-4" href="/penjual/produk/create">
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

                                @foreach ($datas as $data)
                                    <tr>
                                        <td>
                                            {{-- <img src="{{ asset($data->StoreImage) }}" alt="5 Packs Socks" height="50"> --}}
                                            {{$data->ProductName}}
                                        </td>
                                        <td> Rp.{{$data->ProductPrice}} </td>
                                        <td> {{$data->ProductStock}} </td>
                                        <td> 
                                            <div class="dropdown">
                                                <button class="btn btn-dark" data-toggle="dropdown">Atur</button> 
                                                <div class="dropdown-menu p-0 border-0" style="background-color: transparent;">
                                                    <a class="btn p-3 w-75 btn-dark umkm-rounded-top mb-0 border-top shadow" href="/penjual/produk/{{$data->ProductId}}/edit">
                                                        <i class="fa fa-pencil"></i>
                                                        Edit
                                                    </a>
                                                    <button class="btn p-3 w-75 btn-light umkm-rounded-bottom mt-0 border-bottom shadow" data-popup="penjual/delete_produk/{{$data->ProductId}}">
                                                        <i class="fa fa-trash"></i>
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection