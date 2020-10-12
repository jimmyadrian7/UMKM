@extends('template.PenjualTemplate')

@section('content')


    <div class="mb-3 umkm-title">PRODUK</div>
    <div class="mb-4 umkm-subtitle">Tambah Produk</div>

    <div class="row">
        <div class="col-12">
            
            <div class="card umkm-rounded shadow mb-4">
                <div class="card-body">

                    <div class="font-weight-bold h4 mt-3">Upload Produk</div>
                    <div class="text-danger small font-weight-bold">*Wajib</div>

                    <div class="col-12 mt-3">
                        <img src="{{ asset('/assets/images/sock.jpg') }}" alt="5 Packs Socks" height="80">
                    </div>

                    <div class="col-12 mt-3 mb-4">
                        <a class="btn btn-dark rounded-pill py-2 px-4" href="/penjual/produk/tambah">
                           <i class="fa fa-plus"></i>
                           Tambah Gambar
                       </a>
                    </div>

                </div>
            </div>
            
            <div class="card umkm-rounded shadow mb-4">
                <div class="card-body px-5">

                    <div class="font-weight-bold h4 mt-3">Informasi Produk</div>
                    <div class="text-danger small font-weight-bold">*Wajib</div>

                    <div class="mt-3 row">
                        <div class="col-sm-4">
                            Nama Produk
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Kategori
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Deskripsi Produk
                        </div>
                        <div class="col-sm-8">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Harga Satuan
                        </div>
                        <div class="col-sm-8">
                            {{-- <input type="text" class="form-control"> --}}
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-dark text-white">Rp</div>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="col-sm-4">
                            Stok Produk
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4"></div>

                </div>
            </div>
            <div class="col-12 mb-5 text-right">
                <button class="btn btn-dark px-4">Batal</button>
                <button class="btn btn-dark px-4">Simpan</button>
            </div>

        </div>
    </div>

@endsection